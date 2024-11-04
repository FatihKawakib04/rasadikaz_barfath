<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact-us');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
            'sender_name' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'regex:/^[\p{L}\s\-\'\.]+$/u',
                function ($attribute, $value, $fail) {
                    $sqlPatterns = '/\b(SELECT|INSERT|UPDATE|DELETE|DROP|UNION|WHERE|FROM)\b/i';
                    if (preg_match($sqlPatterns, $value)) {
                        $fail('Nama mengandung kata-kata yang tidak diizinkan.');
                    }
                },
            ],
            'sender_email' => [
                'required',
                'string',
                'email:rfc,dns,spoof,filter,strict',
                'max:254',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',
                function ($attribute, $value, $fail) {
                    $domain = substr(strrchr($value, "@"), 1);
                    
                    if (preg_match('/[^\x00-\x7F]/', $value)) {
                        $fail('Alamat email mengandung karakter yang tidak valid.');
                    }
    
                    if (!checkdnsrr($domain, 'MX')) {
                        $fail('Domain email tidak valid.');
                    }
    
                    $key = 'email_domain_' . $domain;
                    $attempts = Cache::get($key, 0);
                    if ($attempts > 50) {
                        $fail('Terlalu banyak percobaan dari domain ini.');
                    }

                    Cache::put($key, $attempts + 1, 3600);
                },
            ],
            'sender_company' => [
                'required',
                'string',
                'min:2',
                'max:100',
                'regex:/^[\p{L}\p{N}\s\-\'\.,&]+$/u',
                function ($attribute, $value, $fail) {
                    if (preg_match('/[<>{}()]/', $value)) {
                        $fail('Nama perusahaan mengandung karakter yang tidak diizinkan.');
                    }
                },
            ],
            'sender_subject' => [
                'required',
                'string',
                'min:5',
                'max:255',
                'regex:/^[\p{L}\p{N}\s\-_.,!?()\'\"]+$/u',
                'not_regex:/<[^>]*>/'
            ],
            'sender_body' => [
                'required',
                'string',
                'min:10',
                'max:50000',
                'not_regex:/<[^>]*>/',
                function ($attribute, $value, $fail) {
                    $suspiciousPatterns = [
                        '/\b(?:http|https):\/\/[^\s<>\[\]{}|\\\^]+/i',
                        '/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}\b/',
                        '/(?:\+?\d{2})?\d{10,}/',
                    ];
    
                    $matches = 0;
                    foreach ($suspiciousPatterns as $pattern) {
                        $matches += preg_match_all($pattern, $value);
                    }
    
                    if ($matches >= 5) {
                        $fail('Terlalu banyak URL, email, atau nomor telepon dalam pesan.');
                    }
    
                    $harmfulPatterns = [
                        '/<script/i',
                        '/javascript:/i',
                        '/onclick/i',
                        '/onerror/i',
                        '/onload/i',
                        '/eval\(/i',
                    ];
    
                    foreach ($harmfulPatterns as $pattern) {
                        if (preg_match($pattern, $value)) {
                            $fail('Pesan mengandung konten yang tidak diizinkan.');
                        }
                    }
                },
            ],
        ], [
            'sender_name.required' => 'Nama wajib diisi.',
            'sender_name.min' => 'Nama minimal 2 karakter.',
            'sender_name.max' => 'Nama maksimal 100 karakter.',
            'sender_name.regex' => 'Nama hanya boleh mengandung huruf dan tanda baca dasar.',
            
            'sender_email.required' => 'Alamat email diperlukan.',
            'sender_email.email' => 'Format email tidak valid.',
            'sender_email.max' => 'Email terlalu panjang.',
            'sender_email.regex' => 'Format email tidak valid.',
            
            'sender_company.required' => 'Nama perusahaan wajib diisi.',
            'sender_company.min' => 'Nama perusahaan minimal 2 karakter.',
            'sender_company.max' => 'Nama perusahaan maksimal 100 karakter.',
            'sender_company.regex' => 'Nama perusahaan hanya boleh mengandung huruf, angka, dan tanda baca dasar.',
            
            'sender_subject.required' => 'Subjek wajib diisi.',
            'sender_subject.min' => 'Subjek minimal 5 karakter.',
            'sender_subject.max' => 'Subjek maksimal 255 karakter.',
            'sender_subject.regex' => 'Subjek mengandung karakter yang tidak valid.',
            
            'sender_body.required' => 'Isi pesan diperlukan.',
            'sender_body.min' => 'Pesan minimal 10 karakter.',
            'sender_body.max' => 'Pesan terlalu panjang.',
            'sender_body.not_regex' => 'HTML tidak diperbolehkan dalam pesan.',
        ]);

        try {
            $sanitizedName = strip_tags(trim($request->sender_name));
            $sanitizedCompany = strip_tags(trim($request->sender_company));
            $sanitizedEmail = strtolower(trim(filter_var($request->sender_email, FILTER_SANITIZE_EMAIL)));
            $sanitizedSubject = strip_tags(trim($request->sender_subject));
            $sanitizedBody = nl2br(htmlspecialchars(trim($request->sender_body)));

            $key = 'email_send_' . md5($request->ip());
            if (RateLimiter::tooManyAttempts($key, 10)) {
                $seconds = RateLimiter::availableIn($key);
                return ["errors" => "Too many attempts. Please try again in {$seconds} seconds."];
            }
            
            RateLimiter::hit($key, 300);

            $mail = new PHPMailer(true);

            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = env('MAIL_ENCRYPTION');
            $mail->Port = env('MAIL_PORT');
    
            $mail->setFrom($sanitizedEmail);
            $mail->addAddress(env('MAIL_USERNAME'));
    
            $mail->isHTML(true);
    
            $mail->Subject = $sanitizedSubject;
            $mail->Body    = $sanitizedBody;
    
            if( !$mail->send() ) {
                return dd($mail->ErrorInfo);
            }else {
                return back();
            }
        } catch (\Exception $e) {            
            return ['message' => $e->getMessage()];
        }
    }
}
