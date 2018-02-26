@extends('index')
@section('content')
    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><b>GALERIE</b></h2>
                </div>
                <div class="col-md-6">
                    <ul class="page-depth">
                        <li><a href="{{route('home')}}"><b>Bao-Technoligies</b></a></li>
                        <li><a href="{{route('galerie')}}"><b>Galerie</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End page-banner section -->

    <!-- projects-page section
        ================================================== -->
    <section class="projects-page-section">
        <div class="container">
            <ul class="filter">
                <li><a class="active" href="#" data-filter="*">NOS REALISATIONS</a></li>
                <li><a href="#" data-filter=".buildings">Buildings</a></li>
                <li><a href="#" data-filter=".interior">Interior</a></li>
                <li><a href="#" data-filter=".energy">Energy</a></li>
                <li><a href="#" data-filter=".isolation">Isolation</a></li>
            </ul>
            <div class="project-box iso-call">
                <div class="project-post buildings isolation">
                    <img src="upload/projects/1.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Elegant Building</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post interior">
                    <img src="upload/projects/2.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Beatiful House</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post buildings isolation">
                    <img src="upload/projects/3.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Classic House</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post buildings">
                    <img src="upload/projects/4.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Modern and trending house</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post interior isolation">
                    <img src="upload/projects/5.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Afarist Building</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post energy">
                    <img src="upload/projects/6.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">traditional Building</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post buildings">
                    <img src="upload/projects/7.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Small house</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post isolation">
                    <img src="upload/projects/8.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Large town Buildings</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post energy">
                    <img src="upload/projects/9.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Great Projects and architecture</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post buildings">
                    <img src="upload/projects/10.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Familiar Building</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post buildings isolation">
                    <img src="upload/projects/1.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Elegant Building</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
                <div class="project-post interior">
                    <img src="upload/projects/2.jpg" alt="">
                    <div class="hover-box">
                        <h2><a href="single-project.html">Beatiful House</a></h2>
                        <span>bulding, house</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End projects-page section -->
@endsection