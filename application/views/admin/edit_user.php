<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>User</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/admin/user">User</a></li>
              <li class="active">Edit</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Edit User</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_user',array('enctype'=>'multipart/form-data')); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <!-- <label for="exampleInputEmail1">Jenis Surat</label>
                      <select name="jenis" class="form-control">
                        <?php
                        $l_jenis = $this->db->query("SELECT * FROM tb_user")->result();
                        
                        if (empty($l_jenis)) {
                          echo "<option  value=''> --Tidak Ada Data-- </option>";
                        } else {
                        foreach($l_jenis as $l_jenis_surat){
                        ?>
                       <option <?php if( $data->jenis_id == $l_jenis_surat->jenis_id) {echo "selected"; } ?> value='<?php echo $l_jenis_surat->jenis_id ;?>'><?php echo $l_jenis_surat->jenis_surat ;?></option>

                        <?php 
                          } 
                          }
                        ?>
                        
                      </select> -->
                  <!-- </div>-->        
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $data->username ?>" />
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $data->nama ?>"/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                      <input type="text" class="form-control" name="password" value="<?php echo $data->password ?>"/>
                  </div>
                  
                  
                  <input type="hidden" name="id" value="<?php echo $data->id ?>">
                  <a href="<?php echo base_url(); ?>index.php/admin/user" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
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