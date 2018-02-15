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
                    <li><a href="{{route('home')}}">Bao-Technologies</a></li>
                    <li><a href="{{route('allServices')}}">Services</a></li>
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
                        <li><a href="{{route('bonerie')}}">Bonerie</a></li>
                        <li><a href="{{route('evenementiel')}}">Evenementiel</a></li>
                        <li><a href="{{route('dematerialisation')}}">Dematerialisation</a></li>
                        <li><a href="{{route('projet')}}">Projet</a></li>
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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <a href="{{route('serigraphie')}}">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('imprimerie')}}"><img src="upload/others/bao_imprim.jpg" alt=""></a>
                                <h2 style="color: #00008B">IMPRIMERIE</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <a href="{{route('imprimerie')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('bonerie')}}"><img src="upload/others/services.png" alt=""></a>
                                <h2 style="color: #00008B">BONETERIE</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <a href="{{route('bonerie')}}">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('evenementiel')}}"><img src="upload/others/bao_event.jpg" alt=""></a>
                                <h2 style="color: #00008B">EVENEMENTIELLE</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <a href="{{route('evenementiel')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('dematerialisation')}}"><img src="upload/others/bao_demat.jpg" alt=""></a>
                                <h2 style="color: #00008B">DEMATERIALISATION</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <a href="{{route('dematerialisation')}}">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="services-post">
                                <a href="{{route('projet')}}"><img src="upload/others/bao_projet.jpg" alt=""></a>
                                <h2 style="color: #00008B">PROJET</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                <a href="{{route('projet')}}">Read More</a>
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