<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barfath489 - Logistics Solutions</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="{{Request::is('/') ? asset('assets/css/style.css') : (Request::is('about-us') ? asset('assets/css/style-about.css') : asset('assets/css/style-contact.css'))}}">

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    @include('Components.navbar.navbar')
    @yield('content')
    @include('Components.footer.footer')
</body>
</html>