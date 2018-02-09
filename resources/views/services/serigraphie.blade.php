@extends('index');
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
							<li><a href="{{route('serigraphie')}}">Serigraphie</a></li>
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
					<div class="col-md-3">
						<div class="side-navigation">
							<ul class="side-navigation-list">
								<li><a href="{{route('allServices')}}">Nos Services</a></li>
								<li><a class="active" href="{{route('serigraphie')}}">Serigraphie</a></li>
								<li><a href="{{route('imprimerie')}}">Imprimerie</a></li>
								<li><a href="{{route('bonerie')}}">Bonerie</a></li>
								<li><a href="{{route('evenementiel')}}">Evenementiel</a></li>
								<li><a href="{{route('dematerialisation')}}">Dematerialisation</a></li>
								<li><a href="{{route('projet')}}">Projet</a></li>
							</ul>
							<div class="contact-info">
								<h2>Contact Info</h2>
								<ul class="information-list">
									<li><i class="fa fa-map-marker"></i><span>907 N Randolph street, Virginia</span></li>
									<li><i class="fa fa-phone"></i><span>+1 703-697-1776</span><span>+1 605-315-8544</span></li>
									<li><i class="fa fa-envelope-o"></i><a href="#">nunforest@gmail.com</a></li>
								</ul>						
							</div>
						</div>
					</div>
					<div class="col-md-9">
						<div class="services-wrapp">
							<div class="row">
								<div class="col-md-6">
									<div class="services-post">
										<img src="upload/others/con2.jpg" alt="">
										<h2>Great Planning</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="services-post">
										<img src="upload/others/con3.jpg" alt="">
										<h2>Hard &amp; Fast Working</h2>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat.</p>
									</div>
								</div>
							</div>
							<div class="services-post">
								<img src="upload/others/con1.jpg" alt="">
								<h2>Satisfied and Precise work</h2>
								<p>Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End services-page section -->
@endsection