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
							<li><a href="{{route('home')}}"><b>Bao-Technoligies</b></a></li>
							<li><a href="{{route('allServices')}}"><b>Services</b></a></li>
							<li><a href="{{route('imprimerie')}}"><b>Imprimerie</b></a></li>
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
								<li><a class="active" href="{{route('imprimerie')}}">Imprimerie</a></li>
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
							<div class="services-post">
								<div class="row">
									<div class="col-md-4">
										<img class="img-fluid" src="upload/others/bao_pg_imprim2.jpg" alt="">
									</div>
									<div class="col-md-4">
										<img class="img-fluid" src="upload/others/bao_pg_imprim4.png" alt="">
									</div>
									<div class="col-md-4">
										<img class="img-fluid" src="upload/others/bao_pg_imprim5.jpg" alt="">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<img  class="img-rounded" src="upload/others/bao_pg_imprim1.jpg" alt="">
									</div>
									<div class="col-md-6">
										<img  class="img-rounded" src="upload/others/bao_pg_imprim3.jpg" alt="">
									</div>
								</div>
								
								<h2>Nous vous proposons des solutions d'impression sur tout support</h2>
								<p>Avec des logiciels et equipements de derniere generation nous vous proposons des graphique
								de haute qualité</p>
								<p>
									Notre équipe d'Infographe propose des organisations clés en main, mais également de
									mettre à votre disposition une ou plusieurs de ses compétences de façon
									indépendante.
									Organisation d’événements « clé en main » Vous souhaitez rassembler pour motiver, remercier, fédérer, convaincre,
									transmettre, vivre l’entreprise et ses enjeux.
									Conception de votre événement
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End services-page section -->
@endsection
