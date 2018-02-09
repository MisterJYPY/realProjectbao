@extends('index')
@section('content')
    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Qui sommes nous?</h2>
                </div>
                <div class="col-md-6">
                    <ul class="page-depth">
                        <li><a href="{{route('home')}}">Bao-Technoligies</a></li>
                        <li><a href="{{route('apropos')}}">Qui sommes nous ?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End page-banner section -->

    <!-- about section
        ================================================== -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="upload/others/4.jpg" alt="">
                    <h2>Qui sommes nous ?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-md-6">
                    <img src="upload/others/8.jpg" alt="">
                    <h2>Que faisons nous ?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
            </div>
        </div>
    </section>
    <!-- End about section -->

    <!-- team section
        ================================================== -->
    <section class="team-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="team-post">
                        <img src="upload/team/1.jpg" alt="">
                        <h2>John Smith</h2>
                        <span>Company Menager</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-post">
                        <img src="upload/team/4.jpg" alt="">
                        <h2>Besim Dauti</h2>
                        <span>Architect</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-post">
                        <img src="upload/team/3.jpg" alt="">
                        <h2>Alex Doe</h2>
                        <span>Project Menager</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-post">
                        <img src="upload/team/5.jpg" alt="">
                        <h2>John Doe</h2>
                        <span>Isolator Man</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-post">
                        <img src="upload/team/2.jpg" alt="">
                        <h2>Kenan Januzi</h2>
                        <span>Head Worker</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-post">
                        <img src="upload/team/6.jpg" alt="">
                        <h2>Hunejs Dauti</h2>
                        <span>Building Worker</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End team section -->
@endsection