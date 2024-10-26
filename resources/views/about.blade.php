@extends('Layout.layout')
@section('content')

<!-- Hero Section -->
<header class="hero d-flex align-items-center">
    <div class="container text-center text-white position-relative">
        <h1 class="display-4 fw-bold">Tentang Kami</h1>
        <p class="lead">Solusi Pergudangan dan Ekspedisi Terpercaya untuk Kepuasan Mitra</p>
    </div>
</header>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-image">
                    <img src="{{asset('assets/img/tentang-kami-1.png')}}" alt="Tim Barfath489" class="img-fluid rounded-4">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="section-title fw-bold">CV Barfath489</h2>
                <div style="display: flex; align-items: center; justify-content: flex-start; margin-bottom: 2rem;">
                    <div style="width: 15px; height: 15px; border-radius: 100%; background-color: #E31E24;"></div>
                    <div style="width: 90px; height: 4px; background-color: #E31E24;"></div>
                </div>
                <p class="lead">Perusahaan kami berdiri pada awal Januari 2022. Dengan nama CV BARFATH 489, Perusahaan kami merupakan sebuah perusahaan swasta nasional yang bergerak Di bidang perdagangan umum dan jasa.  Perusahaan kami dibekali dengan tenaga yang berpengalaman dan tenaga kerja yang professional, kami akan selalu terus meninggkatkan kualitas pelayanan kami sehingga dapat memberikan kepuasan kepada para pengguna jasa kami / mitra kerja kami.</p>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="py-5 bg-light">
    <div class="row container justify-content-center">
        <div class="col-lg-5 mt-5">
            <h2 class="section-title mt-5 mb-4 fw-bold">Vision</h2>
            <div style="display: flex; align-items: center; justify-content: flex-start; margin-bottom: 2rem;">
                <div style="width: 15px; height: 15px; border-radius: 100%; background-color: #E31E24;"></div>
                <div style="width: 90px; height: 4px; background-color: #E31E24;"></div>
            </div>
            <p class="lead">Menjadi penyedia layanan ekspedisi B2B terkemuka yang diakui secara global atas efisiensi operasional, inovasi, dan komitmen terhadap kepuasan pelanggan bisnis.</p>
        </div>
        <div class="col-lg-5">
            <img src="{{ asset('assets/img/tentang-kami-2.png') }}" alt="">
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="mt-3" style = "margin-left:-50px;">
                    <img src="{{ asset('assets/img/tentang-kami-3.png') }}" width='700' alt="Delivery invitation-">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-end">
                    <h2 class="h1 mb-0 fw-bold">MISSION</h2>
                </div>
                <div style="display: flex; align-items: center; justify-content: flex-end; margin-bottom: 4rem;">
                    <div style="width: 170px; height: 4px; background-color: #E31E24;"></div>
                    <div style="width: 15px; height: 15px; border-radius: 100%; background-color: #E31E24;"></div>
                </div>

                <div class="mission-items">
                    <!-- First Mission -->
                    <div class="mission-item mb-4">
                        <div class="d-flex align-items-start">
                            <div class="mission-number bg-white p-2" 
                            style="min-width: 50px; height: 50px; border: 5px solid #E31E24; border-top-width: 2px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <span class="fs-3 fw-bold text-danger">1</span>
                            </div>
                            <div class="ms-3" style="margin-top:-25px;">
                                <p class="fs-6 fw-bold mb-2">Menjadi perusahaan jasa layanan yang unggul dan handal</p>
                                <p class="text-muted">BARFATH489 selalu berusaha untuk memberikan layanan logistik dan ekspedisi dengan kualitas terbaik bagi klien B2B kami, menciptakan solusi yang disesuaikan dengan kebutuhan bisnis mereka.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Second Mission -->
                    <div class="mission-item mb-4">
                        <div class="d-flex align-items-start">
                            <div class="mission-number bg-white p-2" 
                            style="min-width: 50px; height: 50px; border: 5px solid #E31E24; border-top-width: 2px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <span class="fs-3 fw-bold text-danger">2</span>
                            </div>
                            <div class="ms-3" style="margin-top:-25px;">
                                <p class="fs-6 fw-bold mb-2">Memberikan dan menjaga komitmen untuk berkembang kepada para klien dan mitra kerjasama kami</p>
                                <p class="text-muted">Kami fokus pada hubungan jangka panjang dengan setiap klien bisnis, selalu siap untuk berkembang bersama mereka melalui inovasi yang berkelanjutan dalam bidang transportasi dan pergudangan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Third Mission -->
                    <div class="mission-item">
                        <div class="d-flex align-items-start">
                            <div class="mission-number bg-white p-2" 
                            style="min-width: 50px; height: 50px; border: 5px solid #E31E24; border-top-width: 2px; border-radius: 10px; display: flex; align-items: center; justify-content: center;">
                            <span class="fs-3 fw-bold text-danger">3</span>
                            </div>
                            <div class="ms-3" style="margin-top:-25px;">
                                <p class="fs-6 fw-bold mb-2">Kepuasan klien dan mitra kerjasama kami adalah tujuan utama kami</p>
                                <p class="text-muted">Maju bersama mitra bisnis dengan memberikan layanan ekspedisi yang dapat diandalkan dan efisien untuk memastikan operasional bisnis mereka tetap lancar dan berdaya saing tinggi.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Investor Section -->
