@extends('layouts.master')
@section('content')
<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1 class="mt-1">Contact <span>Let’s Talk</span></h1>
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


	<section class="section section-no-border">
		<div class="container" style="background-repeat: no-repeat;background-size: cover;height:900px;border-color: coral;">
		<br>
			<div class="row mt-5">
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon pt-0">
							<i class="icon-location-pin icons" style="color:white;"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="mb-2" style="color:white;">Address</h4>
							<p class="text-4" style="color:white;">
								Mubarak Al Kabeer st. Block 6,
								Opposite to block 5, floor 3
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon pt-0">
							<i class="icon-phone icons" style="color:white;"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="mb-2" style="color:white;">Phone</h4>
							<p class="text-4" style="color:white;">
								50040084
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="feature-box feature-box-style-2">
						<div class="feature-box-icon pt-0">
							<i class="icon-envelope icons" style="color:white;"></i>
						</div>
						<div class="feature-box-info">
							<h4 class="mb-2" style="color:white;">Email</h4>
							<p class="text-4" style="color:white;">
								info@treekmedia.com
							</p>
						</div>
					</div>
				</div>
			</div>
<br><br>
			<hr class="solid">

			<div class="row">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.891536271996!2d47.97461323551433!3d29.373464888211128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf84ebd82efab5%3A0x75e759c21f42351b!2z2KjYsdisINin2YTYstmF2LHYr9ip!5e0!3m2!1sen!2skw!4v1536337451818"
					    width="1140" height="606" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>


			</div>

		</div>
	</section>

	@endsection