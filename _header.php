<?php
require_once "_config/config.php";
if (!isset($_SESSION['user'])) {
  echo "<script>window.location='" . base_url('auth/login.php') . "';</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KPRI KOGUSSEL</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>/_assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>/_assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url() ?>/_assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>/_assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/_assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url() ?>/_assets/dist/css/skins/_all-skins.min.css">

</head>

<body class="hold-transition skin-green sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="" class="logo">
        <span class="logo-mini"><b>S</b>PK</span>
        <span class="logo-lg"><b>SPK</b> SMART</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar">
        <ul id="nav" class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li><a href="<?= base_url('kriteria/data.php') ?>"><i class="fa fa-folder"></i> <span>Kriteria</span></a></li>
          <li><a href="<?= base_url('alternatif/data.php') ?>"><i class="fa fa-folder"></i> <span>Alternatif</span></a></li>
          <li><a href="<?= base_url('hasil/hasil.php') ?>"><i class="fa fa-folder"></i> <span>Hasil</span></a></li>
          <li><a href="<?= base_url('auth/logout.php') ?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
        </ul>
      </section>
    </aside>