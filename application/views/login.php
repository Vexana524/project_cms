<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Spica Admin</title>
  <!-- base:css -->
  <link rel="stylesheet" href=<?= site_url('assets/spica/')?>vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= site_url('assets/spica/')?>vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= site_url('assets/spica/')?>css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= site_url('assets/spica/')?>images/favicon.png" />
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="<?= site_url('assets/spica/')?>images/logo.svg" alt="CMS">
              </div>
              <h4>Hello! Welcome to CMS!</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" action="<?= base_url('auth/login')?>" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" placeholder="Username" name="username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="sumbit">SIGN IN</button>
                </div>
                <div class="mt-3" id="ngilang">
	                <?= $this->session->flashdata('alert') ?>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?= site_url('assets/spica/')?>vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= site_url('assets/spica/')?>js/off-canvas.js"></script>
  <script src="<?= site_url('assets/spica/')?>js/hoverable-collapse.js"></script>
  <script src="<?= site_url('assets/spica/')?>js/template.js"></script>
  <!-- endinject -->
  <script>
			$('#ngilang').delay('slow').delay(80).slideUp(600);

		</script>
		
</body>

</html>
