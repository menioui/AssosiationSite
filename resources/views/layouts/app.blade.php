<?php

date_default_timezone_set('Europe/Paris');
$date = date('d-m-Y', time());

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @section('scripts')
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/e8767330e3.js" crossorigin="anonymous"></script>
    @show
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    @section('stylesheets')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    @show

</head>
<body>
    <div id="app">
        <div id="bannerContact" class="d-flex justify-content-between align-items-baseline">
            <div id="contactFirstDiv" class="d-flex justify-content-around align-items-baseline">
                <p>Nous contacter :</p>
                <h4><a href="https://www.google.fr/maps/place/Monument+aux+Girondins/@44.8447908,-0.5754322,18.25z/data=!4m5!3m4!1s0xd5527d999ea4b85:0xcbd3e0b19c07bc8!8m2!3d44.8453856!4d-0.5748738" target="_blank"><i class="fas fa-map-marker-alt"></i> <span id="position">Nous trouver</span></a></h4>
                <h4><a href="mailto:vtheo.ludon@gmail.com"><i class="fas fa-paper-plane"></i> <span id="mailAd">example@example.fr</span></a></h4>
                <h4 id="numTel"><i class="icon-fixed-width fas fa-phone"></i> 00.00.00.00.00</h4>
                <h4 id="numTel2" class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-fixed-width fas fa-phone"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        00.00.00.00.00
                    </div>
                </h4>
            </div>
            <div id="contactSecondDiv" class="d-flex justify-content-around align-items-baseline">
                <p>Nous suivre :</p>
                <h4><a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a></h4>
                <h4><a href="https://twitter.com/home?lang=fr" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a></h4>
                <h4><a href="https://www.linkedin.com/feed/" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a></h4>
                <h4><a href="https://www.instagram.com/?hl=fr" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></h4>
            </div>
        </div>

        <!-- HEADER PART -->
        <nav id="mainNav" class="navbar navbar-expand-lg navbar-light bg-light">
            <a id="logoTitle" class="navbar-brand" href="{{ route('welcome') }}">
                <img id="logoImg" src="{{ asset('/imgs/logo.png') }}" alt="Logo AssoPourTous">
                <div>
                    <h1>AssoPourTous</h1>
                    <small>Le site de l'association</small>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li style="width: 120px;" class="navItems <?php if (Route::current()->getName() == "welcome"): echo 'active'; endif?>">
                        <a id="navLink1" class="navLink" href="{{ route('welcome') }}">
                            <span style="position: absolute;">Accueil</span>
                            <svg style="fill: red;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="54.4px" height="6.4px" viewBox="0 0 217.6 25.6" style="enable-background:new 0 0 217.6 25.6;" xml:space="preserve" preserveAspectRatio="none"> <defs></defs><path d="M191.7,8.7c-8.8,2.2-17.8,3.9-27,5.1c-9.1,1.2-18.4,2-27.7,2.2c-9.3,0.2-18.6,0-27.7-0.9 c-2.3-0.2-4.6-0.4-6.9-0.7l-6.9-0.9l-13.8-1.8c-9.2-1.2-18.4-2.4-27.7-3.3c-9.3-0.8-18.7-1.4-28.1-0.9C21.3,7.8,16.5,8.3,12,9.5 c-2.3,0.6-4.4,1.4-6.5,2.3c-2,0.9-3.9,2.1-5.6,3.4l0.9,0.7c8.1-3.6,16.9-3.7,25.5-3.2c8.7,0.6,17.5,1.9,26.3,3.4l26.8,4.6 c4.5,0.8,9.1,1.5,13.7,2.2c2.3,0.4,4.6,0.7,7,1l1.8,0.2l1.9,0.2l3.7,0.4c2.5,0.3,5,0.4,7.5,0.5c1.2,0.1,2.5,0.1,3.7,0.2l3.7,0.1 c2.5,0,5,0.1,7.5,0l3.7-0.1l1.9-0.1l1.8-0.1c9.8-0.6,19.6-1.8,29-3.8c9.4-1.9,18.7-4.5,27.4-7.8l3.3-1.3c1.1-0.5,2.1-0.9,3.2-1.4 c1-0.5,2.1-0.9,3.1-1.4c1-0.5,2-1.1,3-1.6c2-1,3.9-2.2,5.8-3.4c0.5-0.3,0.9-0.6,1.4-0.9l1.3-1c0.9-0.6,1.7-1.3,2.5-2L216.9,0 C209.1,3.8,200.5,6.5,191.7,8.7z"></path></svg>
                        </a>
                    </li>
                    <li style="width: 160px;" class="navItems <?php if (Route::current()->getName() == "events"): echo 'active'; endif?>">
                        <a id="navLink2" class="navLink" href="{{ route('events', $date) }}">
                            <span style="position: absolute;">Actualités</span>
                            <svg style="fill: blue;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="54.4px" height="6.4px" viewBox="0 0 217.6 25.6" style="enable-background:new 0 0 217.6 25.6;" xml:space="preserve" preserveAspectRatio="none"> <defs></defs><path d="M191.7,8.7c-8.8,2.2-17.8,3.9-27,5.1c-9.1,1.2-18.4,2-27.7,2.2c-9.3,0.2-18.6,0-27.7-0.9 c-2.3-0.2-4.6-0.4-6.9-0.7l-6.9-0.9l-13.8-1.8c-9.2-1.2-18.4-2.4-27.7-3.3c-9.3-0.8-18.7-1.4-28.1-0.9C21.3,7.8,16.5,8.3,12,9.5 c-2.3,0.6-4.4,1.4-6.5,2.3c-2,0.9-3.9,2.1-5.6,3.4l0.9,0.7c8.1-3.6,16.9-3.7,25.5-3.2c8.7,0.6,17.5,1.9,26.3,3.4l26.8,4.6 c4.5,0.8,9.1,1.5,13.7,2.2c2.3,0.4,4.6,0.7,7,1l1.8,0.2l1.9,0.2l3.7,0.4c2.5,0.3,5,0.4,7.5,0.5c1.2,0.1,2.5,0.1,3.7,0.2l3.7,0.1 c2.5,0,5,0.1,7.5,0l3.7-0.1l1.9-0.1l1.8-0.1c9.8-0.6,19.6-1.8,29-3.8c9.4-1.9,18.7-4.5,27.4-7.8l3.3-1.3c1.1-0.5,2.1-0.9,3.2-1.4 c1-0.5,2.1-0.9,3.1-1.4c1-0.5,2-1.1,3-1.6c2-1,3.9-2.2,5.8-3.4c0.5-0.3,0.9-0.6,1.4-0.9l1.3-1c0.9-0.6,1.7-1.3,2.5-2L216.9,0 C209.1,3.8,200.5,6.5,191.7,8.7z"></path></svg>
                        </a>
                    </li>
                    <li style="width: 290px;" class="navItems <?php if (Route::current()->getName() == "about"): echo 'active'; endif?>">
                        <a id="navLink3" class="navLink" href="{{ route('about') }}">
                            <span style="position: absolute;">Qui sommes nous</span>
                            <svg style="fill: green;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="54.4px" height="6.4px" viewBox="0 0 217.6 25.6" style="enable-background:new 0 0 217.6 25.6;" xml:space="preserve" preserveAspectRatio="none"> <defs></defs><path d="M191.7,8.7c-8.8,2.2-17.8,3.9-27,5.1c-9.1,1.2-18.4,2-27.7,2.2c-9.3,0.2-18.6,0-27.7-0.9 c-2.3-0.2-4.6-0.4-6.9-0.7l-6.9-0.9l-13.8-1.8c-9.2-1.2-18.4-2.4-27.7-3.3c-9.3-0.8-18.7-1.4-28.1-0.9C21.3,7.8,16.5,8.3,12,9.5 c-2.3,0.6-4.4,1.4-6.5,2.3c-2,0.9-3.9,2.1-5.6,3.4l0.9,0.7c8.1-3.6,16.9-3.7,25.5-3.2c8.7,0.6,17.5,1.9,26.3,3.4l26.8,4.6 c4.5,0.8,9.1,1.5,13.7,2.2c2.3,0.4,4.6,0.7,7,1l1.8,0.2l1.9,0.2l3.7,0.4c2.5,0.3,5,0.4,7.5,0.5c1.2,0.1,2.5,0.1,3.7,0.2l3.7,0.1 c2.5,0,5,0.1,7.5,0l3.7-0.1l1.9-0.1l1.8-0.1c9.8-0.6,19.6-1.8,29-3.8c9.4-1.9,18.7-4.5,27.4-7.8l3.3-1.3c1.1-0.5,2.1-0.9,3.2-1.4 c1-0.5,2.1-0.9,3.1-1.4c1-0.5,2-1.1,3-1.6c2-1,3.9-2.2,5.8-3.4c0.5-0.3,0.9-0.6,1.4-0.9l1.3-1c0.9-0.6,1.7-1.3,2.5-2L216.9,0 C209.1,3.8,200.5,6.5,191.7,8.7z"></path></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- MAIN CONTENT -->
        <main id="mainMain" class="py-0">
            @yield('content')
        </main>

        <!-- FOOTER PART -->
        <footer>
            <h2 id="copyRight"><small>©</small>Tous droits réservés</h2>
        </footer>
    </div>
</body>
@yield('lateScripts')
</html>
