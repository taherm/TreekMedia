<?php $__env->startSection('content'); ?>



<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1>Services </h1>
				</div>
				<div class="col-lg-6">
					<ul class="breadcrumb pb-0">
						<li><a href="#">Home</a></li>
						<li class="active">Services</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-no-border">
		<div class="container">
			<br>
			<div class="row mt-4">
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp"
					    data-appear-animation-delay="300">
						<div class="feature-box-icon" style="min-width: 4.7rem;">
							<img src="<?php echo e(asset('img/services/feasibility_new.png')); ?>" alt class="img-fluid" />
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-semibold"><a href="/services" class="text-decoration-none" style="color:white">SMS
									Services</a></h4>
							<p style="font-weight:bold;">Send bulk SMS to all operators and any areas that you would like.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp"
					    data-appear-animation-delay="300">
						<div class="feature-box-icon" style="min-width: 4.7rem;">
							<img src="<?php echo e(asset('img/services/graphic_new.png')); ?>" alt class="img-fluid" />
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-semibold"><a href="/" class="text-decoration-none" style="color:white">Online
									Advertisement</a></h4>
							<p style="font-weight:bold;">Online advertising for your product and services throughout media channels.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp"
					    data-appear-animation-delay="300">
						<div class="feature-box-icon" style="min-width: 4.7rem;">
							<img src="<?php echo e(asset('img/services/mobile_new.png')); ?>" alt class="img-fluid" />
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-semibold"><a href="/" class="text-decoration-none" style="color:white">Branding and
									Graphic Design</a></h4>
							<p style="font-weight:bold;">Creating suitable and relatable content and designs for your business in addition to brand
								development and reputation.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-lg-4">
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp"
					    data-appear-animation-delay="300">
						<div class="feature-box-icon" style="min-width: 4.7rem;">
							<img src="<?php echo e(asset('img/services/videos_new.png')); ?>" alt class="img-fluid" />
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-semibold"><a href="/" class="text-decoration-none" style="color:white">Videography and
									Photography</a></h4>
							<p style="font-weight:bold;">Providing you with professional photography and videography to boost your business outcome and
								fulfill all your personal and business needs with up to date equipment and techniques.</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp"
					    data-appear-animation-delay="300">
						<div class="feature-box-icon" style="min-width: 4.7rem;">
							<img src="<?php echo e(asset('img/services/web_new.png')); ?>" alt class="img-fluid" />
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-semibold"><a href="/" class="text-decoration-none" style="color:white">Website and Apps</a></h4>
							<p style="font-weight:bold;">Development and production of your website and app catered to your needs.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp"
					    data-appear-animation-delay="300">
						<div class="feature-box-icon" style="min-width: 4.7rem;">
							<img src="<?php echo e(asset('img/services/marketing_new.png')); ?>" alt class="img-fluid" />
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-semibold"><a href="/" class="text-decoration-none" style="color:white">Event Coverage</a></h4>
							<p style="font-weight:bold;">Attending and covering any event with professional outcomes for publishing.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-lg-4">
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp"
					    data-appear-animation-delay="300">
						<div class="feature-box-icon" style="min-width: 4.7rem;">
							<img src="<?php echo e(asset('img/services/social_new.png')); ?>" alt class="img-fluid" />
						</div>
						<div class="feature-box-info">
							<h4 class="font-weight-semibold"><a href="/" class="text-decoration-none" style="color:white">Social Media
									Management</a></h4>
							<p style="font-weight:bold;">Personalizing your brand by creating and publishing creative content onto your different social
								media platforms.</p>
						</div>
					</div>
				</div>
			</div>

		</div>

</div>
</section>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>