@extends('layouts.base')


@section('content')
    <!--
		=============================================
			Hero Banner
		==============================================
		-->
		<div class="hero-banner-one pt-225 xl-pt-200 lg-pt-150 pb-150 lg-pb-100 position-relative">
			<div class="hero-slider-one m0">
				<div class="item m0"><div class="hero-img" style="background-image: url({{ asset('assets/images/media/img_01.jpg') }});"></div></div>
				{{-- <div class="item m0"><div class="hero-img" style="background-image: url({{ asset('assets/images/media/img_02.jpg') }});"></div></div>
				<div class="item m0"><div class="hero-img" style="background-image: url({{ asset('assets/images/media/img_03.jpg') }});"></div></div> --}}
			</div>
			<!-- /.hero-slider-one -->
			<div class="container position-relative">
				<div class="row">
					<div class="col-xl-6 col-lg-7 ms-auto">
						<h1 class="hero-heading d-inline-block position-relative wow fadeInUp">Got a <br>Brilliant Idea?</h1>
						<p class="text-xl text-white pt-35 pb-25 wow fadeInUp" data-wow-delay="0.1s">Empowering businesses with innovative strategies and actionable recommendations</p>
						<a href="contact.html" class="btn-two icon-link wow fadeInUp" data-wow-delay="0.2s">
							<span>Learn More</span>
							<img src="{{ asset('assets/images/lazy.svg') }}" data-src="images/icon/icon_02.svg" alt="" class="lazy-img icon ms-2">
						</a>
					</div>
				</div>
			</div>
			<a href="contact.html" class="more-btn rounded-circle d-flex align-items-center justify-content-center tran3s wow fadeInLeft" target="_blank"><i class="bi bi-arrow-up-right"></i></a>
		</div>
		<!-- /.hero-banner-one -->


		<!--
		=============================================
			Fancy Banner One
		==============================================
		-->
		<div class="fancy-banner-one position-relative pt-30 md-pt-20 pb-40 md-pb-20 bg-white">
			<div class="row align-items-center">
				<div class="col-md-6 text-center text-md-end">
					<h2 class="pe-xl-5 pe-md-4 sm-pb-50">Let’s <span>Discuss & Start</span></h2>
				</div>
				<div class="col-md-6">
					<div class="ps-xl-5 ps-md-4 pe-xxl-5 d-flex align-items-center justify-content-between">
						<div>
							<h3 class="fw-bold">37 million+</h3>
							<p class="text-md m0">MSMEs Worldwide</p>
						</div>
						<img src="{{ asset('assets/images/lazy.svg') }}" data-src="images/assets/screen_01.png" alt="" class="lazy-img screen me-xxl-5">
					</div>
				</div>
			</div>
		</div>
		<!-- /.fancy-banner-one -->


		<!--
		=============================================
			BLock Feature One
		==============================================
		-->

		<div class="block-feature-one position-relative pt-75">
			{{-- <div class="upper-wrapper mb-110 lg-mb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 wow fadeInUp">
							<div class="card-style-one d-flex w-100 mb-35">
								<div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('assets/images/lazy.svg') }}" data-src="images/icon/icon_03.svg" alt="" class="lazy-img"></div>
								<div class="text ps-4">
									<h4 class="fw-bold">Low Fees</h4>
									<p class="pe-xl-4">cupidatat non proident, sunt in culpa qui officia deserunt</p>
								</div>
							</div>
							<!-- /.card-style-one -->
						</div>
						<div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
							<div class="card-style-one d-flex w-100 mb-35">
								<div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('assets/images/lazy.svg') }}" data-src="images/icon/icon_04.svg" alt="" class="lazy-img"></div>
								<div class="text ps-4">
									<h4 class="fw-bold">Expert Advisor</h4>
									<p class="pe-xl-4">Elit esse cillum dolore eu fugiat nulla pariatur</p>
								</div>
							</div>
							<!-- /.card-style-one -->
						</div>
						<div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
							<div class="card-style-one d-flex w-100 mb-35">
								<div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center"><img src="{{ asset('assets/images/lazy.svg') }}" data-src="images/icon/icon_05.svg" alt="" class="lazy-img"></div>
								<div class="text ps-4">
									<h4 class="fw-bold">Effective Support</h4>
									<p class="pe-xl-4">quis nostrud exerct ullamo ea nisi ut aliqui com dolor</p>
								</div>
							</div>
							<!-- /.card-style-one -->
						</div>
					</div>
				</div>
			</div> --}}
			<!-- /.upper-wrapper -->

			<div class="container">
				<div class="position-relative">
					<div class="row">
						<div class="col-md-6">
							<div class="title-one text-center text-md-start mb-30 sm-mb-10">
								<h2>Provide quality Services.</h2>
							</div>
							<!-- /.title-one -->
						</div>
					</div>

					<div class="row justify-content-center">
						<div class="col-lg-4 col-md-6 d-flex wow fadeInUp">
							<div class="card-style-two vstack tran3s w-100 mt-30">
								<img src="images/lazy.svg" data-src="images/icon/icon_06.svg" alt="" class="lazy-img icon me-auto">
								<h4 class="fw-bold mt-30 mb-25">Cybersecurity SME Tool Kit</h4>
								<p class="mb-20">Protect your business from cyber threats with free cyber security tools</p>
								<a href="service-details.html" class="arrow-btn tran3s mt-auto stretched-link"><img src="images/lazy.svg" data-src="images/icon/icon_09.svg" alt="" class="lazy-img"></a>
							</div>
							<!-- /.card-style-two -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.1s">
							<div class="card-style-two vstack tran3s w-100 mt-30">
								<img src="images/lazy.svg" data-src="images/icon/icon_07.svg" alt="" class="lazy-img icon me-auto">
								<h4 class="fw-bold mt-30 mb-25">SME DIGITAL ACADEMY</h4>
								<p class="mb-20">Boost your skill and knowledge for successful business</p>
								<a href="service-details.html" class="arrow-btn tran3s mt-auto stretched-link"><img src="images/lazy.svg" data-src="images/icon/icon_09.svg" alt="" class="lazy-img"></a>
							</div>
							<!-- /.card-style-two -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.2s">
							<div class="card-style-two vstack tran3s w-100 mt-30">
								<img src="images/lazy.svg" data-src="images/icon/icon_08.svg" alt="" class="lazy-img icon me-auto">
								<h4 class="fw-bold mt-30 mb-25">MSME MASS Registration</h4>
								<p class="mb-20">MSME MASS Registration</p>
								<a href="service-details.html" class="arrow-btn tran3s mt-auto stretched-link"><img src="images/lazy.svg" data-src="images/icon/icon_09.svg" alt="" class="lazy-img"></a>
							</div>
							<!-- /.card-style-two -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.2s">
							<div class="card-style-two vstack tran3s w-100 mt-30">
								<img src="images/lazy.svg" data-src="images/icon/icon_08.svg" alt="" class="lazy-img icon me-auto">
								<h4 class="fw-bold mt-30 mb-25">CREDIT INFORMATION PORTAL</h4>
								<p class="mb-20">Get access to financial information to get your desired destinations faster</p>
								<a href="service-details.html" class="arrow-btn tran3s mt-auto stretched-link"><img src="images/lazy.svg" data-src="images/icon/icon_09.svg" alt="" class="lazy-img"></a>
							</div>
							<!-- /.card-style-two -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.2s">
							<div class="card-style-two vstack tran3s w-100 mt-30">
								<img src="images/lazy.svg" data-src="images/icon/icon_08.svg" alt="" class="lazy-img icon me-auto">
								<h4 class="fw-bold mt-30 mb-25">LATEST NEWS UPDATES</h4>
								<p class="mb-20">See our latest news updates</p>
								<a href="service-details.html" class="arrow-btn tran3s mt-auto stretched-link"><img src="images/lazy.svg" data-src="images/icon/icon_09.svg" alt="" class="lazy-img"></a>
							</div>
							<!-- /.card-style-two -->
						</div>
						<div class="col-lg-4 col-md-6 d-flex wow fadeInUp" data-wow-delay="0.2s">
							<div class="card-style-two vstack tran3s w-100 mt-30">
								<img src="images/lazy.svg" data-src="images/icon/icon_08.svg" alt="" class="lazy-img icon me-auto">
								<h4 class="fw-bold mt-30 mb-25">SMEDAN PARTNERS WITH IMSME</h4>
								<p class="mb-20">See our partners</p>
								<a href="service-details.html" class="arrow-btn tran3s mt-auto stretched-link"><img src="images/lazy.svg" data-src="images/icon/icon_09.svg" alt="" class="lazy-img"></a>
							</div>
							<!-- /.card-style-two -->
						</div>
					</div>

					{{-- <div class="section-subheading sm-mt-40">
						<p class="text-lg">Inciddnt ut labore et dolor magna aliu. enim ad mim venam, quis nostru </p>
						<a href="service-v1.html" class="btn-three icon-link">
							<span>See All Services</span>
							<img src="images/lazy.svg" data-src="images/icon/icon_09.svg" alt="" class="lazy-img icon ms-1">
						</a>
					</div> --}}
					<!-- /.section-subheading -->
				</div>
			</div>
		</div>
		<!-- /.block-feature-one -->



		<!--
		=====================================================
			Text Feature One
		=====================================================
		-->
		<div class="text-feature-one mt-150 lg-mt-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-xl-5 col-lg-6 wow fadeInLeft">
						<div class="title-one">
							<div class="upper-title">Smedan Mandate</div>
							{{-- <h2>15k+ Client using Our Services.</h2> --}}
						</div>
						<!-- /.title-one -->
						<p class="text-sm mt-45 lg-mt-30 mb-35 lg-mb-20">The mandate of SMEDAN as contained in the enabling Act can be summarized as follows:
                            Stimulating, monitoring and coordinating the development of the MSMEs sub-sector;
                            Initiating and articulating policy ideas for small and medium enterprises growth and development;
                            Promoting and facilitating development programmes, instruments and support services to accelerate the development and modernization of  MSME operations...</p>
						<div class="d-inline-flex flex-wrap align-items-center">
							<a href="about-us-v1.html" class="btn-four mt-15 me-4">More About us</a>
							<a href="contact.html" class="btn-three icon-link mt-15">
								<span>Smedan Guilding Principles</span>
								<img src="images/lazy.svg" data-src="images/icon/icon_09.svg" alt="" class="lazy-img icon ms-1">
							</a>
						</div>
					</div>
					<div class="col-xl-7 col-lg-6 wow fadeInRight">
						<div class="media-list-item ms-auto pe-xxl-5 pe-4 ps-xxl-5 ps-4 pb-35 md-mt-60 d-flex align-items-end"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.text-feature-one -->


		<!--
		=====================================================
			BLock Feature Two
		=====================================================
		-->
		<div class="block-feature-two mt-80">
			<div class="container">
				<div class="wrapper">
					<div class="row align-items-center">
						<div class="col-md-4">
							<div class="card-style-three pt-45 md-pt-30 pb-35 sm-pb-30">
								<img src="{{ asset('assets/images/lazy.svg') }}" data-src="images/icon/icon_10.svg" alt="" class="lazy-img icon">
								<h4 class="fw-bold mt-40 sm-mt-20 mb-20">Our Mission</h4>
								<p>To facilitate the access of micro, small and medium entrepreneurs and investors to all resources required for their development. Justification for our existence.... </p>
							</div>
							<!-- /.card-style-three -->
						</div>
						<div class="col-md-5">
							<div class="border-line h-100 ps-lg-5 pe-lg-5 ps-md-3 pe-md-3">
								<div class="card-style-three pt-45 md-pt-30 pb-35 sm-pb-30">
									<img src="{{ asset('assets/images/lazy.svg') }}" data-src="images/icon/icon_11.svg" alt="" class="lazy-img icon">
									<h4 class="fw-bold mt-40 sm-mt-20 mb-20">Our company vision.</h4>
									<p>To establish a structured and efficient micro, small and medium enterprises sector that will enhance sustainable economic development of Nigeria.</p>
								</div>
								<!-- /.card-style-three -->
							</div>
						</div>
						<div class="col-md-3">
							<div class="ps-lg-5 sm-pb-30 sm-pt-30">
								<div class="numb fw-500"><span class="counter">20</span></div>
								<p class="m0">Years of service </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-two -->


