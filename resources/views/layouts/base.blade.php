<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="LMS, Digital Agency, Business Development, Agency">
	<meta name="description" content="SMEDAN - Small and Medium Enterprises Development Agency of Nigeria">
    <meta property="og:site_name" content="Smedan">
    <meta property="og:url" content="https://creativegigstf.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Smedan - Small and Medium Enterprises Development Agency of Nigeria">
	<meta name='og:image' content='images/assets/ogg.png'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#1A4137">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#1A4137">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#1A4137">
	<title>{{ config('app.name', 'Small and Medium Enterprises Development Agency of Nigeria') }}</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('images/fav-icon/icon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.min.css') }}" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" media="all">

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>

<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
				Loading Transition
			==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="images/loader.svg" alt="" class="m-auto d-block" width="60"></div>
				<div class="txt-loading">
					<span data-text-preloader="S" class="letters-loading">
						S
					</span>
					<span data-text-preloader="m" class="letters-loading">
						m
					</span>
					<span data-text-preloader="e" class="letters-loading">
						e
					</span>
					<span data-text-preloader="d" class="letters-loading">
						d
					</span>
					<span data-text-preloader="a" class="letters-loading">
						a
					</span>
					<span data-text-preloader="n" class="letters-loading">
						n
					</span>
				</div>
			</div>
		</div>


		<!--
		=============================================
				Header
		==============================================
		-->
		<header class="theme-main-menu menu-overlay menu-style-one white-vr sticky-menu">
			<div class="inner-content position-relative">
				<div class="top-header">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index.html" class="d-flex align-items-center">
								<img src="{{ asset('assets/images/logo/smedan.png') }}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">
								<li class="d-none d-md-block"><a href="contact.html" class="btn-one tran3s">Get in Touch</a></li>
							</ul>
						</div> <!--/.right-widget-->
						<nav class="navbar navbar-expand-lg p0 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index.html" class="d-block"><img src="images/logo/logo_01.svg" alt=""></a></div></li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="/">Home</a>
									</li>
									<li class="nav-item dropdown mega-dropdown-sm">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Who we are
										</a>
						                <ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column">
														<ul class="style-none mega-dropdown-list">
															<li><a href="service-v1.html" class="dropdown-item"><span>Service v-1</span></a></li>
															<li><a href="service-v2.html" class="dropdown-item"><span>Service v-2</span></a></li>
															<li><a href="service-details.html" class="dropdown-item"><span>Service Details</span></a></li>
															<li><a href="team-v1.html" class="dropdown-item"><span>Team V-1</span></a></li>
															<li><a href="team-v2.html" class="dropdown-item"><span>Team V-2</span></a></li>
															<li><a href="team-details.html" class="dropdown-item"><span>Team Details</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<ul class="style-none mega-dropdown-list">
															<li><a href="about-us-v1.html" class="dropdown-item"><span>About Us V-1</span></a></li>
															<li><a href="about-us-v2.html" class="dropdown-item"><span>About Us V-2</span></a></li>
															<li><a href="testimonial.html" class="dropdown-item"><span>Testimonial</span></a></li>
															<li><a href="pricing.html" class="dropdown-item"><span>Pricing</span></a></li>
															<li><a href="faq.html" class="dropdown-item"><span>FAQ’s</span></a></li>
															<li><a href="404.html" class="dropdown-item"><span>404 Error</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<ul class="style-none mega-dropdown-list">
															<li><a href="project-v1.html" class="dropdown-item"><span>Project V-1</span></a></li>
															<li><a href="project-v2.html" class="dropdown-item"><span>Project V-2</span></a></li>
															<li><a href="project-v3.html" class="dropdown-item"><span>Project V-3</span></a></li>
															<li><a href="project-details-v1.html" class="dropdown-item"><span>Project Details V-1</span></a></li>
															<li><a href="project-details-v2.html" class="dropdown-item"><span>Project Details V-2</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
											</li>
						                </ul>
						            </li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Our Offices
										</a>
										<ul class="dropdown-menu">
											<li><a href="shop-grid.html" class="dropdown-item"><span>Shop</span></a></li>
											<li><a href="shop-details.html" class="dropdown-item"><span>Shop Details</span></a></li>
											<li><a href="cart.html" class="dropdown-item"><span>Cart</span></a></li>
											<li><a href="checkout.html" class="dropdown-item"><span>Checkout</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#">Programs</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#">News</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.html" role="button">Contact Us</a>
									</li>
									<li class="d-md-none ps-2 pe-2"><a href="contact.html" class="btn-one w-100 mt-15 tran3s">Get in Touch</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header>
		<!-- End | Header -->


        @yield('content')

        <!--
		=====================================================
			Footer One
		=====================================================
		-->
		<div class="footer-one">
			<div class="container">
				<div class="inner-wrapper">
					<div class="row justify-content-between">
						<div class="col-xl-4 col-md-3 footer-intro mb-30">
							<div class="logo mb-15">
								<a href="index.html" class="d-inline-block d-lg-none">
									<img src="images/logo/logo_01.svg" alt="">
								</a>
							</div>
							<!-- logo -->
							<p class="text-white lh-sm mb-35">Top-rated <span class="opacity-50">business <br> consultancy for your success</span></p>
							<ul class="style-none d-flex align-items-center social-icon">
								<li><a href="#"><i class="bi bi-facebook"></i></a></li>
								<li><a href="#"><i class="bi bi-dribbble"></i></a></li>
								<li><a href="#"><i class="bi bi-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-xl-2 col-md-3 col-sm-4 mb-20">
							<h5 class="footer-title">Links</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="index.html">Home</a></li>
								<li><a href="pricing.html">Pricing Plan</a></li>
								<li><a href="about-us-v1.html">About us</a></li>
								<li><a href="service-v1.html">Our services</a></li>
							</ul>
						</div>
						<div class="col-xl-2 col-md-3 col-sm-4 mb-20">
							<h5 class="footer-title">Company</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="about-us-v2.html">About us</a></li>
								<li><a href="blog-v1.html">Blogs</a></li>
								<li><a href="faq.html">FAQ’s</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
						<div class="col-xl-2 col-md-3 col-sm-4 mb-20">
							<h5 class="footer-title">Support</h5>
							<ul class="footer-nav-link style-none">
								<li><a href="contact.html">Terms of use</a></li>
								<li><a href="contact.html">Terms & conditions</a></li>
								<li><a href="contact.html">Privacy</a></li>
								<li><a href="contact.html">Cookie policy</a></li>
							</ul>
						</div>
					</div>
				</div> <!-- /.inner-wrapper -->
			</div>
			<div class="container">
				<div class="bottom-footer">
					<div class="row align-items-center">
						<div class="col-lg-5 order-lg-last mb-15">
							<div class="footer-newsletter float-xl-end">
								<h5 class="footer-title">Subscribe Newsletter</h5>
								<form action="#">
									<input type="email" placeholder="Enter your email address">
									<button><i class="bi bi-arrow-right"></i></button>
								</form>
							</div>
						</div>
						<div class="col-lg-7 order-lg-first mb-15">
							<a href="index.html" class="d-none d-lg-inline-block mb-25">
								<img src="images/logo/logo_01.svg" alt="">
							</a>
							<div class="d-xl-flex align-items-center">
								<ul class="style-none bottom-nav d-flex flex-wrap justify-content-center justify-content-lg-start order-lg-last">
									<li><a href="#">Privacy & Terms</a></li>
									<li><a href="#">Cookies</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
								<div class="copyright me-xl-4 lg-mt-10 order-lg-first"> &copy;2023 SMEDAN. All Rights Reserved</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /.bottom-footer -->
			</div>
		</div> <!-- /.footer-one -->


		<!-- Login and Signup Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="user-data-form modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="form-wrapper m-auto">
							<ul class="nav nav-tabs border-0 w-100" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fc1" role="tab">Login</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" data-bs-toggle="tab" data-bs-target="#fc2" role="tab">Signup</button>
								</li>
							</ul>
							<div class="tab-content mt-30">
								<div class="tab-pane show active" role="tabpanel" id="fc1">
									<div class="text-center mb-20">
										<h2>Hi, Welcome Back!</h2>
										<p>Still don't have an account? <a href="#">Sign up</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="Youremail@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="images/icon/icon_13.svg" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember">
														<label for="remember">Keep me logged in</label>
													</div>
													<a href="#">Forget Password?</a>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-four w-100 tran3s d-block mt-20">Login</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" role="tabpanel" id="fc2">
									<div class="text-center mb-20">
										<h2>Register</h2>
										<p>Already have an account? <a href="#">Login</a></p>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Name*</label>
													<input type="text" placeholder="Zubayer Hasan">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="zubayerhasan@gmail.com">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" class="pass_log_id">
													<span class="placeholder_icon"><span class="passVicon"><img src="images/icon/icon_13.svg" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember2">
														<label for="remember2">By hitting the "Register" button, you agree to the <a href="#">Terms conditions</a> & <a href="#">Privacy Policy</a></label>
													</div>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-four w-100 tran3s d-block mt-20">Sign up</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>

							<div class="d-flex align-items-center mt-30 mb-10">
								<div class="line"></div>
								<span class="pe-3 ps-3 fs-6">OR</span>
								<div class="line"></div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="images/icon/google.png" alt="">
										<span class="ps-3">Signup with Google</span>
									</a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="images/icon/facebook.png" alt="">
										<span class="ps-3">Signup with Facebook</span>
									</a>
								</div>
							</div>
						</div>
						<!-- /.form-wrapper -->
                    </div>
                    <!-- /.user-data-form -->
                </div>
            </div>
        </div>


		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
		<!-- Slick Slider -->
		<script src="{{ asset('assets/vendor/slick/slick.min.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('assets/vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>
		<!-- Lazy -->
		<script src="{{ asset('assets/vendor/jquery.lazy.min.js') }}"></script>
		<!-- js Counter -->
		<script src="{{ asset('assets/vendor/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('assets/vendor/jquery.waypoints.min.js') }}"></script>

		<!-- validator js -->
		<script src="{{ asset('assets/vendor/validator.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ asset('assets/js/theme.js') }}"></script>
	</div> <!-- /.main-page-wrapper -->
</body>


</html>
