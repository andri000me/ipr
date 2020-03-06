
<!-- Content Wrapper. Contains page content -->
<!-- CSS -->
      <style>
      #my_camera{
       width: 320px;
       height: 240px;
       border: 1px solid black;
      }
      </style>

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <strong>Cari Tamu Keluar</strong>
              <small></small>
            </h1>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open("admin/insert_buku_tamu", array('enctype'=>'multipart/form-data')); ?>
                      <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Kartu Tamu</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama"/>
                  </div>
                 
                  <a href="<?php echo base_url(); ?>admin/tamu_masuk" class="btn btn-danger btn-flat"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Cari</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>
