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
		<div class="container" style="background-repeat: no-repeat;background-size: cover;height:600px">
			<br><br>
			<div class="row">

				<?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-3 text-center">
					<img src="<?php echo e(asset('uploads/'.$icon->image)); ?>" class="img-responsive" />
					<br>
				<br><br>
				</div>
				
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



			</div>
			<br><br>
		</div>

	</section>


	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>