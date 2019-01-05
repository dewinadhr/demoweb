<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form Pendaftaran</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans:300,400,600,700,400italic,400italic,600italic">
</head>
<body class="hold-transition register-page" style="background-color: #ffa068;">
<div class="register-box">
  <div class="register-logo">
    <h3 href="../../index2.html"><b>Ayo Daftar Menjadi Relawan^-^</b></h3>
  </div>

  <div class="register-box-body">
    

    <form action="<?php echo base_url()?>index.php/auth/reg_action" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
        <!-- <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="int" name="nik" class="form-control" placeholder="NIK">
       <!--  <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
       <!--  <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
       <!--  <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="repassword" class="form-control" placeholder="Retype password">
       <!--  <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="textarea" name="asal" class="form-control" placeholder="Alamat Asal">
       <!--  <span class="glyphicon glyphicon-user form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir">
        <!-- <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
      <!--   <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="textarea" name="alamat" class="form-control" placeholder="Alamat Sekarang">
       <!--  <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="keahlian" class="form-control" placeholder="Keahlian">
      <!--   <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
      </div>
      <div class="form-group has-feedback">
        <input type="textarea" name="desk_keahlian" class="form-control" placeholder="Deskripsi Keahlian">
       <!--  <span class="glyphicon glyphicon-log-in form-control-feedback"></span> -->
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
<!--

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>
-->

    <a href="<?php echo base_url() ?>index.php/auth" class="text-center">Sudah Memiliki Akun</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
