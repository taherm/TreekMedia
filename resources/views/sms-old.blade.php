@extends('layouts.master')
@section('content')



			<div role="main" class="main">
				
			<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<h1>SMS<span></span></h1>
						</div>
						<div class="col-lg-6">
							<ul class="breadcrumb pb-0">
								<li><a href="#">Home</a></li>
								<li class="active">SMS</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row mt-5">
					<div class="col-lg-12">
                    <h2 class="font-weight-semibold mb-3 text-center">SMS Request</h2>

                    <div class="form-group">
    <label for="exampleInputEmail1">From*</label>
    <input type="email" class="form-control" size="35" align="center" id="exampleInputEmail1" maxlength="10" aria-describedby="emailHelp" placeholder="">
    </div>
<div class="form-group">
    <label for="exampleSelect1">Type*</label>
    <select class="form-control" id="exampleSelect1">
      <option>10K Kuwaiti Male above 25</option>
      <option>10K Kuwaiti Female above 25</option>
      <option>10K Android Users</option>
      <option>10K iOS Users</option>
      <option>10K Selected Area</option>
      
      <option>50K Selected Areas</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Message</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
					
				</div>

				

			</div>
<br>
			

			
				@endsection