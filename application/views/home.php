<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Konten</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <?php
          if ($this->session->flashdata('message')) {
            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <?= $this->session->flashdata('message') ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <?php
          }
        ?>
        <div class="card-header">
          <a href="<?= base_url('event/create') ?>" type="button" class="btn btn-primary">
            Tambah Baru
          </a>

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

                  if ($maxhari == 0) {
                    $sisahari_persen = 0;
                  }else{
                    $sisahari_persen = ($maxhari - $sisahari) / $maxhari * 100;
                  }; 

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
                  $deleteurl = base_url('event/delete/'.$row["id"]);

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
                          <!-- <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a> -->
                          <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus data?');" href="$deleteurl">
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
