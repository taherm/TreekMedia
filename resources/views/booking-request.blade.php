@extends('layouts.master')
@section('content')



<div role="main" class="main">

	<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<h1>Booking Request</h1>
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

	<section class="section section-no-border">

		<div class="container" style="background-repeat: no-repeat;background-size: cover;">

			<div class="row mt-5">
				<div class="col-lg-12">
					<h2 class="font-weight-semibold mb-3 text-center" style="color:white;">Tell Us Your Project</h2>
					<form action="{{url('/booking-request')}}" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="exampleInputEmail1" style="color:white;">Event Title</label>
							<div class="col-10">
								<input  class="form-control" size="30" align="center" placeholder="Event Title" name="name">
							</div>
						</div>

						<div class="form-group">
							<label for="example-date-input" style="color:white;">From Date</label>
							<div class="col-10">
								<input class="form-control" type="date" id="example-date-input" name="from_date">
							</div>
						</div>
						<div class="form-group">
							<label for="example-date-input" style="color:white;">To Date</label>
							<div class="col-10">
								<input class="form-control" type="date"  id="example-date-input" name="to_date">
							</div>
						</div>
						<div class="form-group">
							<label for="exampleTextarea" style="color:white;">Message</label>
							<div class="col-10">
								<textarea class="form-control" id="exampleTextarea" rows="3" name="message"></textarea>
							</div>
						</div>
						<div class="col-10">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>

			</div>



		</div>


		<br>
	</section>
	@endsection