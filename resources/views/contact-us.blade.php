@extends('Layout.layout')
@section('content')
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1>Kontak Kami</h1>
            <p>Jangan ragu untuk menghubungi kami dan temukan solusi terbaik untuk kebutuhan pengiriman Anda</p>
        </div>
    </div>

    <!-- Map Section -->
    <div class="container my-5 pb-1" style="box-shadow: 0 2px 10px rgba(0,0,0,.25); border-radius:10px;">
        <div class="map-container">
            <div class="contact-info-box">
                <h4>CV Barfath489</h4>
                <p><i class="fas fa-map-marker-alt"></i> JL. RAYA TAJUR RT 004/002 NO. 37<br>BOGOR TIMUR, KOTA BOGOR</p>
                <p><i class="fas fa-phone"></i> 0856 7467 772 ( M. YOSEF )</p>
                <p><i class="fas fa-phone"></i> 0813 9881 4413 ( SEVIRA M. )</p>
                <p><i class="fas fa-envelope"></i> CV.BARFATH489@GMAIL.COM</p>
            </div>
            
            <div id="map"></div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form px-5">
            <h2>Hubungi Kami</h2>
            <form action="/send-email" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" 
                               name="sender_name" 
                               class="form-control @error('sender_name') is-invalid @enderror" 
                               placeholder="Masukan Nama Anda"
                               value="{{ old('sender_name') }}"
                               id="sender_nameInput"
                               required>
                        @error('sender_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" 
                               name="sender_email" 
                               class="form-control @error('sender_email') is-invalid @enderror" 
                               placeholder="Masukan Email Anda"
                               value="{{ old('sender_email') }}"
                               required>
                        @error('sender_email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input type="text" 
                               name="sender_company" 
                               class="form-control @error('sender_company') is-invalid @enderror" 
                               placeholder="Masukan Nama Perusahaan Anda"
                               value="{{ old('sender_company') }}"
                               id="sender_companyInput"
                               required>
                        @error('sender_company')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <select name="sender_subject" 
                                class="form-control @error('sender_subject') is-invalid @enderror"
                                required>
                            <option value="">Pilih Kategori</option>
                            <option value="Informasi Umum Perusahaan" {{ old('sender_subject') == 'Informasi Umum Perusahaan' ? 'selected' : '' }}>
                                Informasi Umum Perusahaan
                            </option>
                            <option value="Permintaan Kerja sama" {{ old('sender_subject') == 'Permintaan Kerja sama' ? 'selected' : '' }}>
                                Permintaan Kerja sama
                            </option>
                        </select>
                        @error('sender_subject')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="sender_body" 
                              class="form-control @error('sender_body') is-invalid @enderror" 
                              rows="5" 
                              placeholder="Masukan Pesan Anda"
                              id="sender_bodyInput"
                              required>{{ old('sender_body') }}</textarea>
                    @error('sender_body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-danger px-5">MENGIRIM PESAN</button>
                </div>
            </form>
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
        const senderNameInput = document.getElementById('sender_nameInput');
        const senderCompanyInput = document.getElementById('sender_companyInput');
        const senderBodyInput = document.getElementById('sender_bodyInput');

        // Function to update senderBodyInput with the latest values from both inputs
        function updateSenderBody() {
            senderBodyInput.textContent = `${senderNameInput.value}, \n${senderCompanyInput.value}`;
        }

        // Attach the input event listeners to call updateSenderBody on each input change
        senderNameInput.addEventListener('input', updateSenderBody);
        senderCompanyInput.addEventListener('input', updateSenderBody);
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
@endsection