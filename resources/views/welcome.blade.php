@extends('layouts.app')

@section('stylesheets')
    @parent
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}" type="text/css">
@endsection

@section('content')
<div id="mainFrame">
    <div id="latestNewsSection">
        <h3>Citoyen Connect, une plateforme au service :</h3>
        <div id="newsSection">
            <div class="card">
                <div class="card-header" style="background-image: url('/imgs/actu.jpg'); background-size: cover; background-position: center;"></div>
                <div class="newsCardBody card-body">
                    <h2>Des associations</h2>
                    <p>
                    C'est parce que les associations :
                    <ul style="text-align: left;">
                        <li> Valorisent la cohésion sociale et le "vivre ensemble"</li>
                        <li> Oeuvrent à l'épanouissement individuelle des administrés</li>
                        <li> Contribuent à l'éducation en agissant dans le domaine sportif culturel et autre</li>
                        <li> Favorisent l'animation, l'attractivité et le rayonnement de leur ville</li>
                        <li> Participent au développement économique de leur territoire</li>
                    </ul>
                    Phrase 
                    </p>
                </div>
                <div class="card-footer">
                    <p>Le 23/07/2020</p>
                    <a href="http://www.google.com">Voir plus</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background-image: url('/imgs/mairies.png'); background-size: contain; background-repeat: no-repeat; background-position: center;"></div>
                <div class="newsCardBody card-body">
                    <h2>Des mairies</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue mattis tellus, dapibus lobortis libero efficitur at. Phasellus sed nibh massa. Mauris vitae tempor dui. Suspendisse vehicula mi consectetur sem tincidunt, ac pellentesque tellus scelerisque. Nunc erat ligula, malesuada at aliquam vitae, pretium ornare nulla. Sed eu sapien id nunc commodo ornare. Praesent blandit luctus nisl sit amet sollicitudin. Mauris pellentesque nunc quis dolor malesuada pellentesque. </p>
                </div>
                <div class="card-footer">
                    <p>Le 23/07/2020</p>
                    <a href="http://www.google.com">Voir plus</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background-image: url('/imgs/population.jpg'); background-size: cover; background-position: center;"></div>
                <div class="newsCardBody card-body">
                    <h2>Des administrés</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue mattis tellus, dapibus lobortis libero efficitur at. Phasellus sed nibh massa. Mauris vitae tempor dui. Suspendisse vehicula mi consectetur sem tincidunt, ac pellentesque tellus scelerisque. Nunc erat ligula, malesuada at aliquam vitae, pretium ornare nulla. Sed eu sapien id nunc commodo ornare. Praesent blandit luctus nisl sit amet sollicitudin. Mauris pellentesque nunc quis dolor malesuada pellentesque. </p>
                </div>
                <div class="card-footer">
                    <p>
                        <?php
                        // Affichage de quelque chose comme : Wednesday the 15th
                        setlocale(LC_ALL, 'fr_FR');
                        echo date('l \t\h\e jS');
                        ?>
                    </p>
                    <a href="http://www.google.com">Voir plus</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection