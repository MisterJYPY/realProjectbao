<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>bao-technologies.com</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">	
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
    <!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="css/settings.css" media="screen"/>
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/style_bao.css" media="screen">
	<link rel="stylesheet" href="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.css" />
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.migrate.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
  	<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="js/plugins-scroll.js"></script>

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<!-- Import Leaflet JS Library -->
	<script src="https://npmcdn.com/leaflet@1.0.0-rc.2/dist/leaflet.js"></script>

</head>
<body>

	<!-- Container -->
	<div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div style="background-color: #00008B" class="top-line">
					<div class="container">
						<div  class="row">
							<div class="col-md-6">
								<p>
									<span style="color:white"><i class="fa fa-phone"></i>00225 - 224 468 87 </span>
									<span style="color:white"><i class="fa fa-envelope-o"></i><b>contact@bao-technologie.com</b></span>
								</p>
							</div>	
							<div class="col-md-6">
								<ul class="social-icons">
									<li><a class="facebook" target="_blank"  href="#" ><i class="fa fa-facebook"></i></a></li>
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="rss" href="#"><i class="fa fa-rss"></i></a></li>
									<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>	
						</div>
					</div>
				</div>
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><img src="images/bao_logo.png" alt="Bao"></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li class="drop"><a class="active" href="{{route('home')}}">Acceuil</a></li>
							<!-- <li class="drop"><a href="{{route('projet')}}">Nos Projets</a></li> -->
							<li><a href="{{route('apropos')}}">Qui sommes-nous?</a></li>
							<li class="drop"><a href="{{route('allServices')}}">Nos Services</a>
								<ul class="dropdown">
									<li><a href="{{route('serigraphie')}}">Serigraphie</a></li>
									<li><a href="{{route('imprimerie')}}">Imprimerie</a></li>
									<li><a href="{{route('bonerie')}}">Bonerie</a></li>
									<li><a href="{{route('evenementiel')}}">Evenementiel</a></li>
									<li><a href="{{route('dematerialisation')}}">Dematerialisation</a></li>
									<li><a href="{{route('projet')}}">Projecting</a></li>
								</ul>
							</li>
							<!-- <li class="drop"><a href="{{route('bao_blog')}}">Blog</a> -->

							</li>
							<li><a href="{{route('bao_contact')}}">Contact</a></li>
							<li class="search drop"><a href="#" class="open-search"><i class="fa fa-search"></i></a>
								<form class="form-search">
									<input type="search" placeholder="Search:"/>
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
				s				</form>
							</li>

						@if(session('connect')=='connect')
							<li class="drop"><a href="{{route('deconnect')}}">Log out</a>
							</li>

							@else
								<li class="drop"><a href="{{route('dashbao')}}">Log In</a>
								</li>
							@endif
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
		</header>
		<!-- End Header -->
		@yield('content');
		<footer>
			<div class="up-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="footer-widget">
								<h2>A propos de nous</h2>
								<p>La boite à outils est toujours resté indépendante, proche de ces racines, fidele à ses valeurs.
								Toujours la recherche de nouveautés, d'idées et d'ouverture pour ces clients. Ainsi nous travaillons toujours à accrocher notre cible, la séduire, la convaincre,la rassurée.</p>
								<img src="images/bao_logo.png" alt="bao logo">
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-widget">
								<h2>Spécialisation</h2>
								<ul class="tag-list">
									<li><a href="{{route('serigraphie')}}">Serigraphie</a></li>
									<li><a href="{{route('imprimerie')}}">Imprimerie</a></li>
									<li><a href="{{route('bonerie')}}">Bonerie</a></li>
									<li><a href="{{route('evenementiel')}}">Evenementiel</a></li>
									<li><a href="{{route('dematerialisation')}}">Dematérialisation</a></li>

								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-widget">
								<h2>quelques widgets</h2>
								<ul class="flickr">
									@foreach($allBottomImages as $img)
									<li><a href="#"><img src="{{$img->url}}" alt=""></a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="footer-widget info-widget">
								<h2>Info</h2>
								<p class="first-par">Vous pouvez nous contacter à tout instant</p>
								<p><span>Tel: </span> 00225 - 224 468 87</p>
								<p><span>Email: </span> info@bao-technologie.com</p>
								<p><span>Nos heures de Travail: </span> 8:00 h - 17:00 h</p>
							</div>
						</div>
					</div>
				</div>
			</div>
				<p style="background-color:#00008B" class="copyright">
					&copy; Copyright 2018. @BaoTeam All rights reserved.
				</p>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<!-- Revolution slider -->
	<script type="text/javascript">

		jQuery(document).ready(function() {
						
			jQuery('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:10000,
				startwidth:1140,
				startheight:700,
				hideThumbs:200,
				
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				
				navigationType:"bullet",
				navigationArrows:"none",
				
				touchenabled:"on",
				onHoverStop:"off",
				
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
										
										parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
										
				keyboardNavigation:"off",
				
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:40,
						
				shadow:0,

				spinner:"spinner4",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",
				
				autoHeight:"off",						
				forceFullWidth:"off",						
										
										
										
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,						
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffsetContainer: ".header"	
			});
							
		});	//ready
		
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.min.js"></script>
</body>
</html>