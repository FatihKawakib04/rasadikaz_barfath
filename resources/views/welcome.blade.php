@extends('Layout.layout')
@section('content')

<section id="home" class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="truck-container">
                <img src="{{asset('assets/img/truck.png')}}" class="truck-image d-none d-lg-block" alt="">
            </div>
            <div class="text-hero col-lg-6">
                <h1 class="text-head-hero fw-bold"><span class="text-loyalitas text-danger">Loyalitas</span> dan <span class="text-professionalisme text-danger">Profesionalisme</span> untuk Pengiriman Sempurna</h1>
                <p class="lead">Solusi Penyudangan dan Ekspedisi Terpercaya untuk Kepuasan Mitra</p>
                <a href="#contact" class="text-bold btn btn-contact fw-bold">Kontak Kami ></a>
            </div>
        </div>
    </div>
</section>

<div class="logo-slider-container">
    <div class="logo-slider-wrapper">
        @foreach ($associates as $a)
            <div class="logo-slide">
                <img src="{{ asset('storage/' . $a->logo) }}" alt="Partner Logo" loading="lazy">
            </div>
        @endforeach
        {{-- Duplicate logos for infinite scroll effect --}}
        @foreach ($associates as $a)
            <div class="logo-slide">
                <img src="{{ asset('storage/' . $a->logo) }}" alt="Partner Logo" loading="lazy">
            </div>
        @endforeach
    </div>
</div>

<!-- Why Choose Us -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/section2.png') }}" alt="Logistics Operations" class="img-fluid rounded">
            </div>
            <div class="col-md-5 p-5">
                <div class="tentang-kami">
                    <a href="/about-us">
                        Tentang Kami 
                        <svg xmlns="http://www.w3.org/2000/svg" class="ms-3" width="30px" height="30px" viewBox="0 0 24 24">
                            <rect width="24" height="24" fill="none"/>
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6 6l6-6m-6-6l6 6"/>
                        </svg>
                    </a>
                </div>
                <h1 class="mb-4">Mengapa Harus<br><span><b>{{$company->name}}?</b></span></h1>
                <p class="text-why-barfath fs-6">{{$company->description}}</p>                    
                <a href="/about-us" class="mt-5 btn btn-contact fw-bold">Lebih Lanjut ></a>
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
            <a href="/about-us" class="red-link">Tentang Kami <svg xmlns="http://www.w3.org/2000/svg" class="" width="20px" height="20px" viewBox="0 0 24 24">
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

<a href="https://wa.me/6282114818279?text=Halo%20Admin%20CV%20Barfath%20489%20%F0%9F%91%8B%F0%9F%8F%BB%0A%0APerkenalkan%2C%20saya%20%5BNama%20Anda%5D%20dari%20%5BNama%20Perusahaan%2FInstansi%5D.%20Saya%20tertarik%20untuk%20membahas%20potensi%20kerjasama%20antara%20%5BPerusahaan%20Saya%5D%20dan%20CV%20Barfath%20489.%20Apakah%20ada%20waktu%20untuk%20mendiskusikan%20ini%20lebih%20lanjut%3F%0A%0ASaya%20juga%20berharap%20bisa%20mendapatkan%20informasi%20mengenai%20produk%2Fjasa%20yang%20ditawarkan.%0A%0ATerima%20kasih%20atas%20waktu%20dan%20perhatian%20Anda%20%F0%9F%99%8F%F0%9F%8F%BB.%20Saya%20tunggu%20kabarnya%2C%20semoga%20kita%20bisa%20bekerja%20sama!%0A%0ASalam%2C%0A%5BNama%20Anda%5D" 
    class="whatsapp-float" target="_blank">
        <span class="lg-me-3 me-2">Hubungi untuk Lebih Tau Lebih Lanjut</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
            <rect width="24" height="24" fill="none"/>
            <path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/>
        </svg>
