<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title><?= $judul; ?></title>

	<!-- Favicon -->
	<link rel="icon" href="<?=base_url('assets/front/');?>img/core-img/favicon.ico">

	<!-- Core Stylesheet -->
	<link href="<?=base_url('assets/front/');?>style.css" rel="stylesheet">

	<!-- Responsive CSS -->
	<link href="<?=base_url('assets/front/');?>css/responsive/responsive.css" rel="stylesheet">

	<!-- Css Tambahan -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
		integrity="sha384-lKuwUdPpj3BGAeQY8RkvJbMtrVYYGS7FmzF/HsrQbFddCGIPVPAK7r2Jz1z9o" crossorigin="anonymous">

</head>

<body>
	<!-- ***** Header Area Start ***** -->
	<header class="header_area" id="header">
		<div class="container h-100">
			<div class="row h-100">
				<div class="col-12 h-100">
					<nav class="h-100 navbar navbar-expand-lg align-items-center">
						<a class="navbar-brand" href="index.html"><?= $konfig->judul_website;?></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav"
							aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span
								class="fa fa-bars"></span></button>
						<div class="collapse navbar-collapse" id="caviarNav">
							<ul class="navbar-nav ml-auto" id="caviarMenu">
								<li class="nav-item active">
									<a class="nav-link" href="<?= base_url('home') ?>">Home <span
											class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<?php foreach ($kategori as $kate) { ?>
										<a class="dropdown-item"
											href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"><?= $kate['nama_kategori']?></a>
										<?php } ?>

									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#about">Materi</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('auth') ?>" type="button" class="nav-link">Login</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<!-- ****** Welcome Area Start ****** -->
	<section class="caviar-hero-area" id="home">
		<!-- Welcome Social Info -->
		<div class="welcome-social-info">
			<a href="<?= $konfig->facebook;?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="<?= $konfig->instagram;?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</div>
		<!-- Welcome Slides -->
		<div class="caviar-hero-slides owl-carousel">
			<!-- Single Slides -->

			<?php foreach ($caraousel as $aa) { ?>
			<div class="single-hero-slides bg-img"
				style="background-image: url(<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>);">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-11 col-md-6 col-lg-4">
							<div class="hero-content">
								<h2><?= $judul; ?></h2>
							</div>
						</div>
					</div>
				</div>
				<!-- Slider Nav -->
				<div class="slides-nav">
				</div>
			</div>
			<?php } ?>
		</div>
		</div>
	</section>
	<!-- ****** Welcome Area End ****** -->

	<!-- ****** About Us Area Start ****** -->
	<section class="caviar-about-us-area section-padding-150" id="about">
		<div class="container">
			<!-- About Us Single Area -->
			<?php foreach ($konten as $uu) { ?>
			<div class="card p-3 m-2">
				<div class="row align-items-center">
					<div class="col-12 col-md-6	">
						<div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
							<img src="<?= base_url('assets/upload/konten/'.$uu['foto']) ?> ">
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-5 ml-md-auto">
						<div class="section-heading">
							<h2><?= $uu['judul'] ?></h2>
						</div>
						<div class="about-us-content">
							<span><?= $uu['nama_kategori'] ?></span>
							<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="btn btn-primary mt-4"
								role="button" data-bs-toggle="button">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
		</div>
	</section>
	<!-- ****** About Us Area End ****** -->
	<!-- </footer> -->
	<footer class="caviar-footer-area">
		<a href="#" class="navbar-brand"><?= $konfig->judul_website;?></a>
		<div class="container py-5">
			<div class="row g-5">
				<div class="col-lg-3 col-md-6">
					<h3 class="text-light mb-3"> About Me</h3>
					<p class="text-light"><?php echo $konfig->profil_website ?></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 class="text-light mb-4">Contact Us</h3>
					<div class="footer-item">
						<div class="col-lg-12">
							<a class="text-light fa fa-home"
								href="https://maps.app.goo.gl/jTVRcpahBz4Fpwm87 <?= $konfig->alamat;?>">Alamat
							</a>
							<a class="text-light fa fa-phone"
								href="<?= $konfig->no_wa;?>">Whatsapp
							</a>
							<a class="text-light fa fa-envelope" 
								href="mailto:<?= $konfig->email;?>">Email
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 class="text-light mb-4">Materi</h3>
					<?php foreach ($kategori as $kate) { ?>
					<a class="btn btn-link text-light"
						href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"><?= $kate['nama_kategori']?></a>
					<?php } ?>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3 class="text-light">Sosial Media</h3>
					<div class="col-lg-12">
						<a href="<?= $konfig->facebook;?>"><i class="fa fa-facebook text-light	" aria-hidden="true">
								Facebook</i></a>
						<a href="<?= $konfig->instagram;?>"><i class="fa fa-instagram text-light	" aria-hidden="true">
								Instagram</i></a>
					</div>
					<!-- </p> -->
				</div>
			</div>
		</div>
		</script> Have A Nice Day | SKANDAKRA <i class="fa fa-heart-o" aria-hidden="true"></i>
	</footer>
	<!-- ****** Footer Area End ****** -->
	<!-- Jquery-2.2.4 js -->
	<script src="<?=base_url('assets/front/');?>js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="<?=base_url('assets/front/');?>js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap-4 js -->
	<script src="<?=base_url('assets/front/');?>js/bootstrap/bootstrap.min.js"></script>
	<!-- All Plugins js -->
	<script src="<?=base_url('assets/front/');?>js/others/plugins.js"></script>
	<!-- Active JS -->
	<script src="<?=base_url('assets/front/');?>js/active.js"></script>
</body>
