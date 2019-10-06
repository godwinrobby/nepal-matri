<?php require_once ('include/functions.php'); ?>
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Home</title>	

		<meta name="description" content="Home">
		<meta name="author" content="">

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

			<?php include('include/header.php'); ?>

			<div role="main" class="main pt-3 mt-3">
				<div class="container">
					
					<div class="row pb-1 pt-2">
						<div class="col-md-12">

							<div class="heading heading-border heading-middle-border">
								<h3 class="text-4"><strong class="font-weight-bold text-1 px-3">My Account</strong></h3>
							</div>

							<div class="row pb-1">
								
								<div class="col-lg-12">
                                    <div class="col">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="tabs tabs-vertical tabs-left tabs-navigation">
                                                <ul class="nav nav-tabs col-sm-3">
                                                    <li class="nav-item active">
                                                        <a class="nav-link active" href="#tabsNavigation1" data-toggle="tab"><i class="fas fa-user"></i> Basic Information</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#tabsNavigation2" data-toggle="tab"><i class="fas fa-file"></i> Education &amp; Carrer</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#tabsNavigation3" data-toggle="tab"><i class="fab fa-google-plus-g"></i> Phyiscal</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#tabsNavigation4" data-toggle="tab"><i class="fas fa-adjust"></i> Family</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#tabsNavigation5" data-toggle="tab"><i class="fas fa-film"></i> Hobbies</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#tabsNavigation6" data-toggle="tab"><i class="fas fa-user"></i> Partner Information</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="tab-pane tab-pane-navigation active" id="tabsNavigation1">
                                                <h5>Basic Information</h5>
                                                <div class="card-body">
                                                <form class="form-horizontal form-bordered" method="get">
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Default</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="inputDefault">
                                                        </div>
                                                    </div>
                                
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputDisabled">Disabled</label>
                                                        <div class="col-lg-9">
                                                            <input class="form-control" id="inputDisabled" type="text" placeholder="Disabled input here..." disabled="">
                                                        </div>
                                                    </div>
                                
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputReadOnly">Read-Only Input</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" value="Read-Only Input" id="inputReadOnly" class="form-control" readonly="readonly">
                                                        </div>
                                                    </div>
                                
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputHelpText">Help text</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" id="inputHelpText">
                                                            <span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                                                        </div>
                                                    </div>
                                
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputRounded">Rounded Input</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control input-rounded" id="inputRounded">
                                                        </div>
                                                    </div>
                                
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputFocus">Input focus</label>
                                                        <div class="col-lg-9">
                                                            <input class="form-control" id="inputFocus" type="text" value="This is focused...">
                                                        </div>
                                                    </div>
                                
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputPlaceholder">Placeholder</label>
                                                        <div class="col-lg-9">
                                                            <input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder">
                                                        </div>
                                                    </div>
                                
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 control-label text-lg-right pt-2" for="inputPassword">Password</label>
                                                        <div class="col-lg-9">
                                                            <input type="password" class="form-control" placeholder="" id="inputPassword">
                                                        </div>
                                                    </div>
                                
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 control-label text-lg-right pt-1">Static control</label>
                                                        <div class="col-lg-9">
                                                            <p class="form-control-static">email@example.com</p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            </div>
                                            <div class="tab-pane tab-pane-navigation" id="tabsNavigation2">
                                                <h4>HTML5 / CSS3 / JS</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                                            </div>
                                            <div class="tab-pane tab-pane-navigation" id="tabsNavigation3">
                                                <h4>500+ Google Fonts</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                                                <img class="float-left" width="200" src="img/device.png" alt="">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                                            </div>
                                            <div class="tab-pane tab-pane-navigation" id="tabsNavigation4">
                                                <h4>Colors</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                                            </div>
                                            <div class="tab-pane tab-pane-navigation" id="tabsNavigation5">
                                                <h4>Sliders</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
                                            </div>
                                            <div class="tab-pane tab-pane-navigation" id="tabsNavigation6">
                                                <h4>Icons</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc <a href="#">vehicula</a> lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet. In eu justo a felis faucibus ornare vel id metus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In eu libero ligula. Fusce eget metus lorem, ac viverra leo. Nullam convallis, arcu vel pellentesque sodales, nisi est varius diam, ac ultrices sem ante quis sem. Proin ultricies volutpat sapien, nec scelerisque ligula mollis lobortis.</p>
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
			<?php include('include/footer.php'); ?>
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