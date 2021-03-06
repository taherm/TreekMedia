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
			<br><br>
			<div class="row">

				@foreach($icons as $icon)
				<div class="col-md-3 text-center">
					<img src="{{asset('uploads/'.$icon->image)}}" class="img-responsive" />
					<br>
				<br><br>
				</div>
				
				@endforeach



			</div>
			<br><br>
		</div>

	</section>


	@endsection