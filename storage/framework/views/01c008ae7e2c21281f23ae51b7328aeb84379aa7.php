<?php $__env->startSection('content'); ?>
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
							<li><a href="<?php echo e(route('bonneterie')); ?>">Bonneterie</a></li>
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
								<li><a class="active" href="<?php echo e(route('bonneterie')); ?>">Bonneterie & Maroquinerie</a></li>
								<li><a href="<?php echo e(route('evenementiel')); ?>">Evenementiel</a></li>
								<!--<li><a href="#">Dematerialisation</a></li> -->
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
										<img class="img-rounded" src="upload/others/bao_bone2.jpg" alt="">
										<img class="img-rounded" src="upload/others/bao_bone1.jpg" alt="">
										<h2 style="color: #00008B">Notre Atelier de BONNETERIE</h2>
										<p>Dans cet Atelier, nous creons des Tee-shirt, des Polos, des Tricots sur mesure
											et de qualité pour les entreprises</p>
										<p>En plus des entreprises classiques que vous connaisser, nous crreons aussi les tenus des Etablissement : le Primaire,
										le Secondaire et le Superieure...
										Ces elements sont brodes avec les dernieres techniques de broderie...</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="services-post">
										<img class="img-rounded" src="upload/others/bao_maro2.jpg" alt="">
										<img class="img-rounded" src="upload/others/bao_maro1.jpg" alt="">
										<h2 style="color: #F7230C">Notre Atelier de MAROQUINERIE</h2>
										<p> Cet Atelier, vous offre des sacs personnalisées et tous ce qui concerne la bagarerie.
										il est important de noté que dans nos ateliers tous ce qui sort est personnalisé...</p>
										<p>Nos les produits offerts dans cet atelier sont :
										les SACS en CUIR, le VYNIL, les TISSUS, les Sacs de Seminaire...
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End services-page section -->
		<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>