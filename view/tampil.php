<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords"
		content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="gtco-loader"></div>

	<div id="page">



		<!-- <div class="page-inner"> -->
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<?php 
include "../model/database.php";
$db = new database();
?>
				<div class="row">
					<div class="col-sm-4 col-xs-12">
						<div id="gtco-logo"><a href="input.php">Travel <em>.</em></a></div>
					</div>
					<div class="col-xs-8 text-right menu-1">
						<ul>
							<li><a href="destination.html">Destination</a></li>
							<li class="has-dropdown">
								<a href="#">Travel</a>
								<ul class="dropdown">
									<li><a href="#">Europe</a></li>
									<li><a href="#">Asia</a></li>
									<li><a href="#">America</a></li>
									<li><a href="#">Canada</a></li>
								</ul>
							</li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Contact</a></li>
							<li class="has-dropdown">
								<a href="#">Setting</a>
								<ul class="dropdown">
									<li><a href="#">Profile</a></li>
									<li><a href="../view/logout.php">Logout</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>

		<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner"
			style="background-image: url(images/img_bg_2.jpg)">

			<br>
			<br>
			<br>
			<br>
			<br>
			<div class="container ">
				<table class="table">
					<tr class="table-primary">
						<th>No</th>
						<th>Nama</th>
						<th>Asal</th>
						<th>Tujuan</th>
						<th>Kelas Kabin</th>
						<th>Tanggal</th>

					</tr>
					<?php $i=1; foreach($db->tampil_data() as $a){?>
					<tr class="table-light">
						<td><?php echo $i ?></td>
						<td><?php echo $a['nama'] ?></td>
						<td><?php echo $a['asal'] ?></td>
						<td><?php echo $a['tujuan'] ?></td>
						<td><?php echo $a['kelas'] ?></td>
						<td><?php echo $a['tanggal'] ?></td>

						<?php $i++; } ?>

				</table>

			</div>
		</header>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>

		<!-- Stellar Parallax -->
		<script src="js/jquery.stellar.min.js"></script>

		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/magnific-popup-options.js"></script>

		<!-- Datepicker -->
		<script src="js/bootstrap-datepicker.min.js"></script>


		<!-- Main -->
		<script src="js/main.js"></script>

		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
		</script>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>