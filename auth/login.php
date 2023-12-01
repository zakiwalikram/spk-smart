<?php require_once "../_config/config.php";
if (isset($_SESSION['user'])) {
  echo "<script>window.location='" . base_url() . "';</script>";
} else {
?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPK Metode SMART</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>/_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/_assets/dist/css/AdminLTE.min.css">
  </head>

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>SPK</b> Metode SMART </a>
        <img src="../_assets/img/logo.png" width="50%" alt=""></a>
      </div>
      <!-- /.login-logo -->
      <?php
      if (isset($_POST['login'])) {
        $user = trim(mysqli_real_escape_string($con, $_POST['user']));
        $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));
        $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));
        if (mysqli_num_rows($sql_login) > 0) {
          $_SESSION['user'] = $user;
          echo "<script>window.location='" . base_url() . "';</script>";
        } else { ?>
          <div class="row">
            <div class="col-lg-12 ">
              <div class="alert alert-danger alert-dismissable" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <strong>Login gagal</strong> Username / password salah
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
      <div class="login-box-body">

        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="user" class="form-control" placeholder="Username" autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="<?= base_url() ?>/_assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url() ?>/_assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>

  </html>
<?php
}
?>