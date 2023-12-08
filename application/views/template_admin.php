<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Spica Admin</title>
	<!-- base:css -->
	<link rel="stylesheet" href="<?= site_url('assets/spica/')?>vendors/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?= site_url('assets/spica/')?>vendors/css/vendor.bundle.base.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="<?= site_url('assets/spica/')?>css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="<?= site_url('assets/spica/')?>images/favicon.png" />
	<script src="https://cdn.tiny.cloud/1/y2dw3ym7myodc0uechqiw8z1wt205ya1nrq0f82t57n60msf/tinymce/6/tinymce.min.js"
		referrerpolicy="origin"></script>

</head>

<body>

	<div class="container-scroller d-flex">
		<!-- partial:./partials/_sidebar.html -->
		<nav class="sidebar sidebar-offcanvas" id="sidebar">
			<ul class="nav">
				<li class="nav-item sidebar-category">
					<p>Navigation</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('admin/home') ?>">
						<i class=" mdi mdi-tooltip menu-icon"></i>
						<span class="menu-title">Dashboard</span>
					</a>
				</li>
				<li class="nav-item sidebar-category">
					<p>Components</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('admin/caraousel') ?>">
						<i class="mdi mdi-amazon-drive  menu-icon"></i>
						<span class="menu-title">Caraousel</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('admin/kategori') ?>">
						<i class="mdi mdi-view-headline menu-icon"></i>
						<span class="menu-title">Kategori Konten</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('admin/konten')?>">
						<i class="mdi mdi-chart-pie menu-icon"></i>
						<span class="menu-title">Konten</span>
					</a>
				</li>
				<?php if($this->session->userdata('level')=='Admin'){?>
				<li class="nav-item sidebar-category">
					<p>Pages</p>
					<span></span>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('admin/user') ?>">
						<i class="mdi mdi-account menu-icon"></i>
						<span class="menu-title">User</span>
					</a>
				</li>
				<?php } ?>
				<?php if($this->session->userdata('level')=='Admin'){?>
				<li class="nav-item">
					<a class="nav-link" href="<?= site_url('admin/konfigurasi') ?>">
						<i class="mdi mdi-airballoon  menu-icon"></i>
						<span class="menu-title">Konfigurasi</span>
					</a>
				</li>
				<?php } ?>
			</ul>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:./partials/_navbar.html -->
			<nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
				<div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
					<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
						<span class="mdi mdi-menu"></span>
					</button>
					<div class="navbar-brand-wrapper">
						<a class="navbar-brand brand-logo" href="<?= base_url(); ?>"><img
								src="" alt="CMS" /></a>
						<a class="navbar-brand brand-logo-mini" href="index.html"><img src="" alt="CMS" /></a>
					</div>
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item">
						</li>
					</ul>
					<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
						data-toggle="offcanvas">
						<span class="mdi mdi-menu"></span>
					</button>
				</div>
				<div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
					<ul class="navbar-nav navbar-nav-right">
						<li class="nav-item nav-profile dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
								<img src="<?= site_url('assets/spica/')?>images/faces/foto1.jpeg" alt="profile" />
								<span class="nav-profile-name"><?= $this->session->userdata('nama'); ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
								<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
									<i class="mdi mdi-logout text-primary"></i>
									Logout
								</a>
							</div>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link icon-link">
								
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<!-- Content wrapper -->
			<div class="content-wrapper">
				<!-- content -->
				<div class="container-xxl flex-grow-1 container-p-y">
					<?= $contents; ?>
				</div>
				<!-- partial -->
				<div class="main-panel">
					<!-- partial:./partials/_footer.html -->
					<footer class="footer mt-5">
						<div class="card">
							<div class="card-body">
								<div class="d-sm-flex justify-content-center justify-content-sm-between">
									<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © PPLG
										SKANDAKRA</span>
									<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">PENGEMBANGAN PERANGKAT LUNAK
										DAN GIM</span>
								</div>
							</div>
						</div>
					</footer>
					<!-- partial -->
				</div>
				<!-- main-panel ends -->
			</div>
			<!-- page-body-wrapper ends -->
		</div>
		<!-- container-scroller -->

		<!-- base:js -->
		<script src="<?= site_url('assets/spica/')?>vendors/js/vendor.bundle.base.js"></script>
		<!-- endinject -->
		<!-- Plugin js for this page-->
		<script src="<?= site_url('assets/spica/')?>vendors/chart.js/Chart.min.js"></script>
		<!-- End plugin js for this page-->
		<!-- inject:js -->
		<script src="<?= site_url('assets/spica/')?>js/off-canvas.js"></script>
		<script src="<?= site_url('assets/spica/')?>js/hoverable-collapse.js"></script>
		<script src="<?= site_url('assets/spica/')?>js/template.js"></script>
		<!-- endinject -->
		<!-- plugin js for this page -->
		<!-- End plugin js for this page -->
		<!-- Custom js for this page-->
		<script src="<?= site_url('assets/spica/')?>js/dashboard.js"></script>
		<!-- End custom js for this page-->
		<script>
$('#ngilang').delay('slow').delay(80).slideUp(600);

		</script>
		
<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
	});
</script>
</body>

</html>



