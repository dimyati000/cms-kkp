<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Kantor Konsultan Pajak dan Hukum</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/logo-kkp-removebg.png">
  <?php include('tema-css.php') ?>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
          <div class="p-4 m-3">
            <img src="<?php echo base_url() ?>assets/img/logo-kkp-removebg.png" alt="logo" style="width: 40%;" class="mover mb-4 mt-2">
            <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Kantor Konsultan Pajak dan Hukum</span></h4>
            <p class="text-muted">Gunakan Email dan Password Anda untuk masuk ke dalam sistem!</p>
            <form method="POST" action="#" class="needs-validation" novalidate="">
              <div class="form-group">
                <label for="email">Username/Email</label>
                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                <div class="invalid-feedback">
                  Please fill in your username/email
                </div>
              </div>

              <div class="form-group">
                <div class="d-block">
                  <label for="password" class="control-label">Password</label>
                </div>
                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                <div class="invalid-feedback">
                  please fill in your password
                </div>
              </div>

              <div class="form-group text-right">
                <a href="auth-forgot-password.html" class="float-left mt-3">
                  Lupa Kata Sandi?
                </a>
                <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                  Login
                </button>
              </div>

              <div class="mt-4 text-center">
                Belum Punya Akun? <a href="auth-register.html">Register</a>
              </div>
            </form>

            <div class="text-center mt-5 text-small">
              Copyright &copy; Kantor Konsultasi Pajak dan Hukum Eko & Rekan.
              <p> Made with &#128155; by Eko Budi Setiawan & Rekan</p>
              <div class="mt-1">
                <a href="#">Privacy Policy</a>
                <div class="bullet"></div>
                <a href="#">Terms of Service</a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div style="display: flex; width: 1000%;  padding: 2px; background-color: rgba(47, 70, 95, 0.4);" class="col-lg-8 col-12 order-lg-2 order-1 position-relative overlay-gradient-bottom" data-background="<?php echo base_url(); ?>assets/img/monumen-jayandaru--.jpg"> -->
        <div class="col-lg-8 col-12 order-lg-2 order-1  background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo base_url(); ?>assets/img/monumen-jayandaru--.jpg">
          <div class="absolute-bottom-left index-2">
            <!-- <div class="text-light p-5 pb-2">
              <div class="mb-5 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                <h5 class="font-weight-normal text-muted-transparent">Bali, Indonesia</h5>
              </div>
              Photo by <a class="text-light bb" target="_blank" href="<?php echo base_url(); ?>assets/img/monumen-jayandaru.jpg">Justin Kauffman</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
            </div> -->
          </div>
        </div>
      </div>
    </section>
  </div>

  <?php include('tema-js.php') ?>
</body>
</html>
