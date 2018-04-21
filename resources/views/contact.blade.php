@extends('layouts.master')
@section('content')
			<div role="main" class="main">
				
			<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<h1 class="mt-1">Contact <span>Send us a message or call us for more information</span></h1>
						</div>
						<div class="col-lg-6">
							<ul class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="active">Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row mt-5">
					<div class="col-lg-4">
						<div class="feature-box feature-box-style-2">
							<div class="feature-box-icon pt-0">
								<i class="icon-location-pin icons"></i>
							</div>
							<div class="feature-box-info">
								<h4 class="mb-2">Address</h4>
								<p class="text-4">
									123 Porto Blvd, Suite 100<br>
									New York, NY
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="feature-box feature-box-style-2">
							<div class="feature-box-icon pt-0">
								<i class="icon-phone icons"></i>
							</div>
							<div class="feature-box-info">
								<h4 class="mb-2">Phone</h4>
								<p class="text-4">
									123-456-7890 <br>
									123-456-7891
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="feature-box feature-box-style-2">
							<div class="feature-box-icon pt-0">
								<i class="icon-envelope icons"></i>
							</div>
							<div class="feature-box-info">
								<h4 class="mb-2">Email</h4>
								<p class="text-4">
									mail@example.com<br>
									mail2@example.com
								</p>
							</div>
						</div>
					</div>
				</div>

				<hr class="solid">

				<div class="row pt-4 mb-4">
					
					<div class="col-lg-12">

						<h4 class="font-weight-semibold mb-4">Send a Message to Us</h4>

						<div class="alert alert-success d-none mt-4" id="contactSuccess">
							<strong>Success!</strong> Your message has been sent to us.
						</div>

						<div class="alert alert-danger d-none mt-4" id="contactError">
							<strong>Error!</strong> There was an error sending your message.
							<span class="text-1 mt-2 d-block" id="mailErrorMessage"></span>
						</div>

						<form id="contactForm" action="http://preview.oklerthemes.com/porto/6.1.0/php/contact-form.php" method="POST">
							<div class="form-row">
								<div class="form-group col">
									<input type="text" placeholder="Your Name" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<input type="email" placeholder="Your E-mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<input type="text" placeholder="Subject" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<textarea maxlength="5000" placeholder="Message" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" required></textarea>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-5" data-loading-text="Loading...">
								</div>
							</div>
						</form>

					</div>
				</div>

			</div>

			
@endsection