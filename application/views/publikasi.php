<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Publikasi Sanmariann</title>

        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/AdminLTE-3.2.0/dist/css/adminlte.min.css');?>">
    </head>
    <body>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php 
            $ctr = 0;
            foreach ($data as $row) {
                ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="<?= $ctr ?>" class="<?php echo $ctr == 0?"active":""; ?>"></li>
                <?php
                $ctr++;
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php 
            $ctr = 0;
            foreach ($data as $row) {
                ?>
                <div class="text-center carousel-item <?php echo $ctr == 0?"active":""; ?>">
                <img class=" h-100" src="<?= base_url("media/event/".$row["nama_file"]) ?>">
                </div>
                <?php
                $ctr++;
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/AdminLTE-3.2.0/dist/js/adminlte.min.js');?>"></script>
    <!-- custom -->
    <script>
        $('.carousel').carousel()
    </script>
    </body>
</html>