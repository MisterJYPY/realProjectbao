
<?php $__env->startSection('content'); ?>
	<?php if(Session::has('ErrorInsertMessage')): ?>

		<div class="alert alert-warning">

			<?php echo e(Session::get('ErrorInsertMessage')); ?><strong> <i class="glyphicon glyphicon-thumbs-down"></i> </strong>

		</div>
	<?php endif; ?>
	<section class="page-banner-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Contact</h2>
				</div>
				<div class="col-md-6">
					<ul class="page-depth">
						<li><a href="<?php echo e(route('home')); ?> " >Bao-Technoligies</a></li>
						<li><a href="<?php echo e(route('apropos')); ?>" style="color:maroon;font-size: 15px;font-weight: bold">Qui sommes nous ?</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
		<section class="contact-section">
			<div class="container">
				<div class="col-md-5">
					<div class="contact-info">
						<h2 style="color:#533f03">Nos Contacts</h2>
						<p>Vous pouvez nous joindre tous les jours entre  8:00h - 17:00h GMT </p>
						<ul class="information-list">
							<li><i class="fa fa-map-marker"></i><span>Abidjan Codody cité des Arts, Cote d'Ivoire</span></li>
							<li><i class="fa fa-phone"></i><span>+225 - 224 468 87</span><span>+225 - 079 312 93</span><span>Fax : +225 - 224 452 67</span></li>
							<li><i class="fa fa-envelope-o"></i><a href="#" style="color:blue">contact@bao-technologie.com</a></li>
						</ul>						
					</div>
				</div>
				<div class="col-md-7">
					<form id="contact-form" method="post" class="form" action="<?php echo e(route('UserMessage')); ?>">
						<?php echo e(csrf_field()); ?>

						<h2 style="color:#533f03">Envoyez Nous Un message</h2>
						<div class="form-group ">
							<label>Votre Nom : </label>
							<input name="nom" id="name" type="text" placeholder="Name" required>
						</div>
						<div class="form-group">
							<label>Votre mail : </label>
							<input name="mail" id="mail" type="text" placeholder="Email" required>
						</div>

						<div class="form-group">
							<label>Votre message:</label>
							<textarea name="message" id="comment" placeholder="Message" required></textarea>
						</div>
						<input type="submit"  value="Envoi mesage">
						<div id="msg" class="message"></div>
					</form>
				</div>
			</div>
			<!-- div id="map"></div -->
		</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>