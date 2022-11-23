<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo SITE_NAME;?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="styl<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>esheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.2.0/dist/css/adminlte.min.css');?>">
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/ekko-lightbox/ekko-lightbox.css');?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-power-off"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <a href="#" class="dropdown-item">
            Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light"><?php echo SITE_NAME;?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Konten
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('event') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pernikahan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pernikahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('iklan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Iklan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Publikasi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('publikasi/event') ?>" class="nav-link" target="_blank">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('pernikahan') ?>" class="nav-link" target="_blank">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pernikahan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('iklan') ?>" class="nav-link" target="_blank">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Iklan</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">