<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?= base_url('src/assets/images/sips-icon.png')?>">
  <title>Login Pendataan Relawan</title>
  <!-- Fonts CSS -->
  <link
    href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- Icons CSS -->
  <link href="<?= base_url('assets/'); ?>dist/css/tabler.min.css" rel="stylesheet" />
  <link href="<?= base_url('assets/'); ?>dist/css/demo.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?= base_url()?>assets/dist/fontawesome/css/regular.css" />
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/feather.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/app-light.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="<?= base_url()?>assets/dist/css/style.css">
</head>

<body class="vertical light">
  <div class="wrapper">
    <div class="d-flex" style="height:100vh;">
      <div class="col-lg-5 d-flex flex-column justify-content-between p-3">
        <div class="d-flex align-items-center">
          <img class="mx-1" src="<?= base_url()?>src/assets/images/semarang.png" alt="" height="50">
          <img class="mx-1" src="<?= base_url()?>src/assets/images/dishub.png" alt="" height="50">
          <!-- <h3>Sistem Informasi Perparkiran Kota Semarang</h3> -->
        </div>
        <div class="w-50 mx-auto">
          <img width="160" src="<?= base_url() ?>src/assets/images/logo.png" alt="">
          <form class="mx-auto" method="POST" action="<?=base_url('login')?>">
            <h2>Sign In</h2>
            <div class="form-group mb-3">
              <label for="inputEmail">Username</label>
              <div class="d-flex align-items-center">
                <input type="text" id="inputEmail" name="username" class="form-control form-control-lg rounded-15"
                placeholder="Masukkan Username Anda" required="" autofocus="" style="padding-left:35px; font-size: 14px;">
                <i class="form-icon fe fe-user"></i>
              </div>
              <?= $this->session->flashdata('msg')?>
            </div>
            <div class="form-group mb-3">
              <label for="inputPassword">Password</label>
              <div class="d-flex align-items-center" style="position: relative;">
                <input type="password" id="inputPassword" name="password" class="form-control form-control-lg rounded-15"
                  placeholder="Password" required="" style="padding-left:35px; font-size: 14px;">
                <i class="form-icon fe fe-key"></i>
                <a role="button" class="password-show" data-show="0" style="right:3%;">
                  <i class="fe fe-eye-off" aria-hidden="true"></i>
                </a>
              </div>
              <?= $this->session->flashdata('msg_pass')?>
            </div>
            <!-- <div class="form-group d-flex">
              <input type="checkbox" class="custom_form_check" name="remember_me">
              <label for="checkbox">Ingat Saya</label>
            </div> -->
            <button class="btn btn-lg btn-primary btn-block rounded-2" type="submit">Masuk</button>
          </form>
          <div class="mt-4"><?= $this->session->flashdata('msg_login') ?></div>
        </div> <!-- .card -->
        <div class=""><strong><?php echo (int)date('Y'); ?> </strong><span>© All Right reserved.</span></div>
      </div>
      <div class="col-lg-7 d-none d-lg-flex rounded-left"
        style="background-image: url(<?= base_url()?>assets/dist/img/background/login-bg.jpg);height: 100vh; background-size: cover; background-position: bottom;">
      </div>
    </div>
  </div> <!-- .wrapper -->
  <script src="<?= base_url()?>assets/dist/js/jquery.min.js"></script>
  <script>
    $('.password-show').on('click', function () {
      if ($(this).attr('data-show') == 1) {
        $(this).attr('data-show', '0')
        $(this).siblings('input:first').attr("type", 'password')
        $(this).children('i').attr('class', 'fe fe-eye-off')
      } else {
        $(this).attr('data-show', '1')
        $(this).siblings('input:first').attr("type", 'text')
        $(this).children('i').attr('class', 'fe fe-eye')
      }
    })
  </script>
</body>

</html>