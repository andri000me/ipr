<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <strong>Edit Tamu Keluar</strong>
            </h1>
            <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Halaman Utama</a></li>
                    <li><a href="<?php echo base_url(); ?>admin/buku_tamu">Tamu Keluar</a></li>
                    <li class="active">Edit Buku Tamu</li>
                </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_buku_tamu',array('enctype'=>'multipart/form-data')); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $data->nama ?>" readonly/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Asal Perusahaan</label>
                      <input type="text" class="form-control" name="asal_perusahaan" value="<?php echo $data->asal_perusahaan ?>" readonly/>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tujuan</label>
                      <input type="text" class="form-control" name="tujuan" value="<?php echo $data->tujuan ?>"readonly/>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bertemu</label>
                      <input type="text" class="form-control" name="bertemu" value="<?php echo $data->bertemu ?>" readonly/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Kartu</label>
                      <input type="text" class="form-control" name="nomor_kartu" value="<?php echo $data->nomor_kartu ?>" readonly/>
                  </div>
                  
<!-- 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam Masuk</label>
                      <input type="text" class="form-control" name="jam_masuk" value="<?php echo $data->jam_masuk ?>"/>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam Keluar</label>
                      <input type="text" class="form-control" name="jam_keluar" value="<?php echo $data->jam_keluar ?>"/>
                  </div>
                   -->
                
                  
                  <input type="hidden" name="no_buku_tamu" value="<?php echo $data->no_buku_tamu ?>">
                  <a href="<?php echo base_url(); ?>admin/tamu_keluar" class="btn btn-danger btn-flat"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
                  
                 <!--  <div class="form-group">
                    <label for="lampiran">Lampiran</label>
                      <input type="file" id="lampiran" name="lampiran">

                  <p class="help-block">Maksimal ukuran file 500kb!!</p>
                </div> -->
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>