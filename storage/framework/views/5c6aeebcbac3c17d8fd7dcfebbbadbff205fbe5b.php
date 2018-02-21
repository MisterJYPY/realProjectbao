<?php $__env->startSection('content'); ?>
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
							<li><a href="<?php echo e(route('home')); ?>">Bao-Technoligies</a></li>
							<li><a href="<?php echo e(route('allServices')); ?>">Services</a></li>
							<li><a href="<?php echo e(route('evenementiel')); ?>">Evenementiel</a></li>
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
								<li><a href="<?php echo e(route('allServices')); ?>">Nos Services</a></li>
								<li><a href="<?php echo e(route('serigraphie')); ?>">Serigraphie</a></li>
								<li><a href="<?php echo e(route('imprimerie')); ?>">Imprimerie</a></li>
								<li><a href="<?php echo e(route('bonneterie')); ?>">Bonneterie</a></li>
								<li><a class="active" href="<?php echo e(route('evenementiel')); ?>">Evenementiel</a></li>
								<!--<li><a href="#">Dematerialisation</a></li> -->
								<li><a href="<?php echo e(route('maroquinerie')); ?>">Maroquinerie</a></li>
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
										<img class="img-thumbnail" src="upload/others/bao_event2.jpg" alt="">
										<h2>Plateforme de qualité</h2>
										<p>La pluridimensionalité d’une plateforme de qualité.
											La communication événementielle est un outil de communication hors-média,
											interne ou externe, utilisé par une entreprise ou une institution ou tout autre organisme
											(association...) consistant à créer un événement, généralement sous la forme de salon,
											congrès, festival, convention, soirée festive, cocktail, remise de prix ou ...
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="services-post">
										<img class="img-thumbnail" src="upload/others/bao_event3.jpg" alt="">
										<h2>Orientation & Aides a la decision en Communication Marketing</h2>
										<p>Une source intarissable de conseil, d’orientation et de prises
											de décisions en termes de communication-marketing !
											La communication événementielle est un outil de communication hors-média,
											interne ou externe, utilisé par une entreprise ou une institution ou tout autre organisme
											(association...) consistant à créer un événement, généralement sous la forme de salon,
											congrès, festival, convention, soirée festive, cocktail, remise de prix ou ...
										</p>
									</div>
								</div>
							</div>
							<div class="services-post">
								<img class="img-rounded" src="upload/others/bao_event1.jpg" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End services-page section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>