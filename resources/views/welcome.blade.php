<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barfath489 - Logistics Solutions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>
    <style>
         :root {
            --primary-color: #E31E24;
            --dark-color: #1E1E1E;
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .btn-primary-custom {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
        }
        
        .navbar {
            background-color: transparent;
            position: fixed;
            width: 100%;
            z-index: 1000;
            padding: 1rem 0;
        }

        .navbar-brand img {
            height: 32px;
        }

        .nav-link {
            color: white !important;
            font-size: 14px;
            margin-left: 2rem;
        }

        .nav-item:first-child .nav-link {
            color: var(--primary-color) !important;
        }
        
        .hero-section {
            background: url('assets/img/hero-background.png') center/cover;
            min-height: 80vh;
            color: white;
            position: relative;
            display: flex;
            align-items: center;
        }

        .hero-content {
            max-width: 600px;
            padding: 2rem;
        }

        .hero-title {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .hero-title .red-text {
            color: var(--primary-color);
        }

        .hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .btn-contact {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            font-weight: 500;
        }

        .truck-container {
            position: absolute;
            right: 5%;
            top: 50%;
            transform: translateY(-50%);
            width: 45%;
        }

        .truck-image {
            width: 100%;
            position: relative;
            z-index: 2;
        }

        .btn-contact {
            background-color: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            border: none;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-contact:hover {
            background-color: #ff1f26;
            color: white;
            transform: translateY(-2px);
        }
        
        .service-icon {
            width: 80px;
            height: 80px;
            background-color: var(--primary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
        
        .map-section {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        
        @-webkit-keyframes scroll {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
        100% {
            -webkit-transform: translateX(calc(-250px * 7)); /* Adjust width here based on number of images */
        }
        }

        @keyframes scroll {
        0% {
            -webkit-transform: translateX(0);
            transform: translateX(0);
        }
        100% {
            -webkit-transform: translateX(calc(-250px * 7)); /* Adjust width here based on number of images */
        }
        }

        .slider {
        height: 100px;
        width: 100%;
        overflow: hidden;
        position: relative;
        margin: auto;
        }

        .slider::before,
        .slider::after {
        content: "";
        position: absolute;
        height: 100px;
        width: 200px;
        z-index: 2;
        background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
        }

        .slider::after {
        right: 0;
        top: 0;
        -webkit-transform: rotateZ(180deg);
        transform: rotateZ(180deg);
        }

        .slider::before {
            left: 0;
            top: 0;
        }

        .slide-track {
            display: flex;
            width: calc(250px * 1); /* Double the number of slides to create infinite loop effect */
            -webkit-animation: scroll 40s linear infinite;
            animation: scroll 40s linear infinite;
        }

        .slide {
            max-width: 150px;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 100px; /* Adjust this value to increase/decrease spacing */
        }

        .tentang-kami {
            font-size: 1rem;
            color: #FF0000; /* Red color for the text */
            display: flex;
            align-items: center;
            font-weight: bold;
        }

        .text-why-barfath {
            text-align: justify;
        }

        .service-section {
            background-color: #1a1a1a;
            color: white;
            padding: 40px 0;
            font-family: Arial, sans-serif;
        }
        
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .service-section {
            background-color: #1a1a1a;
            color: white;
            padding: 40px 0;
            font-family: Arial, sans-serif;
        }
        
        .container {
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .red-link {
            color: #ff0000;
            text-decoration: none;
            font-size: 14px;
            margin-bottom: 10px;
            display: block;
        }
        
        .service-title {
            font-size: 32px;
            margin: 10px 0;
            font-weight: 600;
        }
        
        .service-description {
            color: #cccccc;
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.5;
        }
        
        .content-wrapper {
            padding: 150px 0 !important;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .img-content img {
            width: 120%;
            margin-left:-100px;
        }

        .text-content {
            flex: 0 0 40%;
        }

        .red-line {
            width: 3px;
            height: 320px; 
            background-color: red;
            margin-top: 50px;
            margin-left: 60px;
        }

        #map-container {
            position: relative;
            width: 100%;
            height: 500px;
            border: 2px solid #0099ff;
            border-radius: 8px;
            overflow: hidden;
        }

        #map {
            width: 100%;
            height: 100%;
        }

        .map-controls {
            position: absolute;
            right: 10px;
            top: 10px;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .map-button {
            background: white;
            border: 1px solid #ccc;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 18px;
        }

        .location-marker {
            background: #ff3333;
            color: white;
            padding: 8px 12px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 8px;
            white-space: nowrap;
        }

        .truck-icon {
            width: 20px;
            height: 20px;
        }

        .contact-button {
            display: flex;
            justify-content: center;
            gap: 10px;
            background: #00e676;
            color: white;
            padding: 12px 24px;
            border-radius: 30px;
            text-decoration: none;
            margin-left: auto;  /* Pushes the button to the right */
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
            .hero-section {
                padding-top: 200px;
                min-height: 60vh;
            }
            
            .display-4 {
                font-size: 2rem;
            }
            
            .lead {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/img/logo.png')}}" alt="Barfath489 Logo" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">KONTAK KAMI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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
                    <a href="#" class="mt-5 btn btn-primary-custom fw-bold">Lebih Lanjut ></a>
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
    <section class="map-section">
        <div class="container">
            <h2 class="text-center mb-4">Jangkauan Barfath</h2>
            <p class="text-center mb-4">Barfath melayani seluruh Indonesia dengan logistik jasa, armada handal, dan layanan cepat</p>
            <div id="map-container">
                <div id="map"></div>
                <div class="map-controls">
                    <button class="map-button" onclick="zoomIn()">+</button>
                    <button class="map-button" onclick="zoomOut()">-</button>
                    <button class="map-button" onclick="goHome()">⌂</button>
                </div>
            </div>
    
            <a href="https://wa.me/+6285674677772" class="contact-button">
                Hubungi untuk Lebih Tau Lebih Lanjut
                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><rect width="24" height="24" fill="none"/><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
            </a>
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
     <div class="copyright">
        © 2024 CV BARFATH 489. All rights reserved. Developed by RASADIKAZ
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        // Inisialisasi peta
        const map = L.map('map', {
            center: [-2.5489, 118.0149],
            zoom: 5,  // Zoom level to fit Indonesia
            zoomControl: false,
            maxBounds: [[-11, 95], [6, 141]],  // Bound the map to Indonesia's area
            maxBoundsViscosity: 1.0  // Ensure the map doesn't move outside bounds
        });
    
        // Ubah tile layer ke yang lebih ringan (Carto Light)
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors © CartoDB',
        maxZoom: 20,
        minZoom: 4
    }).addTo(map);
    
        // Data lokasi
        const locations = [
            { name: 'Cipanas', coords: [-6.7358, 106.9867] },
            { name: 'Sukabumi', coords: [-6.9277, 106.9300] },
            { name: 'Tangerang', coords: [-6.1781, 106.6300] }
        ];
    
        // Tambahkan clustering untuk optimalisasi kinerja
        const markers = L.markerClusterGroup();
    
        // Fungsi untuk membuat marker kustom
        function createCustomMarker(location) {
            const markerHtml = `
                <div class="location-marker">
                    <svg class="truck-icon" viewBox="0 0 24 24" fill="white">
                        <path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5 1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
                    </svg>
                    ${location.name}
                </div>`;
    
            const icon = L.divIcon({
                html: markerHtml,
                className: 'custom-marker',
                iconSize: null
            });
    
            // Buat marker dan tambahkan ke cluster group
            const marker = L.marker(location.coords, { icon: icon });
            markers.addLayer(marker);
        }
    
        // Tambahkan marker untuk setiap lokasi
        locations.forEach(createCustomMarker);
    
        // Tambahkan marker cluster ke peta
        map.addLayer(markers);
    
        // Fungsi kontrol peta
        function zoomIn() {
            map.zoomIn();
        }
    
        function zoomOut() {
            map.zoomOut();
        }
    
        function goHome() {
            map.setView([-2.5489, 118.0149], 5);
        }
    </script>    
</body>
</html>