@extends('layouts.master')
@section('content')



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
			<div class="row">
				<div class="col">
					<h2 class="font-weight-semibold mb-0 text-center" style="color:white">Our Clients</h2>
				</div>
			</div>
			<br><br>
			<div class="row">


				<div class="col-md-3 text-center">
					<img src="{{asset('img/customers/1.png')}}" class="img-responsive" />
				</div>
				<div class="col-md-3 text-center">
					<img src="{{asset('img/customers/2.jpg')}}" class="img-responsive" />
				</div>
				<div class="col-md-3 text-center">
					<img src="{{asset('img/customers/3.png')}}" class="img-responsive" />
				</div>
				<div class="col-md-3 text-center">
					<img src="{{asset('img/customers/4.png')}}" class="img-responsive" />
				</div>



			</div>
			<br><br>
		</div>

	</section>


	@endsection