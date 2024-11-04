<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Associate;
use App\Models\Company;
use App\Models\CarUnit;
use App\Models\Legality;

class AboutController extends Controller
{
    protected $associates, $company, $car_units, $legalities;

    public function __construct(Associate $associate, Company $company, CarUnit $car_units, Legality $legalities)
    {
        $this->associates = $associate;
        $this->company = $company;
        $this->car_units = $car_units;
        $this->legalities = $legalities;
    }

    public function index(Request $request)
    {
        $data = [
            'associates' => $this->getAssociates(),
            'company' => $this->getCompany(),
            'missionTextFormat' => $this->formatContent($this->getCompany()->mission),
            'legalities' => $this->getLegalities()
        ];

        return view('about', $data);
    }

    public function getAssociates()
    {
        $associates = $this->associates::all();

        return $associates;
    }

    public function getCompany()
    {
        $company = $this->company::where('id', '4576a792-6990-45fe-a993-d6c56c8b3c6d')->first();

        return $company;
    }

    public function getLegalities()
    {
        $legalities = $this->legalities::all();

        return $legalities;
    }

    public function formatContent($txt)
    {
        $htmlText = $txt;

        $dom = new \DOMDocument();
        @$dom->loadHTML($htmlText);

        $sections = [];
        $currentIndex = -1;

        // Loop through each <p> tag
        foreach ($dom->getElementsByTagName('p') as $p) {
            $strongTag = $p->getElementsByTagName('strong')->item(0);

            if ($strongTag) {
                // New section found, increment index and create new section array
                $currentIndex++;
                $sections[$currentIndex] = [
                    'index' => $currentIndex,
                    'title' => $strongTag->textContent,
                    'content' => ''
                ];
            } else {
                // Add content to the current section
                $sections[$currentIndex]['content'] .= $p->textContent . "\n";
            }
        }

        return $sections; // Return the array as JSON
    }
}
