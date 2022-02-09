<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('front_files/img/logo.ico') }}" type="image/png">
	<title>Cybersecurity</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{ asset('front_files/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('front_files/vendor/linericon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('front_files/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front_files/vendor/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('front_files/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('front_files/vendor/nice-select/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('front_files/vendor/animate-css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('front_files/vendor/flaticon/flaticon.css') }}">
	<!-- main css -->
	<link rel="stylesheet" href="{{ asset('front_files/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('front_files/css/style.default.css') }}">
	<link rel="stylesheet" href="{{ asset('front_files/js/function.js') }}">
</head>

<body>

	<!--================Header Menu Area =================-->



	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src={{ asset('front_files/"img/.png') }}" alt=""
							style="height: 50px;"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse"
						data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center">
							<li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">Cybersecurity</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="./level_one.html">level one </a></li>
									<li class="nav-item"><a class="nav-link" href="./level_two.html">level two </a>
									</li>
									<li class="nav-item"><a class="nav-link" href="./level_three.html">level three </a>
									</li>


								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
									aria-haspopup="true" aria-expanded="false">GRC </a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="./governance.html">governance </a></li>
									<li class="nav-item"><a class="nav-link" href="./Risk.html">Risk</a>
									</li>
									<li class="nav-item"><a class="nav-link" href="./compliance.html">compliance</a>
									</li>
								</ul>
							</li>

							<li class="nav-item"><a class="nav-link" href="./ksa.html">KSA Cybersecurity </a>
							<li class="nav-item"><a class="nav-link" href="./certificate.html">international Cybersecurity </a>
							<li class="nav-item"><a class="nav-link" href="./certificate.html">certificate </a>
						</ul>
						<div class="dropdown user_name_div">
							<a class="btn  btn-outline-light dropdown-toggle" href="#" role="button"
								id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								User Name

							</a>

							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
								<a class="dropdown-item" href="Profile.html">Account</a>
								<a class="dropdown-item" href="login.html">Logout </a>
							</div>
						</div>

					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->



@yield('content')

	<!--================ Srart Brand Area ===============-->

	<!--================ End Brand Area =================-->


	<!--================Footer Area =================-->






<!-- Footer -->

  <!-- Footer -->



	<!--================End Footer Area =================-->


	<div class="footer-basic">
        <footer>
            <div class="social">
				<a href="#"><i class="icon ion-social-linkedin"></i></a>
				<a href="#"><i class="icon ion-social-twitter"></i></a>

				</div>

            <p class="copyright"><a style="color: aliceblue;" target="_blank" href="https://ksu.edu.sa">copyright : King Saud university</a> © 2022</p>
        </footer>
    </div>





	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->



	<script src="{{ asset('front_files/js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('front_files/js/popper.js') }}"></script>
	<script src="{{ asset('front_files/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('front_files/js/stellar.js') }}"></script>
	<script src="{{ asset('front_files/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('front_files/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('front_files/vendor/isotope/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('front_files/vendor/isotope/isotope-min.js') }}"></script>
	<script src="{{ asset('front_files/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('front_files/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('front_files/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('front_files/vendor/counter-up/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('front_files/js/mail-script.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('front_files/js/gmaps.min.js') }}"></script>
	<script src="{{ asset('front_files/js/theme.js') }}"></script>
	<script src="{{ asset('front_files/js/function.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>
