<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/bs-custom-file-input/bs-custom-file-input.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url('assets/AdminLTE-3.2.0/dist/js/demo.js');?>"></script> -->
<!-- Ekko Lightbox -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/ekko-lightbox/ekko-lightbox.min.js');?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/moment/moment.min.js');?>"></script>
<!-- customized js -->
<script>
    //DataTable
    $('.datatable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    //Lightbox
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