<section class="pb-5" style="background-color:#f4f4f4;padding-top:0">
    <div class="container">
        <div style="display: flex; align-items: center; justify-content: center;">
            <div style="width: 100%; height: 1px; background-color: #E31E24;"></div>
            <h2 class="section-title text-center mb-5 mt-5" style="width: 50%; color:#585858;">Investor Utama</h2>
            <div style="width: 100%; height: 1px; background-color: #E31E24;"></div>
        </div>
        <div class="row row-cols-2 row-cols-md-5 g-4 align-items-center">
            <div class="col">
                <img src="{{asset('assets/img/mitra1.png')}}" alt="PT. Parit Padang Global" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset('assets/img/mitra2.png')}}" alt="MPI" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset('assets/img/mitra3.png')}}" alt="GMG" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset('assets/img/mitra4.png')}}" alt="Penta Valent" class="img-fluid">
            </div>
            <div class="col">
                <img src="{{asset('assets/img/mitra5.png')}}" alt="Mountain" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- Structure Section -->
<section class="py-5 bg-white">
    <div class="container" style="position: relative;"> <!-- Added relative position to the container -->
        <div class="row g-4 justify-content-center">
            <!-- Content section -->
            <div class="col-lg-5" style="z-index: 2; position: relative;">
                <h2 class="section-title mt-5 mb-4 fw-bold">Struktur CV Barfath489</h2>
                <div style="display: flex; align-items: center; justify-content: flex-start; margin-bottom: 2rem;">
                    <div style="width: 15px; height: 15px; border-radius: 100%; background-color: #E31E24;"></div>
                    <div style="width: 90px; height: 4px; background-color: #E31E24;"></div>
                </div>
                <p class="lead">struktur organisasi CV Barfath489, menampilkan posisi komisaris, direktur, koordinator lapangan, admin, dan pengemudi</p>
            </div>

            <!-- Image section -->
            <div class="col-lg-7" style="margin-left: -150px; z-index: 1; position: relative;">
                <img src="{{asset('assets/img/tentang-kami-4.png')}}" alt="" width="850">
            </div>
        </div>
    </div>
</section>

<!-- Add this section before the footer -->
<section class="legalitas-section">
    <h2 class = "fw-bold text-center">Legalitas Barfath</h2>
    <p class = "text-center">CV BARFATH489 memiliki legalitas lengkap bermasuk NIB dan Surat Izin Usaha yang sah sesuai peraturan.</p>
    <div class="legalitas-slide">
        <div class="slide-number">
            <span class="fs-1">AKTA PENDIRIAN</span>
            <br>
            <span class = "fs-1">02/2022</span>
        </div>
        <div class="slide-controls">
            <button class="slide-button" aria-label="Previous slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M15 18l-6-6 6-6"/>
                </svg>
            </button>
            <button class="slide-button" aria-label="Next slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M9 18l6-6-6-6"/>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- invitation-s Section -->
<section class="invitation-section">
    <div class="container">
        <div class="row content-wrapper">
        <div class="col-lg-5">
            <div class="text-content">
            <a href="#" class="red-link">Tentang Kami <svg xmlns="http://www.w3.org/2000/svg" class="" width="20px" height="20px" viewBox="0 0 24 24">
                <rect width="24" height="24" fill="none"/>
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6 6l6-6m-6-6l6 6"/>
            </svg></a>
            <h2 class="section-title">Tertarik Untuk Bergabung?</h2>
            <p class="invitation-description">Jadilah Bagian dari CV BARFATH 489!</p>
            <a href="https://wa.me/+6285674677772" class="contact-button">
                Hubungi untuk Lebih Tau Lebih Lanjut
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
            </a>
            </div> 
            <div class="red-line"></div>
        </div>
        <div class="img-content col-lg-7 d-none d-sm-block">
            <img src="{{asset('assets/img/tentang-kami-5.png')}}" alt="Warehouse Storage" />
        </div>
        </div>
    </div>
</section>

@endsection