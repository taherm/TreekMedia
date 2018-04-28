@extends('layouts.master')
@section('content')


			<div role="main" class="main">
				
			<div class="slider-container rev_slider_wrapper" style="height: 650px;">
				<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.7" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
					<ul>
						<li data-transition="fade">
							<img src="{{asset('back_image.jpeg')}}"  
								alt=""
								data-bgposition="center center" 
								data-bgfit="cover" 
								data-bgrepeat="no-repeat"
								class="rev-slidebg">

							<div class="tp-caption main-label"
								data-x="left" data-hoffset="25"
								data-y="center" data-voffset="-5"
								data-start="1500"
								data-whitespace="nowrap"						 
								data-transform_in="y:[100%];s:500;"
								data-transform_out="opacity:0;s:500;"
								style="z-index: 5; font-size: 1.5em; text-transform: uppercase;"
								data-mask_in="x:0px;y:0px;">and We Do it all</div>

							<div class="tp-caption main-label"
								data-x="left" data-hoffset="25"
								data-y="center" data-voffset="-55"
								data-start="500"
								style="z-index: 5; text-transform: uppercase; font-size: 52px;"
								data-transform_in="y:[-300%];opacity:0;s:500;">We are TreekMedia</div>
							
							
						</li>
						
					</ul>
				</div>
			</div>
		
			<section class="section section-no-border">
				<div class="container">
<div class="row mt-5 mb-5 pt-3 pb-3">
						<div class="col-md-12">
							<h2 class="font-weight-semibold mb-0 text-center"  style="color:white">About Us</h2>
							<p class="lead font-weight-normal text-center"  style="color:white">Treek Media provides a full management for the client’s different social media accounts. We help you engage your customers, humanize your brand and build upon what works. If leadership in your market is your goal, Treek Media is your partner..</p>

							
							</div>
						
					</div>
					</div>
			</section>

			<section class="section section-no-border">
				<div class="container">
					<div class="row pt-3">
						<div class="col">
							<h2 class="font-weight-semibold mb-0 text-center"  style="color:white">Services</h2>
							<p class="lead font-weight-normal text-center"  style="color:white">Previous associations that helped to gather experience.
</p>
						</div>
					</div>
					<div class="row mt-4">
						<div class="col-lg-4">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<div class="feature-box-icon" style="min-width: 4.7rem;">
									<img src="{{asset('img/services/web.png')}}" alt class="img-fluid" />
								</div>
								<div class="feature-box-info">
									<h4 class="font-weight-semibold"><a href="demo-medical-departments-detail.html" class="text-decoration-none" style="color:white">Website and Apps</a></h4>
									<p>Website & Apps Development. Native Apps with all required features.</p>
								</div>	
							</div>
						</div>
						<div class="col-lg-4">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<div class="feature-box-icon" style="min-width: 4.7rem;">
									<img src="{{asset('img/services/graphic.png')}}" alt class="img-fluid" />
								</div>
								<div class="feature-box-info">
									<h4 class="font-weight-semibold"><a href="demo-medical-departments-detail.html" class="text-decoration-none"  style="color:white">Online Advertisement</a></h4>
									<p>Online Advertising for your product and services through out media channels.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<div class="feature-box-icon" style="min-width: 4.7rem;">
									<img src="{{asset('img/services/mobile.png')}}" alt class="img-fluid" />
								</div>
								<div class="feature-box-info">
									<h4 class="font-weight-semibold"><a href="demo-medical-departments-detail.html" class="text-decoration-none"  style="color:white">Branding and Graphic Design</a></h4>
									<p>Creating Suitable content for your business needs for social media and other in addition to brand development.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-lg-4">
						<div class="col-lg-4">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<div class="feature-box-icon" style="min-width: 4.7rem;">
									<img src="{{asset('img/services/videos.png')}}" alt class="img-fluid" />
								</div>
								<div class="feature-box-info">
									<h4 class="font-weight-semibold"><a href="demo-medical-departments-detail.html" class="text-decoration-none"  style="color:white">Videography and Photography</a></h4>
									<p>We provide you with professional photography to boost your business outcome and cover all your personal and business videos with up to date equipments that fulfill your needs.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<div class="feature-box-icon" style="min-width: 4.7rem;">
									<img src="{{asset('img/services/feasibility.png')}}" alt class="img-fluid" />
								</div>
								<div class="feature-box-info">
									<h4 class="font-weight-semibold"><a href="demo-medical-departments-detail.html" class="text-decoration-none"  style="color:white">Sms Services</a></h4>
									<p>Send bulk SMS for all operators and areas that you can't select.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
								<div class="feature-box-icon" style="min-width: 4.7rem;">
									<img src="{{asset('img/services/marketing.png')}}" alt class="img-fluid" />
								</div>
								<div class="feature-box-info">
									<h4 class="font-weight-semibold"><a href="demo-medical-departments-detail.html" class="text-decoration-none"  style="color:white">Event Coverage</a></h4>
									<p>Attending and covering your events in professional outcome.</p>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
			
			
			<section class="section section-no-border">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="font-weight-semibold mb-0 text-center" style="color:white">Clients</h2>
							<p class="lead font-weight-normal text-center"  style="color:white">Our Clients</p>
						</div>
					</div>
					<div class="row">
						
							
									<div class="col-md-3 text-center">
										<img src="{{asset('img/customers/1.png')}}" alt class="img-fluid" />
									</div>
									<div class="col-md-3 text-center">
										<img src="{{asset('img/customers/2.jpg')}}" alt class="img-fluid" />
									</div>
									<div class="col-md-3 text-center">
										<img src="{{asset('img/customers/3.png')}}" alt class="img-fluid" />
									</div>
									<div class="col-md-3 text-center">
										<img src="{{asset('img/customers/4.png')}}" alt class="img-fluid" />
									</div>
									
							
						
					</div>
				</div>
			</section>
			

<section class="section section-no-border">
				<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
				<button type="button" onclick="myFunction()" class="btn btn-warning btn-lg active" style="color:white;background color:yellow">Locate Us On The Map</button>

			
<br>				
</div>

<br>
			<div class="map" id="myDIV" style="display:none">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3476.7637540973074!2d47.98250041509965!3d29.37720578213006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf849441e71957%3A0x5917ce3248898c70!2sSAWABER+6+Building!5e0!3m2!1sen!2skw!4v1517997257932" width="1140" height="606" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
							</div>
							</div>
							</div>
		@endsection