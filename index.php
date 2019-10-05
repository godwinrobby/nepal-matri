<?php require_once ('include/functions.php'); ?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Porto - Responsive HTML5 Template 7.5.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body">

		<header id="header" class="header-effect-shrink header-dark-bottom-border header-dark-bottom-border-1" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-color-primary header-body-bottom-border">
					<div class="header-top header-top-default border-bottom-0">
						<div class="container">
							<div class="header-row py-2">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills text-uppercase text-2">
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link pl-0" href="about-us.html"><i class="fas fa-angle-right"></i> About Us</a>
												</li>
												<li class="nav-item nav-item-anim-icon d-none d-md-block">
													<a class="nav-link" href="contact-us.html"><i class="fas fa-angle-right"></i> Contact Us</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item">
													<a href="mailto:mail@domain.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> mail@domain.com</a>
												</li>
												<li class="nav-item">
													<a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> 123-456-7890</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">My Profile</a></li>
													<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Matches</a></li>
													<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Search</a></li>
													<li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Requests</a></li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									<div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-user header-nav-features-user-logged d-inline-flex mx-2 pr-2" id="headerAccount">
											<a href="#" class="header-nav-features-toggle">
												<i class="far fa-user"></i> JOHN DOE
											</a>
											<div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed header-nav-features-dropdown-force-right" id="headerTopUserDropdown">
												<div class="row">
													<div class="col-8">
														<p class="mb-0 pb-0 text-2 line-height-1 pt-1">Hello,</p>
														<p><strong class="text-color-dark text-4">John Doe</strong></p>
													</div>
													<div class="col-4">
														<div class="d-flex justify-content-end">
															<img class="rounded-circle" width="40" height="40" alt="" src="img/avatars/avatar.jpg">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col">
														<ul class="nav nav-list-simple flex-column text-3">
															<li class="nav-item"><a class="nav-link" href="#">My Profile</a></li>
															<li class="nav-item"><a class="nav-link" href="#">My Orders</a></li>
															<li class="nav-item"><a class="nav-link border-bottom-0" href="#">Log Out</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main pt-3 mt-3">
				<div class="container">
					
					<div class="row pb-1 pt-2">
						<div class="col-md-3">
							<div class="heading heading-border heading-middle-border">
								<h3 class="font-weight-bold text-3 pt-1">Main</h3>
							</div>
								<ul class="list list-icons">
									<li><i class="far fa-envelope"></i> <a href="#" class="text-decoration-none text-color-dark ml-2">Inbox</a></li>
									<li><i class="far fa-envelope"></i> <a href="#" class="text-decoration-none text-color-dark ml-2">Inbox</a></li>
									<li><i class="far fa-envelope"></i> <a href="#" class="text-decoration-none text-color-dark ml-2">Inbox</a> <span class="badge badge-success badge-sm badge-pill float-sm-right text-uppercase px-2 py-1 mr-1">15</span></li>
									<hr>
									<li><i class="far fa-envelope"></i> <a href="#" class="text-decoration-none text-color-dark ml-2">Inbox</a></li>
									<li><i class="far fa-envelope"></i> <a href="#" class="text-decoration-none text-color-dark ml-2">Inbox</a></li>
								</ul>
						</div>
						<div class="col-md-6">

							<div class="heading heading-border heading-middle-border">
								<h3 class="text-4"><strong class="font-weight-bold text-1 px-3 text-light py-2 bg-secondary">Preffered Matches (45)</strong></h3>
							</div>

							<div class="row pb-1">
								
								<div class="col-lg-12">

									<article class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
										<div class="row pb-1">
											<div class="col-sm-2">
												<a href="#">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt87wNFrdAc4bDkUqxaWBozSuL-gnX3yECYo-8Gz_lpsSLVBW_" class="img-fluid border-radius-0" alt="Profile 1">
												</a>
											</div>
											<div class="col-sm-10 pl-sm-0">
												<div class="thumb-info-caption-text">
													<h4 class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0 mt-1">
														<a href="#" class="text-decoration-none text-color-dark">Ann Sophia Jose</a> - <span class="text-primary">ID : DF17852</span>
													</h4>
													<div class="d-inline-block text-default text-2 float-none">
														<a href="#" class="text-decoration-none text-color-default">5.5, 165cm, Hindu, Brahmin, Tamil, Medical & Health Care, Palai</a>
													</div>
													
												</div>
											</div>
										</div>
									</article>

									<article class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
										<div class="row pb-1">
											<div class="col-sm-2">
												<a href="#">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt87wNFrdAc4bDkUqxaWBozSuL-gnX3yECYo-8Gz_lpsSLVBW_" class="img-fluid border-radius-0" alt="Profile 1">
												</a>
											</div>
											<div class="col-sm-10 pl-sm-0">
												<div class="thumb-info-caption-text">
													<h4 class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0 mt-1">
														<a href="#" class="text-decoration-none text-color-dark">Ann Sophia Jose</a> - <span class="text-primary">ID : DF17852</span>
													</h4>
													<div class="d-inline-block text-default text-2 float-none">
														<a href="#" class="text-decoration-none text-color-default">5.5, 165cm, Hindu, Brahmin, Tamil, Medical & Health Care, Palai</a>
													</div>
													
												</div>
											</div>
										</div>
									</article>

									<article class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
										<div class="row pb-1">
											<div class="col-sm-2">
												<a href="#">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt87wNFrdAc4bDkUqxaWBozSuL-gnX3yECYo-8Gz_lpsSLVBW_" class="img-fluid border-radius-0" alt="Profile 1">
												</a>
											</div>
											<div class="col-sm-10 pl-sm-0">
												<div class="thumb-info-caption-text">
													<h4 class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0 mt-1">
														<a href="#" class="text-decoration-none text-color-dark">Ann Sophia Jose</a> - <span class="text-primary">ID : DF17852</span>
													</h4>
													<div class="d-inline-block text-default text-2 float-none">
														<a href="#" class="text-decoration-none text-color-default">5.5, 165cm, Hindu, Brahmin, Tamil, Medical & Health Care, Palai</a>
													</div>
													
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>
							<div class="heading heading-border heading-middle-border">
								<h3 class="text-4"><strong class="font-weight-bold text-1 px-3 text-light py-2 bg-tertiary">New Matches</strong></h3>
							</div>

							<div class="row pb-1">

								<div class="col-lg-12">

								<article class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
										<div class="row pb-1">
											<div class="col-sm-2">
												<a href="#">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt87wNFrdAc4bDkUqxaWBozSuL-gnX3yECYo-8Gz_lpsSLVBW_" class="img-fluid border-radius-0" alt="Profile 1">
												</a>
											</div>
											<div class="col-sm-10 pl-sm-0">
												<div class="thumb-info-caption-text">
													<h4 class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0 mt-1">
														<a href="#" class="text-decoration-none text-color-dark">Ann Sophia Jose</a> - <span class="text-primary">ID : DF17852</span>
													</h4>
													<div class="d-inline-block text-default text-2 float-none">
														<a href="#" class="text-decoration-none text-color-default">5.5, 165cm, Hindu, Brahmin, Tamil, Medical & Health Care, Palai</a>
													</div>
													
												</div>
											</div>
										</div>
									</article>

									<article class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
										<div class="row pb-1">
											<div class="col-sm-2">
												<a href="#">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt87wNFrdAc4bDkUqxaWBozSuL-gnX3yECYo-8Gz_lpsSLVBW_" class="img-fluid border-radius-0" alt="Profile 1">
												</a>
											</div>
											<div class="col-sm-10 pl-sm-0">
												<div class="thumb-info-caption-text">
													<h4 class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0 mt-1">
														<a href="#" class="text-decoration-none text-color-dark">Ann Sophia Jose</a> - <span class="text-primary">ID : DF17852</span>
													</h4>
													<div class="d-inline-block text-default text-2 float-none">
														<a href="#" class="text-decoration-none text-color-default">5.5, 165cm, Hindu, Brahmin, Tamil, Medical & Health Care, Palai</a>
													</div>
													
												</div>
											</div>
										</div>
									</article>

									<article class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
										<div class="row pb-1">
											<div class="col-sm-2">
												<a href="#">
													<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt87wNFrdAc4bDkUqxaWBozSuL-gnX3yECYo-8Gz_lpsSLVBW_" class="img-fluid border-radius-0" alt="Profile 1">
												</a>
											</div>
											<div class="col-sm-10 pl-sm-0">
												<div class="thumb-info-caption-text">
													<h4 class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0 mt-1">
														<a href="#" class="text-decoration-none text-color-dark">Ann Sophia Jose</a> - <span class="text-primary">ID : DF17852</span>
													</h4>
													<div class="d-inline-block text-default text-2 float-none">
														<a href="#" class="text-decoration-none text-color-default">5.5, 165cm, Hindu, Brahmin, Tamil, Medical & Health Care, Palai</a>
													</div>
													
												</div>
											</div>
										</div>
									</article>
								</div>
							</div>

							<div class="text-center py-3 mb-4">
								<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="d-block">
									<img alt="Porto" class="img-fluid pl-3" src="img/blog/blog-ad-3.jpg" />
								</a>
							</div>

						</div>

						<div class="col-md-3">

							<h3 class="font-weight-bold text-3 pt-1">Account Settings</h3>

							<div class="pb-2">

								<div class="mb-4 pb-2">
									<article class="thumb-info thumb-info-side-image thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
										<div class="row">
											<div class="col">

												<a href="#">
													<img src="img/blog/default/blog-65.jpg" class="img-fluid border-radius-0" alt="Main Reasons To Stop Texting And Driving">
												</a>

												
											</div>
										</div>
									</article>
								</div>
							</div>

						</div>

					</div>
				</div>
				
			</div>

			<footer id="footer">
				<div class="container">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="row py-5 my-4">
						<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
							<h5 class="text-3 mb-3">ABOUT THE BLOG</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper scelerisque.</p>
							<p class="mb-0">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis ptent taciti sociosqu ad litora...</p>
							<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 pl-2"></i></a></p>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
							<h5 class="text-3 mb-3">RECENT POSTS</h5>
							<ul class="list-unstyled mb-0">
								<li class="media mb-3 pb-1">
									<article class="d-flex">
										<a href="#">
											<img class="mr-3 rounded-circle" src="img/office/our-office-4-square.jpg" alt="" style="max-width: 70px;">
										</a>
										<div class="media-body">
											<a href="#">
												<h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
												<p class="text-2 mb-0">12:53 AM Dec 19th</p>
											</a>
										</div>
									</article>
								</li>
								<li class="media">
									<article class="d-flex">
										<a href="#">
											<img class="mr-3 rounded-circle" src="img/office/our-office-5-square.jpg" alt="" style="max-width: 70px;">
										</a>
										<div class="media-body">
											<a href="#">
												<h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
												<p class="text-2 mb-0">12:53 AM Dec 19th</p>
											</a>
										</div>
									</article>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3 mb-5 mb-md-0">
							<h5 class="text-3 mb-3">RECENT COMMENTS</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-3 pb-1">
									<a href="#">
										<p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
										<p class="text-2 mb-0">12:55 AM Dec 19th</p>
									</a>
								</li>
								<li>
									<a href="#">
										<p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ml-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
										<p class="text-2 mb-0">12:55 AM Dec 19th</p>
									</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-2">
							<h5 class="text-3 mb-3">CATEGORIES</h5>
							<p>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Gadgets</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Photography</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Lifestyle</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Fashion</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Recipes</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Travel</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Business</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Architecture</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Reviews</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Sports</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Videos</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Technology</span></a>
								<a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 mr-1 mb-2 text-uppercase">Design</span></a>
							</p>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="index.html" class="logo pr-0 pr-lg-3">
									<img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-5" height="33">
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>© Copyright 2019. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<nav id="sub-menu">
									<ul>
										<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ml-1 text-decoration-none"> FAQ's</a></li>
										<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ml-1 text-decoration-none"> Sitemap</a></li>
										<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ml-1 text-decoration-none"> Contact Us</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>
		<script src="vendor/instafeed/instafeed.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<!-- Examples -->
		<script src="js/examples/examples.instafeed.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>