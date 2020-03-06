<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                    <a href="<?php echo base_url(); ?>index.php/admin/tambah_user" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
                    <a href="<?php echo base_url('excel/export_exceluser') ?>" class="btn btn-sm btn-success btn-flat"><i class="fa fa-book"></i>&nbsp;Export ke Excel</a>
                  </h3>
                  <div class="box-tools">
                    <!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        
                        <th>#</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Password</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                      <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $lihat->username ?></td>
                      <td><?php echo $lihat->nama ?></td>
                      <td><?php echo $lihat->password ?></td>  
                     <!--  <td><center><?php
                      if ($lihat->nama_file) 
                          {

                              echo '<a href="'. base_url() .'user/'. $lihat->nama_file .'" class="btn btn-sm btn-success"><i class="fa fa-file-archive-o"></i></a>';
                          }
                          else
                          {
                             echo '<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-file-archive-o"></i></a>';
                          }
                          ?>
                        </center></td> -->
                        <td align="center">
                          <div class="btn-group" role="group">


                           <!--  <a onclick="openInNewTab('<?php echo base_url(); ?>images/<?php echo $lihat->nama_file ?>');" class="btn btn-sm btn-success btn-flat"><i class="fa fa-eye"></i> Lihat</a> -->
                            
                            <?php 
                            // print_r($_SESSION);
                            // if ($_SESSION['username']=='admin'){

                            ?>
                            <a href="<?php echo base_url(); ?>index.php/admin/edit_user/<?php echo $lihat->id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i></a>
                            <p></p>
                            <a href="<?php echo base_url(); ?>admin/hapus_user/<?php echo $lihat->id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i></a> 

                            <?php 
                          // } 
                          ?>
                            <!-- <?php 
                            /*echo $level = $_SESSION['level_akses'];
                            if($level=='admin')*/
                            {
                            /*echo '<a  class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>';*/
                            }
                            ?> -->
                           <!-- onclick="javascript: return confirm("Anda yakin akan menghapus data ini ?")" href="echo base_url(); ?>index.php/admin/hapus_surat_keluar/echo $lihat->surat_id ?>"  -->
                          </div>
                        </td>                     
                      </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
          
         

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->


<script type="text/javascript">
  function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}
</script>