@extends('index')
@section('content')
<!-- page-banner-section
    ================================================== -->
<section class="page-banner-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Services</h2>
            </div>
            <div class="col-md-6">
                <ul class="page-depth">
                    <li><a href="{{route('home')}}"><b>Bao-Technologies</b></a></li>
                    <li><a href="{{route('allServices')}}"><b>Services</b></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End page-banner section -->

<!-- services-page section
    ================================================== -->
<section class="services-page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="side-navigation">
                    <ul class="side-navigation-list">
                        <li><a class="active" href="{{route('allServices')}}">Nos Services</a></li>
                        <li><a href="{{route('serigraphie')}}">Serigraphie</a></li>
                        <li><a href="{{route('imprimerie')}}">Imprimerie</a></li>
                        <li><a href="{{route('bonneterie')}}">Bonneterie & Maroquinerie</a></li>
                        <li><a href="{{route('evenementiel')}}">Evenementiel</a></li>
                        <!--<li><a href="#">Projet</a></li> -->
                    </ul>
                    <div class="contact-info">
                        <h2>Contact Info</h2>
                        <ul class="information-list">
                            <li><i class="fa fa-map-marker"></i><span>Abidjan Codody cité des Arts, Cote d'Ivoire</span></li>
                            <li><i class="fa fa-phone"></i><span>+225 - 224 468 87</span><span>+225 - 079 312 93</span><span>Fax : +225 - 224 452 67</span></li>
                            <li><i class="fa fa-envelope-o"></i><a href="#">contact@bao-technologie.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="services-wrapp">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('serigraphie')}}"><img src="upload/others/bao_serigraphie.jpg" alt=""></a>
                                <h2 style="color: #00008B">SERIGRAPHIE</h2>
                                <p>Avec plus de 13 ans d'experience, La Boite A Outils a une developper une solide experience dans
                                la sserigraphie avec des outils a la pointe de la technologie...</p>
                                <a href="{{route('serigraphie')}}">Lire Plus</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('imprimerie')}}"><img src="upload/others/bao_imprim.jpg" alt=""></a>
                                <h2 style="color: #00008B">IMPRIMERIE</h2>
                                <p>L'impression constitue la base de l'expertise de la Boite A Outils technologie,
                                Nous mettons cette experience a votre dispositionb pour donner une image de marque a votre entreprise !
                                </p>
                                <a href="{{route('imprimerie')}}">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('bonneterie')}}"><img src="upload/others/bao_bone2.jpg" alt=""></a>
                                <h2 style="color: #00008B">BONNETERIE</h2>
                                <p>Vous avez dit : Tee-shirt, Polos, pour ameliorer votres communication : L'Atelier de Bonneterie de La Boite
                                    A Outils a votre disposition pour vous accompagner !
                                    consequat.</p>
                                <a href="{{route('bonneterie')}}">Lire Plus</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('evenementiel')}}"><img src="upload/others/bao_maro1.jpg" alt=""></a>
                                <h2 style="color: #00008B">MAROQUINERIE</h2>
                                <p>Doté d’un atelier de marquage et d’un studio graphique, une équipe d’hommes et
                                    de femmes passionnés vous propose la solution adaptée à votre image et
                                    à votre métier...</p>
                                <a href="{{route('bonneterie')}}">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('evenementiel')}}"><img src="upload/others/bao_event.jpg" alt=""></a>
                                <h2 style="color: #00008B">EVENEMENTIELLE</h2>
                                <p>Doté d’un atelier de marquage et d’un studio graphique, une équipe d’hommes et
                                    de femmes passionnés vous propose la solution adaptée à votre image et
                                    à votre métier...</p>
                                <a href="{{route('evenementiel')}}">Lire Plus</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('dematerialisation')}}"><img src="upload/others/bao_demat.jpg" alt=""></a>
                                <h2 style="color: #00008B">DEMATERIALISATION</h2>
                                <p>La BOITE A OUTILS met à votre un logiciel GED (Gestion Electronique de Documents), pour faciliter la gestion de vos
                                documents et informations importantes en entreprise. Nous Analysoons votre systeme d'information et concevons un logiciel
                                sur mesure pour vous</p>
                                <a href="{{route('dematerialisation')}}">Lire Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End services-page section -->
@endsection