</a>

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
    // Initialize the map centered on Indonesia
    const map = L.map('map', {
        center: [-2.5, 118], 
        zoom: 5,
        zoomControl: false,
        maxBounds: [
            [-11, 95], // Southwest coordinates
            [6, 141]  // Northeast coordinates
        ],
        minZoom: 5
    });

    // Custom zoom controls
    const customControls = L.control({position: 'topleft'});
    customControls.onAdd = function(map) {
        const div = L.DomUtil.create('div', 'custom-map-controls');
        div.innerHTML = `
            <button class="zoom-control" onclick="map.zoomIn()">+</button>
            <button class="zoom-control" onclick="map.zoomOut()">−</button>
        `;
        return div;
    };
    customControls.addTo(map);

    // Custom styled tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors',
        maxZoom: 19
    }).addTo(map);

    // Locations to mark
    const carUnits = @json($car_units);

    // Custom marker using the uploaded image
    const customIcon = L.icon({
        iconUrl: 'assets/img/marker-map.svg',
        iconSize: [25, 25],
        iconAnchor: [12, 12],
        popupAnchor: [0, -10]
    });

    // Function to add markers with popups
    function createCustomMarker(car_unit) {
        const location = car_unit.location;
        const marker = L.marker([location.latitude, location.longitude], { icon: customIcon }).addTo(map);
        
        const popupContent = `
            <div class="marker-popup">
                <div class="popup-container">
                    <div class="truck-circle">
                        <svg viewBox="0 0 24 24" width="14" height="14">
                            <path fill="#FF0000" d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
                        </svg>
                    </div>
                    <div class="popup-content">
                        <span class="location-name">${location.name_location}</span>
                        <span class="vehicle-count">${car_unit.unit} Mobil</span>
                    </div>
                </div>
            </div>
        `;

        const popup = L.popup({
            className: 'custom-popup',
            closeButton: false,
            offset: [0, -10]
        }).setContent(popupContent);

        marker.bindPopup(popup);
    }

    // Add markers for each location
    carUnits.forEach(carUnit => {
        createCustomMarker(carUnit);
    });

    // Style the map container
    const mapContainer = document.getElementById('map');
    mapContainer.style.backgroundColor = '#000000';

    // Add custom styles
    const style = document.createElement('style');
    style.textContent = `
        .leaflet-tile-container img {
            filter: grayscale(100%) brightness(0.8) !important;
        }

        .marker-popup {
            padding: 0;
            margin: 0;
        }

        .popup-container {
            display: flex;
            align-items: center;
            background: linear-gradient(to right, rgba(255,36,52), rgba(255,255,255,0.3));
            padding: 8px 12px;
            border-radius: 8px;
            min-width: 140px;
            position: relative;
        }

        .truck-circle {
            background: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
        }

        .popup-content {
            display: flex;
            flex-direction: column;
            color: white;
            font-family: Arial, sans-serif;
        }

        .location-name {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 2px;
        }

        .vehicle-count {
            background-color:rgba(0,0,0,0.3);
            font-size: 12px;
            border-radius: 5px;
            text-align:center;
        }

        .custom-popup .leaflet-popup-content-wrapper {
            padding: 0;
            background: transparent;
            box-shadow: none;
        }

        .custom-popup .leaflet-popup-content {
            margin: 0;
        }

        .custom-popup .leaflet-popup-tip-container {
            display: none;
        }

        .zoom-control {
            background: white;
            border: 2px solid rgba(0,0,0,0.2);
            border-radius: 4px;
            padding: 5px 10px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2px;
        }
    `;
    document.head.appendChild(style);
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
            const slider = document.querySelector('.logo-slider-wrapper');
            
            // Pause animation on hover
            slider.addEventListener('mouseenter', () => {
                slider.style.animationPlayState = 'paused';
            });
            
            slider.addEventListener('mouseleave', () => {
                slider.style.animationPlayState = 'running';
            });
            
            // Check if slider needs to reset
            slider.addEventListener('animationend', () => {
                slider.style.transform = 'translateX(0)';
            });
        });
</script>

@endsection