{{--
		<!--
		=====================================================
			BLock Feature Three
		=====================================================
		-->
		<div class="block-feature-three position-relative mt-150 lg-mt-80 pb-150 lg-pb-80 sm-pb-60">
			<div class="container">
				<div class="position-relative">
					<div class="row">
						<div class="col-md-6 wow fadeInLeft">
							<div class="title-one mb-90 lg-mb-50">
								<h2>Our client Success Stories.</h2>
							</div>
							<!-- /.title-one -->
						</div>
					</div>

					<div class="row gx-xxl-5">
						<div class="col-lg-8">
							<div class="block-one pt-45 lg-pt-30 pb-20 ps-3 ps-xl-5 pe-xl-5 pe-3 position-relative border-30 wow fadeInUp">
								<div class="row">
									<div class="col-lg-5">
										<div class="tag d-inline-block border-30 fw-500 text-uppercase mb-15">Consulting</div>
										<div class="date text-dark"><span class="fw-500">Featured -</span> 18 Jul 2023</div>
									</div>
									<div class="col-lg-7">
										<h3 class="block-title d-inline-block position-relative"><a href="project-details-v1.html">Manage your online banking and get rewarded</a></h3>
									</div>
								</div>
							</div>
							<!-- /.block-one -->

							<div class="block-two border-30 d-flex mt-45 lg-mt-30 wow fadeInUp">
								<div class="img-wrapper"></div>
								<div class="text-wrapper bg-white">
									<div class="date">18 Jul 2023</div>
									<h3 class="block-title d-inline-block position-relative mt-5 mb-40 lg-mb-30"><a href="project-details-v1.html">Gold card user will get priority pass for <br class="d-none d-lg-block"> Airport.</a></h3>
									<div class="d-flex align-items-center justify-content-between">
										<div class="tag text-uppercase fw-500">Payments</div>
										<a href="project-details-v1.html" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
									</div>
								</div>
								<!-- /.text-wrapper -->
							</div>
							<!-- /.block-two -->
						</div>

						<div class="col-lg-4">
							<div class="block-three border-30 ps-lg-4 ps-3 pe-lg-4 pe-3 pt-40 lg-pt-30 pb-30 md-mt-30 wow fadeInUp" data-wow-delay="0.2s">
								<div class="date">3 Aug 2023</div>
								<h3 class="block-title d-inline-block position-relative mt-20 mb-80 lg-mb-50"><a href="project-details-v1.html">Gold card user will get priority pass for Airport.</a></h3>
								<div class="d-flex align-items-center justify-content-between">
									<div class="tag text-uppercase fw-500">DESIGN</div>
									<a href="project-details-v1.html" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</div>
							</div>
							<!-- /.block-three -->
							<div class="block-four border-30 ps-lg-4 ps-3 pe-lg-4 pe-3 pt-15 pb-30 mt-45 lg-mt-30 wow fadeInUp" data-wow-delay="0.2s">
								<h3 class="block-title d-inline-block position-relative mt-20 mb-250 lg-mb-150 sm-mb-100"><a href="project-details-v1.html">Our Travel Card Makes <br class="d-none d-xl-block">you Happy.</a></h3>
								<div class="d-flex align-items-center justify-content-between">
									<div class="tag text-uppercase fw-500">DESIGN</div>
									<a href="project-details-v1.html" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</div>
							</div>
							<!-- /.block-four -->
						</div>
					</div>

					<div class="section-btn sm-mt-40">
						<a href="project-v1.html" class="btn-five icon-link">
							<span class="text">See all stories</span>
							<div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.block-feature-three -->



		<!--
		=============================================
			Feedback Section One
		==============================================
		-->
		<div class="feedback-section-one mt-150 lg-mt-80 pb-80">
			<div class="container">
				<div class="position-relative">
					<div class="title-one sm-mb-40">
						<h2>Words from <br> clients.</h2>
					</div>
					<!-- /.title-one -->
					<div class="feedback-slider-one">
						<div class="item">
							<div class="feedback-block-one">
								<div class="row align-items-end">
									<div class="col-md-7 ms-auto order-md-last">
										<blockquote>"Efficient problem-solving, insightful market analysis, and actionable plans made the consulting experience invaluable to our business's success."</blockquote>
										<div class="d-flex align-items-center">
											<img src="images/media/img_08.jpg" alt="" class="avatar rounded-circle">
											<div class="ps-4">
												<div class="name fw-bold text-dark">James Bond.</div>
												<p class="fs-6 m0">CEO & Head of Sky Tech Inc.</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 order-md-first">
										<div class="d-flex align-items-center justify-content-between sm-mt-40">
											<div class="line"></div>
											<div class="count fw-500"><span class="text-dark">01</span>  /  03</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-block-one">
								<div class="row align-items-end">
									<div class="col-md-7 ms-auto order-md-last">
										<blockquote>"Lorem ipsum, dolor sit amet consectetur elit. Asperiores unde inventore tenetur. Accusantium tenetur id cupiditate quibusdam."</blockquote>
										<div class="d-flex align-items-center">
											<img src="images/media/img_08.jpg" alt="" class="avatar rounded-circle">
											<div class="ps-4">
												<div class="name fw-bold text-dark">Rashed Kabir.</div>
												<p class="fs-6 m0">CEO & Head of Sky Tech Inc.</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 order-md-first">
										<div class="d-flex align-items-center justify-content-between sm-mt-40">
											<div class="line"></div>
											<div class="count fw-500"><span class="text-dark">02</span>  /  03</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feedback-block-one">
								<div class="row align-items-end">
									<div class="col-md-7 ms-auto order-md-last">
										<blockquote>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga sed nobis eveniet nisi provident aut excepturi reiciendis officiis quo."</blockquote>
										<div class="d-flex align-items-center">
											<img src="images/media/img_08.jpg" alt="" class="avatar rounded-circle">
											<div class="ps-4">
												<div class="name fw-bold text-dark">Zubayer Hasan.</div>
												<p class="fs-6 m0">CEO & Head of Sky Tech Inc.</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 order-md-first">
										<div class="d-flex align-items-center justify-content-between sm-mt-40">
											<div class="line"></div>
											<div class="count fw-500"><span class="text-dark">03</span>  /  03</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="icon d-flex align-items-center justify-content-center rounded-circle"><img src="images/lazy.svg" data-src="images/icon/icon_12.svg" alt="" class="lazy-img"></div>
				</div>
			</div>
		</div>
		<!-- /.feedback-section-one -->



		<!--
		=====================================================
			Team Section One
		=====================================================
		-->
		<div class="team-section-one mt-150 lg-mt-80">
			<div class="container">
				<div class="position-relative">
					<div class="title-one mb-40 lg-mb-20 wow fadeInUp">
						<h2>Our Advisor.</h2>
					</div>
					<!-- /.title-one -->

					<div class="row">
						<div class="col-lg-3 col-sm-6 wow fadeInUp">
							<div class="card-style-four mt-35">
								<div class="media d-flex align-items-center justify-content-center position-relative overflow-hidden">
									<img src="images/lazy.svg" data-src="images/media/img_09.jpg" alt="" class="lazy-img w-100">
									<a href="team-details.html" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</div>
								<h4 class="fw-500 pt-20 m0">Rashed kabir</h4>
								<div class="fs-6">Manager</div>
							</div>
							<!-- /.card-style-four -->
						</div>
						<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
							<div class="card-style-four mt-35">
								<div class="media d-flex align-items-center justify-content-center position-relative overflow-hidden">
									<img src="images/lazy.svg" data-src="images/media/img_10.jpg" alt="" class="lazy-img w-100">
									<a href="team-details.html" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</div>
								<h4 class="fw-500 pt-20 m0">Angelina Jolie</h4>
								<div class="fs-6">Marketing Expert</div>
							</div>
							<!-- /.card-style-four -->
						</div>
						<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
							<div class="card-style-four mt-35">
								<div class="media d-flex align-items-center justify-content-center position-relative overflow-hidden">
									<img src="images/lazy.svg" data-src="images/media/img_11.jpg" alt="" class="lazy-img w-100">
									<a href="team-details.html" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</div>
								<h4 class="fw-500 pt-20 m0">Zubayer Hasan</h4>
								<div class="fs-6">Analysis</div>
							</div>
							<!-- /.card-style-four -->
						</div>
						<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
							<div class="card-style-four mt-35">
								<div class="media d-flex align-items-center justify-content-center position-relative overflow-hidden">
									<img src="images/lazy.svg" data-src="images/media/img_12.jpg" alt="" class="lazy-img w-100">
									<a href="team-details.html" class="round-btn rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</div>
								<h4 class="fw-500 pt-20 m0">Maria Escolova</h4>
								<div class="fs-6">Senior Officer</div>
							</div>
							<!-- /.card-style-four -->
						</div>
					</div>

					<div class="section-btn sm-mt-40">
						<a href="team-v1.html" class="btn-five icon-link">
							<span class="text">See all Experts</span>
							<div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.team-section-one -->


		<!--
		=====================================================
			FAQ Section One
		=====================================================
		-->
		<div class="faq-section-one mt-150 lg-mt-120 md-mt-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 wow fadeInLeft">
						<div class="title-one mb-40 lg-mb-20">
							<h2>Questions & Answers</h2>
						</div>
						<!-- /.title-one -->
						<p class="text-lg mb-40 lg-mb-20">Don’t find the answer? We can help</p>
						<a href="contact.html" class="btn-four">Contact us</a>
					</div>

					<div class="col-lg-7">
						<div class="accordion accordion-style-one mt-15 md-mt-50" id="accordionOne">
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										How does the free trial work?
									</button>
							  	</h2>
							  	<div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit .</p>
									</div>
							  	</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										How do you find different criteria in your process?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit .</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
										What do you look for in a founding team?
									</button>
								</h2>
								<div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit .</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										Do you recommend Pay as you go or Pre pay?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit .</p>
									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										What do I get for $0 with my plan?
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
									<div class="accordion-body">
										<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit .</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.faq-section-one --> --}}


		<!--
		=====================================================
			Blog Section One
		=====================================================
		-->
		<div class="blog-section-one position-relative mt-150 lg-mt-80 pt-120 lg-pt-80 mb-5">
			<div class="container">
				<div class="position-relative">
					<div class="title-one mb-20 lg-mb-10">
						<h2>Latest News.</h2>
					</div>
					<!-- /.title-one -->
					<p class="text-lg mb-40 lg-mb-10">Get the latest update, trips & tricks from our expert.</p>

					<div class="row gx-xxl-5">
						<div class="col-md-6">
							<article class="blog-meta-one mt-35 sm-mt-30 wow fadeInUp">
								<div class="post-data">
									<div class="post-info"><span class="fw-500 text-dark">Rashed Ka -</span> 18 Jul 2023</div>
									<a href="blog-details.html" class="mt-15"><h4 class="tran3s blog-title">Wise Spending Habits, 13 Tips for Maximizing Your Money.</h4></a>
								</div>
								<figure class="post-img position-relative d-flex justify-content-end align-items-end m0" style="background-image: url({{ asset('assets/images/blog/blog_img_01.jpg') }});">
									<a href="blog-details.html" class="round-btn stretched-link rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</figure>
							</article>
							<!-- /.blog-meta-one -->
						</div>
						<div class="col-md-6">
							<article class="blog-meta-one mt-35 sm-mt-30 wow fadeInUp" data-wow-delay="0.1s">
								<div class="post-data">
									<div class="post-info"><span class="fw-500 text-dark">Mark Joe -</span> 09 Feb 2023</div>
									<a href="blog-details.html" class="mt-15"><h4 class="tran3s blog-title">Lessons from Visionary Leaders for Success in Business.</h4></a>
								</div>
								<figure class="post-img position-relative d-flex justify-content-end align-items-end m0" style="background-image: url({{ asset('assets/images/blog/blog_img_02.jpg') }});">
									<a href="blog-details.html" class="round-btn stretched-link rounded-circle d-flex align-items-center justify-content-center tran3s"><i class="bi bi-arrow-up-right"></i></a>
								</figure>
							</article>
							<!-- /.blog-meta-one -->
						</div>
					</div>

					<div class="section-btn sm-mt-40">
						<a href="blog-v2.html" class="btn-five icon-link">
							<span class="text">See all blogs</span>
							<div class="icon tran3s rounded-circle d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-right"></i></div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.blog-section-one -->
@endsection
