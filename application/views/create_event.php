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
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Event</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
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
              <form action="<?php echo base_url('event/upload')?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input name="judul" type="text" class="form-control" id="judul" placeholder="Masukkan judul" required>
                  </div>
                  <div class="form-group">
                    <label for="pemilik">Pemilik</label>
                    <input name="pemilik" type="text" class="form-control" id="pemilik" placeholder="Masukkan pemilik" required>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputFile">File</label>
                  <div class="input-group">
                  <div class="custom-file">
                  <input type="file" class="custom-file-input" id="nama_file" name="nama_file" required>
                  <label class="custom-file-label" for="nama_file"></label>
                  </div>
                  <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                  </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="tanggal_mulai">Tanggal Mulai</label>
                    <input type="date" class="form-control" name="tanggal_mulai" id="tanggal_mulai" placeholder="Masukkan tanggal mulai" required onfocus="this.showPicker()">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_selesai">Tanggal Selesai</label>
                    <input type="date" class="form-control" name="tanggal_selesai" id="tanggal_selesai" placeholder="Masukkan tanggal selesai" required onfocus="this.showPicker()">
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" value=0 name="status" required>
                    <label class="form-check-label">Tidak Aktif</label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" value=1 name="status" required>
                    <label class="form-check-label">Aktif</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->