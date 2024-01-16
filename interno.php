<?php 
$password = "gonza65";
if (isset($_POST['password'])){
	$passed_password = $_POST['password'];
}else{
	$passed_password = '';
}
if ($passed_password != $password) { 
?>
<h2>Logueate</h2>
<form name="form" method="post" action="">
	<input type="password" name="password"><br>
	<input type="submit" value="Login"></form>
<?php 
}else{
?>
<html lang="en">

<head>
	<title>SIS Sistema de Información Simplificada: acceso simple a la información sobre el seguro de tu auto</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords"
		content="SISTEMA DE INFORMACION SIMPLIFICADA, acceso simple a la información sobre el seguro de tu auto" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.min.css"
		integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="css/style2.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<!--web font-->
	<link
		href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
		rel="stylesheet">
	<!--//web font-->


</head>

<body>
	<footer class="py-5">
		<div class="container">


			<img src="images/logosisbco.png" width="300" />

		</div>





	</footer>








	<section class="welcome py-5" id="welcome">
		<div class="container">

			<div class="row">
				<div class="col-lg-7 welcome_left">

					<h4 class="mb-3">SISTEMA DE INFORMACION SIMPLIFICADA</h4>
					<p>SUBIR ARCHIVOS AL SERVIDOR</p>




					<div class="row about-grids">

					</div>

				</div>
				<div class="col-lg-5 welcome_right mt-lg-0 mt-5">

					<div class="row grid3">
						<div class="col-md-3 col-sm-2 col-3 icon color1 text-center">
							<span class="fas fa-car" aria-hidden="true"></span>
						</div>
						<div class="col-md-9 col-sm-10 col-9 grid_info">
							<a href="carga">
								<h3 class="mb-2">Comprobante de Circulacion</h3>
								<p>Acepta solo archivos png</p>
							</a>
						</div>
					</div>
					<br>
					<div class="row grid4">
						<div class="col-md-3 col-sm-2 col-3 icon color1 text-center">
							<span class="fas fa-star" aria-hidden="true"></span>
						</div>
						<div class="col-md-9 col-sm-10 col-9 grid_info">
							<a href="carga2">
								<h3 class="mb-2">Certificado Mercosur</h3>
								<p>Acepta solo archivos pdf</p>
							</a>
						</div>
					</div>
					<br>

				</div>
			</div>
		</div>
	</section>
	<!-- //about -->




	< <!-- footer -->
		<footer class="py-5">
			<div class="container">

				<p><img src="images/logobco2.png" width="500" alt="" /></p>

			</div>
		</footer>
		<!-- footer -->

		<!-- Vertically centered Modal -->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
			aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title text-capitalize text-center" id="exampleModalLongTitle"><span
								class="fas fa-globe"></span> Web <span class="logo">Booster</span></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<img src="images/banner1.jpg" class="img-fluid mb-3" alt="Modal Image" />
						Vivamus eget est in odio tempor interdum. Mauris maximus in fermentum arcu, ac finibus ante. Sed
						mattis risus at ipsum at elementum, ut auctor turpis cursus. Sed sed odio pharetra, aliquet
						velit cursus, vehicula enim. Mauris porta aliquet sed magnain, eget laoreet ligula. mollit anim
						id est laborum.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<!-- //Vertically centered Modal -->

		<!-- js -->

		<script src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<!-- <script type="text/javascript" src="js/bootstrap.js"></script> Necessary-JavaScript-File-For-Bootstrap  -->
	<!-- //js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.bundle.min.js"
		integrity="sha512-iceXjjbmB2rwoX93Ka6HAHP+B76IY1z0o3h+N1PeDtRSsyeetU3/0QKJqGyPJcX63zysNehggFwMC/bi7dvMig=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- banner-type-text -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.7/typed.min.js"
		integrity="sha512-DzOrQA5ErCekadrPyIN1RuctiIKy+/sNpiz9cUxA1H0A1vHpdEjsZ53NfpbbH8uEs7h9kBYbqqAWyPkni8tAGw=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"
		integrity="sha512-PtVOPMHXzd2qpTrm80wlNFJ/sMALMA8Ub0Rifm6YUVzOvEdMhtmHPRNbPjRq9sUOZ8G96Iw0VMOSmK8nCQT26w=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- <script src="js/counterup.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"
		integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/jquery.flexslider-min.js"
		integrity="sha512-FdlwXGnnYq1bxxo+wionfAo3XIGB+6u0CI7V2qrq3/U1CQmY83qwqORVG0Tznbq6V8DCWModf/WhMn5zVLb/fA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.0/SmoothScroll.min.js"
		integrity="sha512-srUREbxyKz08UAtIMIy/yoihZeUN5EhzjpkWZZQWnI3pkK+s040r3Ih3xBolfu45cJ2VOHg0XOaegJGJGiPB/w=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<!-- <script type="text/javascript" src="js/easing.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.2/jquery.easing.min.js"
		integrity="sha512-p3gjjElufK2kdFbJSH/9ApGrtzYCYb8efucTn+yCx0KiOYAuaXdD/1WS34QUzExwUFkwZpK3lU27pPNS86r+sQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script>
			$(function () {

				$("#typed").typed({
					// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
					stringsElement: $('#typed-strings'),
					typeSpeed: 30,
					backDelay: 500,
					loop: false,
					contentType: 'html', // or text
					// defaults to false for infinite loop
					loopCount: false,
					callback: function () {
						foo();
					},
					resetCallback: function () {
						newTyped();
					}
				});

				$(".reset").click(function () {
					$("#typed").typed('reset');
				});

			});

			function newTyped() {
				/* A new typed object */ }

			function foo() {
				console.log("Callback");
			}
		</script>
		<!-- //banner-type-text -->

		
		<script>
			jQuery(document).ready(function ($) {
				$('.counter').counterUp({
					delay: 10,
					time: 1000
				});
			});
		</script>
		<!-- //Stats-Number-Scroller-Animation-JavaScript -->

		<!-- flexslider -->
		<!-- for testimonials -->
		
		<!--Start-slider-script-->
		<script type="text/javascript">
			$(window).load(function () {
				$('.flexslider').flexslider({
					animation: "slide",
					start: function (slider) {
						$('body').removeClass('loading');
					}
				});
			});
		</script>
		<!--End-slider-script-->
		
		<script type="text/javascript">
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
				});
			});
		</script>
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function () {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/

				$().UItoTop({
					easingType: 'easeOutQuart'
				});

			});
		</script>
		<!-- //here ends scrolling icon -->
		<!-- start-smoth-scrolling -->

</body>
<?php 
} 
?>