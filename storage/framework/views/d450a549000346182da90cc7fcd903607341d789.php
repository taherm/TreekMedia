<?php $__env->startSection('content'); ?>



<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1>About Us </h1>
				</div>
				<div class="col-lg-6">
					<ul class="breadcrumb pb-0">
						<li><a href="#">Home</a></li>
						<li class="active">About Us</li>
					</ul>
				</div>
			</div>
		</div>
	</section>





	<section class="section section-no-border">
		<div class="container" style="background:url('booking.jpg');background-repeat: no-repeat;background-size: cover;height:500px">
			<div class="row">
			<div class="col-md-6">
				<br>
				<p class="text-justify" style="font-size: 21px;margin: 50px 0px 0px 100px;">Treek Media provides a full management for the client’s
					different social media accounts. We help you engage your customers, humanize your brand and build upon what works.
					If leadership in your market is your goal, Treek Media is your partner..</p>
			</div>

		</div>

	</section>




	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>