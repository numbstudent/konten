<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo SITE_NAME;?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
                <a href="<?= base_url('publikasi/event') ?>" class="nav-link">
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <button type="button" class="btn btn-primary">
            Tambah Baru
          </button>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table class="table projects datatable">
              <thead>
                  <tr>
                      <th style="width: 20%">
                          Judul Banner
                      </th>
                      <th style="width: 20%">
                          Pemilik
                      </th>
                      <th>
                          Progress
                      </th>
                      <th style="width: 10%">
                          Thumbnail
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 15%">
                      </th>
                  </tr>
              </thead>
              <tbody>
                <?php 
                foreach ($data as $row) {
                  $start_to_end = (strtotime($row["tanggal_selesai"]) - strtotime($row["tanggal_mulai"])) / 86400;
                  $maxhari = $start_to_end;
                  $sisahari = (strtotime($row["tanggal_selesai"]) - strtotime("today")) / 86400;
                  $sisahari_persen = ($maxhari - $sisahari) / $maxhari * 100;

                  $deskripsi_progress = "Sisa ".$sisahari." hari dari ".$maxhari." hari";
                  if ($sisahari_persen > 100) {
                    $sisahari_persen = 100;
                    $deskripsi_progress = "Masa aktif habis";
                  }

                  $status = "Tidak aktif";
                  $status_label = "danger";
                  if ($row["status"] == 1) {
                    $status = "Aktif";
                    $status_label = "success";
                  }
                  if ($sisahari_persen >= 100) {
                    $status = "Tidak aktif";
                    $status_label = "danger";
                  }

                  $image = base_url("media/event/".$row["nama_file"]);

                  echo <<<EOD
                  <tr>
                      <td>
                          <a>
                              $row[judul]
                          </a>
                          <br/>
                          <small>
                              $row[tanggal_mulai] - $row[tanggal_selesai]
                          </small>
                      </td>
                      <td>
                          Paroki
                      </td>
                      <td class="project_progress">
                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="$sisahari_persen" aria-valuemin="0" aria-valuemax="100" style="width: $sisahari_persen%">
                              </div>
                          </div>
                          <small>
                              $deskripsi_progress
                          </small>
                      </td>
                      <td>
                          <a href="$image" data-toggle="lightbox">
                              <img style="height: 50px;" src="$image" class="img-thumbnail">
                          </a>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-$status_label">$status</span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  EOD;
                }
                ?>
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright Yakobus Damar.</strong> Made for Santa Maria Annuntiata Sidoarjo. 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/dist/js/demo.js');?>"></script>
<!-- Ekko Lightbox -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/ekko-lightbox/ekko-lightbox.min.js');?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<!-- customized js -->
<script>
  $('.datatable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
  });
</script>
</body>
</html>
