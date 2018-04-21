<?php $__env->startSection('content'); ?>



			<div role="main" class="main">
				
			<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<h1>Booking Request<span>TELL US YOUR PROJECT</span></h1>
						</div>
						<div class="col-lg-6">
							<ul class="breadcrumb pb-0">
								<li><a href="#">Home</a></li>
								<li class="active">Booking Request</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row mt-5">
					<div class="col-lg-12">
                    <h2 class="font-weight-semibold mb-3 text-center">Booking Request</h2>

                    <div class="form-group">
    <label for="exampleInputEmail1">From*</label>
    <div class="col-10">
    <input type="email" class="form-control" size="30" align="center" id="exampleInputEmail1" maxlength="10" aria-describedby="emailHelp" placeholder="Event Title">
    </div>
</div>

						<div class="form-group">
  <label for="example-date-input">Date</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group">
  <label for="example-date-input">Date</label>
  <div class="col-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group">
    <label for="exampleTextarea">Message</label>
    <div class="col-10">
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
</div>
<div class="col-10">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
					
				</div>

				

			</div>

			
      <br>
			
				<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>