<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PT Inti Prima Rasa</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.0/collection/components/icon/icon.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/dist/css/skins/_all-skins.min.css">
        <!-- Date Picker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/AdminLTE/plugins/datepicker/datepicker3.css">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>images/icon-ipr.png"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="<?php echo base_url(); ?>admin/index" class="logo"> 
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><small><strong> PT. Inti Prima Rasa</strong></small></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">             
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown">
        			            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        			                <i class="fas fa-user"></i>&nbsp;&nbsp;Selamat datang!
                                    <?php
                                        $this->session->userdata('ses_id');
                                    ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">Anda masuk sebagai
                                            <strong>
                                                <?php
                                                    if ($this->session->userdata('akses')=='1') {
                                                        echo "Admin";
                                                    }
                                                    elseif ($this->session->userdata('akses')=='2') {
                                                        echo "Superuser";
                                                    }
                                                    else {
                                                        echo "Pengguna Biasa";
                                                    }
                                                ?>
                                            </strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>login/logout">
                                            <i class="fas fa-sign-out-alt fa-fw"></i>&nbsp;Keluar
                                        </a>
                                    </li>
                                </ul>
                            </li>              
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <!-- <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?php echo base_url('assets/AdminLTE/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p><li>
                                        <a href="#">
                                            <strong>
                                                <?php
                                                    if ($this->session->userdata('akses')=='1') {
                                                        echo "Admin";
                                                    }
                                                    elseif ($this->session->userdata('akses')=='2') {
                                                        echo "Superuser";
                                                    }
                                                    else {
                                                        echo "Pengguna Biasa";
                                                    }
                                                ?>
                                            </strong>
                                        </a></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div> -->
                    <!-- search form -->
                    <!-- <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form> -->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="<?php if($page == 'home'){echo 'active';} ?>">
                            <a href="<?php echo base_url(); ?>index.php/admin/index">
                                <i class="fa fa-home"></i> <span>Halaman Utama</span> 
                            </a>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Buku Tamu</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/buku_tamu"><i class="fa fa-circle-o"></i> Laporan Buku Tamu</a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/tamu_masuk"><i class="fa fa-circle-o"></i> Tamu Masuk</a></li>
                            </ul>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>admin/cari_tamu"><i class="fa fa-circle-o"></i> Tamu Keluar</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
                </aside>
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <!--li class="header">Navigasi</li-->
                        <li class="<?php if($page == 'home'){echo 'active';} ?>">
                            <a href="<?php echo base_url(); ?>admin/index">
                                <i class="fa fa-home"></i> <span>Halaman Utama</span> 
                            </a>
                        </li>
                        <!-- Akses menu untuk admin -->
                      
                        <?php if($this->session->userdata('akses')=='1'):?> 
                            <li class="<?php if($page == 'buku_tamu'){echo 'active';} ?>">
                                <a href="<?php echo base_url(); ?>admin/buku_tamu">
                                    <i class="fa fa-book"></i> <span>Buku Tamu</span> 
                                </a>
                            </li>
                        <?php endif;?>   
                    </ul>
                </section>
            <!-- /.sidebar -->
            </aside>
            <?php
                $this->load->view('admin/'.$page);
            ?>
            <footer class="main-footer">
                <center>
                    <strong>&copy; <?php echo date('Y')?></strong> - Sistem Informasi<br>
                    <small>Created by <strong>PT. Inti Prima Rasa</strong></small>
                </center>
            </footer>
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 2.1.4 -->
        <script
              src="https://code.jquery.com/jquery-2.1.4.js"
              integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4="
              crossorigin="anonymous"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $(function () {
                $("#example1").DataTable({          
                "language": {
                    "url": "<?php echo base_url(); ?>application/assets/plugins/datatables/Indonesian.json",
                    "sEmptyTable": "Tidak ada data di database"
                }
                });
            });
            $(function() {
                $( "#tgl_surat" ).datepicker({ 
                    autoclose: true 
                });
                $( "#tgl_terimasurat" ).datepicker({ 
                    autoclose: true 
                });
                $( "#tgl_transmital" ).datepicker({ 
                    autoclose: true 
                });
                $( "#tanggal" ).datepicker({ 
                    autoclose: true 
                });
                $( "#tanggal_suratkontrak" ).datepicker({ 
                    autoclose: true 
                });
                $( "#tanggal_pembelian" ).datepicker({ 
                    autoclose: true 
                });
                $( "#tanggal_transaksi" ).datepicker({ 
                    autoclose: true 
                });
            });
        </script>
        <!-- Bootstrap 3.3.5 -->
        <script src="<?php echo base_url(); ?>assets/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/datatables/jquery.dataTables.js"></script>
        <script href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js"></script>
        <!-- datepicker -->
        <script src="<?php echo base_url(); ?>assets/AdminLTE/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/AdminLTE/dist/js/demo.js"></script>
    </body>
</html>