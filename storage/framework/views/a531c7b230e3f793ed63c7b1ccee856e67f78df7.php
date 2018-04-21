<?php $__env->startSection('content'); ?>



			<div role="main" class="main">
				
			<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<h1>About Us <span>20 Years Caring About You</span></h1>
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

			<div class="container">

				<div class="row mt-5">
					<div class="col-lg-8">
                    <h2 class="font-weight-semibold mb-3">Welcome to Form1</h2>

                    <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Text</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Search</label>
  <div class="col-10">
    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-2 col-form-label">URL</label>
  <div class="col-10">
    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
  <div class="col-10">
    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
  </div>
</div>
						<div class="form-group row">
  <label for="example-date-input" class="col-2 col-form-label">Date</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
</div>
					
				</div>

				

			</div>

			

			
				<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>