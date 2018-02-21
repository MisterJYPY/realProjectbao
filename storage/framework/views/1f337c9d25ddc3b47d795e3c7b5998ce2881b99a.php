;
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
							<li><a href="<?php echo e(route('home')); ?>"><b>Bao-Technoligies</b></a></li>
							<li><a href="<?php echo e(route('allServices')); ?>"><b>Services</b></a></li>
							<li><a href="<?php echo e(route('serigraphie')); ?>"><b>Serigraphie</b></a></li>
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
                                <li><a class="active" href="<?php echo e(route('serigraphie')); ?>">Serigraphie</a></li>
                                <li><a href="<?php echo e(route('imprimerie')); ?>">Imprimerie</a></li>
								<li><a href="<?php echo e(route('bonneterie')); ?>">Bonneterie & Maroquinerie</a></li>
                                <li><a href="<?php echo e(route('evenementiel')); ?>">Evenementiel</a></li>
                                <li><a href="#">Dematerialisation</a></li>
								<li><a href="#">Projet</a></li>
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
								<img src="upload/others/bao_pg_serig1.jpg" alt="">
								<h2 style="color: #00008B">NOUS INVENTONS LE VISUEL POUR LES ENTREPRISES</h2>
								<p>
									De la réflexion stratégique à la mise en place opérationnelle, l’agence a comme leitmotiv le service, la creativité
									et la satisfaction finale. L'Agence en tant que maitre d'oeuvre assure la production et la logistique tant au
									au niveau humain que technique.
								</p>
								<div class="row">
									<div class="col-md-3 ">
										<ul style="color: #00008B" class="offer-list second">
											<li><i class="fa fa-flag"></i> Matieres Textiles</li>
											<li><i class="fa fa-flag"></i> Cuir </li>
											<li><i class="fa fa-flag"></i> Plastiques</li>
										</ul>
									</div>
									<div class="col-md-3">
										<ul style="color: #DB1702" class="offer-list second">
											<li><i class="fa fa-flag"></i> Verre</li>
											<li><i class="fa fa-flag"></i> Porcelaine </li>
											<li><i class="fa fa-flag"></i> Catalogue</li>
										</ul>
									</div>
									<div class="col-md-3">
										<ul style="color: #00008B" class="offer-list second">
											<li><i class="fa fa-flag"></i> Metal</li>
											<li><i class="fa fa-flag"></i> Enseigne </li>
											<li><i class="fa fa-flag"></i> Vehicule</li>
										</ul>
									</div>
									<div class="col-md-3">
										<ul style="color: #DB1702" class="offer-list second">
											<li><i class="fa fa-flag"></i> Flyers</li>
											<li><i class="fa fa-flag"></i> Bache Murale </li>
											<li><i class="fa fa-flag"></i> Edition</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="services-wrapp">
							<div class="row">
								<div class="col-md-4">
									<div class="services-post">
										<img class="img-rounded" src="upload/others/bao_pg_serig2.jpg" alt="">
										<h2 style="color: #F7230C">Creativité</h2>
										<p>Imaginez une salle somptueuse, une organisation efficace et discrète, des équipes
											au service de votre créativité, une gastronomie soignée… N’imaginez plus, c’est
											votre événement sur-mesure avec la boite à outils : créateurs d’émotions et de
											relations fortes.</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="services-post">
										<img  class="img-rounded" src="upload/others/bao_pg_serig3.jpg" alt="">
										<h2 style="color: #F7230C">Exeperience</h2>
										<p>L’agence, forte de son expérience dans l’organisation (+ de 50 événements à son
											actif) est le partenaire conseil indispensable à toutes vos manifestations
											professionnelles ou privées.</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="services-post">
										<img  class="img-rounded" src="upload/others/bao_pg_serig4.jpg" alt="">
										<h2 style="color: #F7230C">Qualité &amp; Coût</h2>
										<p>En adéquation avec votre budget,
											le terme « clé en main » signifie
											le choix d’un lieu,
											d’une thématique, et d’une
											solution traiteur appropriés.</p>
									</div>
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