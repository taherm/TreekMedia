<?php $__env->startSection('content'); ?>



<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1>Our Clients </h1>
				</div>
				<div class="col-lg-6">
					<ul class="breadcrumb pb-0">
						<li><a href="#">Home</a></li>
						<li class="active" style="color:white">Our Clients</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<section class="section section-no-border">
		<div class="container" style="background:url('clients.jpg');background-repeat: no-repeat;background-size: cover;height:500px"">
			<div class="row">
			<div class="col">
				<h2 class="font-weight-semibold mb-0 text-center" style="color:white">Our Clients</h2>
			</div>
		</div>
		<br><br>
		<div class="row">


			<div class="col-md-3 text-center">
				<img src="<?php echo e(asset('img/customers/1.png')); ?>" alt class="img-fluid" />
			</div>
			<div class="col-md-3 text-center">
				<img src="<?php echo e(asset('img/customers/2.jpg')); ?>" alt class="img-fluid" />
			</div>
			<div class="col-md-3 text-center">
				<img src="<?php echo e(asset('img/customers/3.png')); ?>" alt class="img-fluid" />
			</div>
			<div class="col-md-3 text-center">
				<img src="<?php echo e(asset('img/customers/4.png')); ?>" alt class="img-fluid" />
			</div>



		</div>
		<br><br>

	</section>


	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>