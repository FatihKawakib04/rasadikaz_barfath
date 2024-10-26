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
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script>
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
    const locations = [
        { name: 'Cipanas', coords: [-6.7358, 106.9867], vehicles: 5 },
        { name: 'Sukabumi', coords: [-6.9277, 106.9300], vehicles: 3 },
        { name: 'Tangerang', coords: [-6.1781, 106.6300], vehicles: 4 }
    ];

    // Custom marker using the uploaded image
    const customIcon = L.icon({
        iconUrl: 'assets/img/marker-map.svg',
        iconSize: [25, 25],
        iconAnchor: [12, 12],
        popupAnchor: [0, -10]
    });

    // Function to add markers with popups
    function createCustomMarker(location) {
        const marker = L.marker(location.coords, { icon: customIcon }).addTo(map);
        
        const popupContent = `
            <div class="marker-popup">
                <div class="popup-container">
                    <div class="truck-circle">
                        <svg viewBox="0 0 24 24" width="14" height="14">
                            <path fill="#FF0000" d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
                        </svg>
                    </div>
                    <div class="popup-content">
                        <span class="location-name">${location.name}</span>
                        <span class="vehicle-count">${location.vehicles} Mobil</span>
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
    locations.forEach(location => {
        createCustomMarker(location);
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
    // Initialize the map and set its view to Bogor coordinates and zoom level
    const bogorCoords = [-6.5971469, 106.8060388];

    const map = L.map('map').setView(bogorCoords, 15);

    // Load and display the OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Add a marker to the map for the CV Barfath489 location
    L.marker(bogorCoords).addTo(map)
        .bindPopup('<b>CV Barfath489</b><br>Jl. Raya Tajur, Bogor.')
        .openPopup();

    // Zoom-in and zoom-out functions
    function zoomIn() {
        map.zoomIn();
    }

    function zoomOut() {
        map.zoomOut();
    }
</script>
