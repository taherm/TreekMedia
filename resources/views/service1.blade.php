@extends('layouts.master')
@section('content')

			<div role="main" class="main">
				
			<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<h1 class="mt-1">Services <span>Learn more about our Services</span></h1>
						</div>
						<div class="col-lg-6">
							<ul class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="active">Services</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container">

				<div class="row mt-5 mb-5">
					<div class="col-lg-3">

						<aside class="sidebar">
							<h4 class="font-weight-semibold mb-4">Services</h4>

							<ul class="nav nav-list flex-column narrow mb-5">
								<li class="nav-item"><a class="nav-link active" href="/services">SMS Services</a></li>
								<li class="nav-item"><a class="nav-link" href="/">Videography and Photography</a></li>
								<li class="nav-item"><a class="nav-link" href="/">Online Advertisement</a></li>
								<li class="nav-item"><a class="nav-link" href="/">Event Coverage</a></li>
								<li class="nav-item"><a class="nav-link" href="/">Social Media Management</a></li>
								<li class="nav-item"><a class="nav-link" href="/">Website and Apps</a></li>
							</ul>
						</aside>

					</div>
					<div class="col-lg-9">

						<div class="feature-box feature-box-style-2 mb-4">
							<div class="feature-box-icon d-none d-sm-block">
								<img src="{{asset('img/services/mobile.png')}}" alt class="img-fluid" />
							</div>
							<div class="feature-box-info pl-0 pl-sm-3">
								<h2 class="font-weight-semibold mb-3">SMS Services</h2>
								<p class="lead font-weight-normal">At Porto Medical, we offer a wide array of departments, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>

								<img src="{{asset('img/services/graphic.jpg')}}" style="max-width: 260px;" alt="" class="float-right ml-sm-4 mb-4 img-fluid box-shadow-custom" /> 

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur hendrerit, leo vitae interdum pretium, tortor risus dapibus tortor, eu suscipit orci leo sed nisl. Integer et ipsum eu nulla auctor mattis sit amet in diam. Vestibulum non ornare arcu. Class aptent taciti sociosqu ad.</p>

								<div class="toggle toggle-primary toggle-simple" data-plugin-toggle>
									<section class="toggle">
										<label>Expand 1</label>
										<div class="toggle-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. </p>

											<ol class="list list-ordened list-ordened-style-2 mb-5 mt-4">
												<li>Lorem ipsum consectetur adipi;</li>
												<li>Integer molestie facilisis in pre;</li>
												<li>Faucibus porta la;</li>
											</ol>
										</div>
									</section>
									<section class="toggle">
										<label>Expand 2</label>
										<div class="toggle-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Nullam tortor nunc, bibendum vitae semper a, volutpat eget massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fringilla, orci sit amet posuere auctor, orci eros pellentesque odio, nec pellentesque erat ligula nec massa. Aenean consequat lorem ut felis ullamcorper posuere gravida tellus faucibus. Maecenas dolor elit, pulvinar eu vehicula eu, consequat et lacus. Duis et purus ipsum. In auctor mattis ipsum id molestie. Donec risus nulla, fringilla a rhoncus vitae, semper a massa. Vivamus ullamcorper, enim sit amet consequat laoreet, tortor tortor dictum urna, ut egestas urna ipsum nec libero. Nulla justo leo, molestie vel tempor nec, egestas at massa. Aenean pulvinar, felis porttitor iaculis pulvinar, odio orci sodales odio, ac pulvinar felis quam sit.</p>
										</div>
									</section>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		@endsection