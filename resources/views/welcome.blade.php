@extends('Layout.layout')
@section('content')

<section id="home" class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="truck-container">
                <img src="{{asset('assets/img/truck.png')}}" class="truck-image" alt="">
            </div>
            <div class="text-hero col-lg-6">
                <h1 class="text-head-hero fw-bold"><span class="text-loyalitas text-danger">Loyalitas</span> dan <span class="text-professionalisme text-danger">Profesionalisme</span> untuk Pengiriman Sempurna</h1>
                <p class="lead">Solusi Penyudangan dan Ekspedisi Terpercaya untuk Kepuasan Mitra</p>
                <a href="#contact" class="text-bold btn btn-contact fw-bold">Kontak Kami ></a>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                <img src="{{asset('assets/img/mitra1.png')}}" alt="Partner 1" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra2.png')}}" alt="Partner 2" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra3.png')}}" alt="Partner 3" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra4.png')}}" alt="Partner 4" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra5.png')}}" alt="Partner 5" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra1.png')}}" alt="Partner 1" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra2.png')}}" alt="Partner 2" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra3.png')}}" alt="Partner 3" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra4.png')}}" alt="Partner 4" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra5.png')}}" alt="Partner 5" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra1.png')}}" alt="Partner 1" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra2.png')}}" alt="Partner 2" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra3.png')}}" alt="Partner 3" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra4.png')}}" alt="Partner 4" />
                </div>
                <div class="slide">
                <img src="{{asset('assets/img/mitra5.png')}}" alt="Partner 5" />
                </div>
            </div>
            </div>
            
    </div>
</section>

<!-- Why Choose Us -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/section2.png') }}" alt="Logistics Operations" class="img-fluid rounded">
            </div>
            <div class="col-md-5 p-5">
                <div class="tentang-kami">
                    Tentang Kami 
                    <svg xmlns="http://www.w3.org/2000/svg" class=  "ms-3" width="30px" height="30px" viewBox="0 0 24 24">
                        <rect width="24" height="24" fill="none"/>
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6 6l6-6m-6-6l6 6"/>
                    </svg>
                    </div>
                <h1 class="mb-4">Mengapa Harus<br><span><b>CV Barfath489?</b></span></h1>
                <p class="text-why-barfath fs-6">
                    Kami cepat, aman, dan dapat diandalkan! Dengan pengalaman yang matang dan tim profesional, kami siap membantu urusan logistik Anda, memastikan setiap langkah proses logistik berjalan lancar, efisien, dan transparan. Pilih Barfath489 untuk solusi logistik terintegrasi, sehingga Anda dapat fokus pada bisnis Anda tanpa khawatir.
                </p>                    
                <a href="#" class="mt-5 btn btn-contact fw-bold">Lebih Lanjut ></a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="service-section">
    <div class="container">
        <div class="row content-wrapper p-5">
        <div class="col-lg-5">
            <div class="text-content">
            <a href="#" class="red-link">Tentang Kami <svg xmlns="http://www.w3.org/2000/svg" class="" width="20px" height="20px" viewBox="0 0 24 24">
                <rect width="24" height="24" fill="none"/>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6 6l6-6m-6-6l6 6"/>
            </svg></a>
            <h2 class="service-title">Apa yang Kami Tawarkan?</h2>
            <p class="service-description">Kami Menawarkan jasa angkutan dan ekspedisi yang cepat dan handal dengan jangkauan luas</p>
            </div> 
            <div class="red-line"></div>
        </div>
        <div class="img-content col-lg-7 d-none d-sm-block">
            <img src="{{asset('assets/img/offer-img.png')}}" alt="Warehouse Storage" />
        </div>
        </div>
    </div>
</section>

<!-- Coverage Map -->
<div class="container py-5">
    <h2 class="fw-bold text-center mb-4">Jangkauan Barfath</h2>
    <p class="text-center mb-4">Barfath melayani seluruh Indonesia dengan logistik jasa, armada handal, dan layanan cepat</p>
    <div class="map-container">
        <div id="map"></div>
    </div>
</div>

<a href="https://wa.me/+6285674677772" class="whatsapp-float">
    <span class="lg-me-3 me-2">Hubungi untuk Lebih Tau Lebih Lanjut</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
</a>

@endsection