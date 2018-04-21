<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 40, 'stickySetTop': '-40px', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="/">
											<img alt="Porto" width="143" height="110" src="{{asset('Logo-treek.png')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="/">
															Home
														</a>
													</li>
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="{{ route('about') }}">
															About Us
														</a>
													</li>
													<li class="dropdown dropdown-full-color dropdown-secondary">
														<a class="nav-link dropdown-toggle" class="dropdown-toggle" href="/">
															Services
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="/services">Sms Services</a></li>
															<li><a class="dropdown-item" href="/">Videography and Photography</a></li>
															<li><a class="dropdown-item" href="/">Online Advertisement</a></li>
															<li><a class="dropdown-item" href="/">Branding and Graphic Design</a></li>
															<li><a class="dropdown-item" href="/">Event Coverage</a></li>
															<li><a class="dropdown-item" href="/">Social Media Management</a></li>
															<li><a class="dropdown-item" href="/">Website and Apps</a></li>
														
														</ul>
													</li>
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="/sms">
															SMS
														</a>
													</li>
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="/booking-request">
															Booking Request
														</a>
													</li>
													<li class="dropdown-full-color dropdown-secondary">
														<a class="nav-link" href="{{ route('contact') }}">
															Contact
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>