<!DOCTYPE html>
<html>
		<head>
			<title>Hudra Kft.</title>
			<meta name="description" content="Trucking is transportation and Logistics website template">
			<meta name="author" content="pixel-industry">
			<meta name="keywords" content="transportation, logistics, transportation template, logistics template, cargo, business">
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<!-- Stylesheets -->
			<link rel="stylesheet" href="css/bootstrap.css"/><!-- bootstrap grid -->
			<link rel='stylesheet' href='owl-carousel/owl.carousel.css'/><!-- Client carousel -->

			<link rel="stylesheet" href="masterslider/style/masterslider.css" /><!-- Master slider css -->
			<link rel="stylesheet" href="masterslider/skins/default/style.css" /><!-- Master slider default skin -->
			<link rel="stylesheet" href="css/magnific-popup.css" /><!-- Lightbox styles -->
			<link rel="stylesheet" href="css/style.css"/><!-- template styles -->
			<link rel="stylesheet" href="css/color-default.css"/><!-- template main color -->
			<link rel="stylesheet" href="css/retina.css"/><!-- retina ready styles -->
			<link rel="stylesheet" href="css/responsive.css"/><!-- responsive styles -->

			<!-- Google Web fonts -->
			<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,800,700,600' rel='stylesheet' type='text/css'>

			<!-- Font icons -->
			<link rel="stylesheet" href="icon-fonts/font-awesome-4.3.0/css/font-awesome.min.css"/><!-- Fontawesome icons css -->
		</head>
	<body>
		<x-sections.header />

			{{ $slot }}

		<x-sections.footer />

		<script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
		<script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
		<script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->  

        <script src="js/jquery.magnific-popup.min.js"></script><!-- used for image lightbox -->
        <script src="js/portfolio.js"></script><!-- for portfolio -->
		<script src="owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
		<script src="masterslider/masterslider.min.js"></script><!-- Master slider main js -->
		<script src="js/jquery.matchHeight-min.js"></script><!-- for columns with background image -->
		<script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
		<script src="js/include.js"></script><!-- custom js functions -->

		<script>
			/* <![CDATA[ */
			jQuery(document).ready(function ($) {
									'use strict';

									function equalHeight() {
															$('.page-content.column-img-bkg *[class*="custom-col-padding"]').each(function () {
																					var maxHeight = $(this).outerHeight();
																					$('.page-content.column-img-bkg *[class*="img-bkg"]').height(maxHeight);
																				});
														};

									$(document).ready(equalHeight);
									$(window).resize(equalHeight);

									// MASTER SLIDER START 
									var slider = new MasterSlider();
									slider.setup('masterslider', {
															width: 1140, // slider standard width
															height: 854, // slider standard height
															space: 0,
															speed: 50,
															layout: "fullwidth",
															centerControls: false,
															loop: true,
															autoplay: true
															// more slider options goes here...
															// check slider options section in documentation for more options.
														});
									// adds Arrows navigation control to the slider.
									slider.control('arrows');

									// CLIENTS CAROUSEL START 
									$('#client-carousel').owlCarousel({
															items: 6,
															loop: true,
															margin: 30,
															responsiveClass: true,
															mouseDrag: true,
															dots: false,
															responsive: {
																					0: {
																											items: 2,
																											nav: true,
																											loop: true,
																											autoplay: true,
																											autoplayTimeout: 3000,
																											autoplayHoverPause: true,
																											responsiveClass: true
																										},
																					600: {
																											items: 3,
																											nav: true,
																											loop: true,
																											autoplay: true,
																											autoplayTimeout: 3000,
																											autoplayHoverPause: true,
																											responsiveClass: true
																										},
																					1000: {
																											items: 6,
																											nav: true,
																											loop: true,
																											autoplay: true,
																											autoplayTimeout: 3000,
																											autoplayHoverPause: true,
																											responsiveClass: true,
																											mouseDrag: true
																										}
																				}
														});

									// TESTIMONIAL CAROUSELS START
									$('#testimonial-carousel').owlCarousel({
															items: 1,
															loop: true,
															margin: 30,
															responsiveClass: true,
															mouseDrag: true,
															dots: false,
															autoheight: true,
															responsive: {
																					0: {
																											items: 1,
																											nav: true,
																											loop: true,
																											autoplay: true,
																											autoplayTimeout: 3000,
																											autoplayHoverPause: true,
																											responsiveClass: true,
																											autoHeight: true
																										},
																					600: {
																											items: 1,
																											nav: true,
																											loop: true,
																											autoplay: true,
																											autoplayTimeout: 3000,
																											autoplayHoverPause: true,
																											responsiveClass: true,
																											autoHeight: true
																										},
																					1000: {
																											items: 1,
																											nav: true,
																											loop: true,
																											autoplay: true,
																											autoplayTimeout: 3000,
																											autoplayHoverPause: true,
																											responsiveClass: true,
																											mouseDrag: true,
																											autoHeight: true
																										}
																				}
														});
								});
			/* ]]> */
		</script>
	</body>
</html>
