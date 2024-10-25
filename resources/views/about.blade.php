<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - CV Barfath 489</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #E31E24;
            --dark-color: #1E1E1E;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Custom styles that Bootstrap doesn't cover */
        .navbar {
            background-color: transparent;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background-color: var(--dark-color);
        }

        .nav-link {
            color: white !important;
            font-weight: 500;
            font-size: 0.9rem;
            padding: 0.5rem 1.5rem !important;
        }

        .nav-link.active {
            color: var(--primary-color) !important;
        }

        .hero {
            background: url('assets/img/hero-background.png') center/cover;
            min-height: 60vh;
        }

        .hero::before {
            content: '';
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .mission-number {
            color: var(--primary-color);
            font-size: 1.5rem;
            font-weight: bold;
        }

        .about-image {
            margin-top: -150px;
        }

        .mission-item {
            margin-left:70px;
        }

        .legalitas-section {
            position: relative;
            overflow: hidden;
            padding: 0;
            
        }

        .legalitas-slide {
            position: relative;
            height: 400px;
            background: url('assets/img/tentang-kami-6.png') center/cover;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-align: center;
        }

        .legalitas-slide::after {
            content: ''; /* Required for ::after pseudo-element */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height:100%;
            background-color: rgba(204, 20, 20, 0.5); /* Semi-transparent overlay */
            z-index: 1; /* Ensure it's above the background but behind the content */
        }

        .legalitas-slide * {
            position: relative;
            z-index: 2; /* Ensure content is above the overlay */
        }

        .legalitas-slide h2 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .legalitas-slide p {
            font-size: 1rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .slide-controls {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            justify-content: space-between;
            padding: 0 2rem;
        }

        .slide-button {
            background: rgba(255, 255, 255, 0.3);
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .slide-button:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        .slide-number {
            font-size: 1.2rem;
            margin-top: 1rem;
        }

        .invitation-section {
            background-color: #1a1a1a;
            color: white;
            font-family: Arial, sans-serif;
        }

        .red-link {
            color: #ff0000;
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 10px;
            display: block;
        }
        
        .invitation-title {
            font-size: 32px;
            margin: 10px 0;
            font-weight: 600;
        }
        
        .invitation-description {
            color: #cccccc;
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.5;
        }
        
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .img-content img {
            width: 100%;
            margin-left:0px;
        }

        .text-content {
            flex: 0 0 40%;
            margin: 50px 0;
        }

        .red-line {
            width: 3px;
            height: 320px; 
            background-color: red;
            margin-top: 50px;
            margin-left: 60px;
        }

        .contact-button {
            display: flex;
            justify-content: center;
            gap: 10px;
            background: #00D34D;
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            margin-left: 0;  /* Pushes the button to the right */
            margin-right: 0;    /* Ensures it's aligned to the right */
            width: fit-content;
            margin-top: 30px;
        }

        footer {
            background-color: #CC1414;
            color: white;
            padding: 40px 0 20px 0;
            width: 100%;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: grid;
            grid-template-columns: 2fr 2fr 1fr;
            gap: 60px;
            position: relative;
        }

        .footer-container::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 20px;
            right: 20px;
            height: 1px;
            background: rgba(255, 255, 255, 0.1);
        }

        .footer-section h2 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        .company-description {
            font-size: 14px;
            line-height: 1.6;
            opacity: 0.9;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            text-decoration: none;
            color: white;
        }

        .social-links img {
            width: 24px;
            height: 24px;
            transition: opacity 0.2s;
        }

        .social-links img:hover {
            opacity: 0.8;
        }

        .contact-info {
            font-size: 14px;
            line-height: 1.8;
        }

        .quick-links {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .quick-links a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            transition: opacity 0.2s;
        }

        .quick-links a:hover {
            opacity: 0.8;
        }

        .copyright {
            background-color: #ffffff;
            text-align: center;
            padding: 10px 0 10px 0;
            font-size: 14px;
            opacity: 0.9;
            color:black;
        }

        @media (max-width: 768px) {
            .about-image {
                margin-top: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/img/logo.png')}}" alt="Barfath489 Logo" height="32">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">KONTAK KAMI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
        <h2 class = "text-center">Legalitas Barfath</h2>
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

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <!-- Company Info Section -->
            <div class="footer-section">
                <h2>BARFATH489</h2>
                <p class="company-description">
                    Perusahaan swasta nasional yang berdiri sejak Januari 2022, bergerak di bidang pengangkutan umum dan jasa, termasuk pengiriman, dan jasa angkutan. Kami berkomitmen memberikan layanan terbaik dan berkelanjutan demi kepuasan pelanggan serta mitra kerja.
                </p>
                <div class="social-links">
                    <a href="#" aria-label="Instagram">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z'/%3E%3C/svg%3E" alt="Instagram">
                    </a>
                    <a href="#" aria-label="Facebook">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z'/%3E%3C/svg%3E" alt="Facebook">
                    </a>
                    <a href="#" aria-label="Twitter">
                        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='white' viewBox='0 0 24 24'%3E%3Cpath d='M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z'/%3E%3C/svg%3E" alt="Twitter">
                    </a>
                </div>
            </div>

            <!-- Contact Info Section -->
            <div class="footer-section">
                <h2>Kantor Pusat</h2>
                <div class="contact-info">
                    <p>JL. RAYA TAJUR RT.004/002 NO. 37<br>
                    BOGOR TIMUR, KOTA BOGOR</p>
                    <br>
                    <p>0856 7467 772 ( M. YOSEP )<br>
                    0819 9891 4413 ( SEVIRA M. )</p>
                    <br>
                    <p>CV.BARFATH489@GMAIL.COM</p>
                </div>
            </div>

            <!-- Quick Links Section -->
            <div class="footer-section">
                <h2>Quick link</h2>
                <div class="quick-links">
                    <a href="#">Beranda</a>
                    <a href="#">Tentang Kami</a>
                    <a href="#">Kontak Kami</a>
                </div>
            </div>
        </div>
    </footer>

     <!-- Copyright Section -->
     <div class="copyright border border-dark">
        © 2024 CV BARFATH 489. All rights reserved. Developed by RASADIKAZ
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add background to navbar on scroll
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });

        const prevButton = document.querySelector('.slide-button:first-child');
        const nextButton = document.querySelector('.slide-button:last-child');
        
        prevButton.addEventListener('click', () => {
        });
        
        nextButton.addEventListener('click', () => {
        });
    </script>
</body>
</html>