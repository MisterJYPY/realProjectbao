
<?php $__env->startSection('content'); ?>
	<section class="page-banner-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Qui sommes nous?</h2>
				</div>
				<div class="col-md-6">
					<ul class="page-depth">
						<li><a href="<?php echo e(route('home')); ?>">Bao-Technoligies</a></li>
						<li><a href="<?php echo e(route('apropos')); ?>">Qui sommes nous ?</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
		<section class="contact-section">
			<div class="container">
				<div class="col-md-5">
					<div class="contact-info">
						<h2>Contact Info</h2>
						<p>You can contact or visit us in our office from Monday to Friday from 8:00 - 17:00</p>
						<ul class="information-list">
							<li><i class="fa fa-map-marker"></i><span>907 N Randolph street, Arlington County, Virginia, United States</span></li>
							<li><i class="fa fa-phone"></i><span>+1 703-697-1776</span><span>+1 605-315-8544</span></li>
							<li><i class="fa fa-envelope-o"></i><a href="#">nunforest@gmail.com</a></li>
						</ul>						
					</div>
				</div>
				<div class="col-md-7">
					<form id="contact-form" method="post">
						<h2>Send us a message</h2>
						<div class="form-group ">
							<label>Votre Nom : </label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="form-group">
							<label>Votre mail : </label>
							<input name="mail" id="mail" type="text" placeholder="Email">
						</div>

						<div class="form-group">
							<label>Votre message:</label>
							<textarea name="comment" id="comment" placeholder="Message"></textarea>
						</div>
						<input type="submit" id="submit_contact" value="Send Message">
						<div id="msg" class="message"></div>
					</form>
				</div>
			</div>
			<!-- div id="map"></div -->
		</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>