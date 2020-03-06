<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           <strong>Tamu Keluar</strong>
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Halaman Utama</a></li>
            <li class="active">Buku Tamu</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">           
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
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
                        <th>Nama</th>
                        <th>Asal Perusahaan</th>
                        <th>Tujuan</th>
                        <th>Bertemu</th>
                        <th>Jam Masuk</th>
                        <th>Jam Keluar</th>
                        <th>Nomor Kartu</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                      <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $lihat->nama ?></td>
                      <td><?php echo $lihat->asal_perusahaan ?></td>
                      <td><?php echo $lihat->tujuan ?></td> 
                      <td><?php echo $lihat->bertemu ?></td>
                      <td><?php echo $lihat->jam_masuk ?></td>
                      <td><?php echo $lihat->jam_keluar ?></td>  
                      <td><?php echo $lihat->nomor_kartu ?></td>               
                      <td align="center">
                          <div class="btn-group" role="group">

                            <p>
                            <a href="<?php echo base_url(); ?>admin/edit_buku_tamu/<?php echo $lihat->no_buku_tamu ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-pen fa-fw"></i></a>
                            
                            <!-- <a href="<?php echo base_url(); ?>admin/hapus_buku_tamu/<?php echo $lihat->no_buku_tamu ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash fa-fw"></i></a>  -->
                            </p>
                            
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