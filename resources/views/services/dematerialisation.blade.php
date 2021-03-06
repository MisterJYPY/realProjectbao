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
							<li><a href="{{route('home')}}">Bao-Technoligies</a></li>
							<li><a href="{{route('allServices')}}">Services</a></li>
							<li><a href="{{route('dematerialisation')}}">Dematerialisation</a></li>
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
								<li><a  href="{{route('allServices')}}">Nos Services</a></li>
								<li><a href="{{route('serigraphie')}}">Serigraphie</a></li>
								<li><a href="{{route('imprimerie')}}">Imprimerie</a></li>
								<li><a href="{{route('bonneterie')}}">Bonneterie & Maroquinerie</a></li>
								<li><a href="{{route('evenementiel')}}">Evenementiel</a></li>
								<li><a class="active" href="{{route('dematerialisation')}}">Dematerialisation</a></li>
							<!--	<li><a href="{{route('projet')}}">Projet</a></li> -->
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
										<img src="upload/others/el1.jpg" alt="">
										<img src="upload/others/el3.jpg" alt="">
										<img src="upload/others/el4.jpg" alt="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="services-post">
										<img src="upload/others/el2.jpg" alt="">
										<h2>Electricy work</h2>
										<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident.</p><br>
										<h2>Maintanance</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
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