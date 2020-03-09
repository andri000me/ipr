
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/regular.css" integrity="sha384-zkhEzh7td0PG30vxQk1D9liRKeizzot4eqkJ8gB3/I+mZ1rjgQk+BSt2F6rT2c+I" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Halaman Utama</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Halaman Utama</a></li>
            <!--li class="active">Halaman Utama</li-->
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
    <!-- Akses menu untuk admin -->
    <?php if($this->session->userdata('akses')=='1'):?>  
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-4">
            <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <strong><h1>Tamu Hari Ini</h1></strong>
                    <h3><?php echo $buku_tamu ?></h3>
                    
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin/buku_tamu" class="small-box-footer">Buku Tamu &nbsp;<i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <?php
            endif;
        ?>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
