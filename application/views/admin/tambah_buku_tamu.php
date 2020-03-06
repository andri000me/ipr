
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
              <strong>Tambah Tamu Masuk</strong>
              <small></small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i> Halaman Utama</a></li>
              <li><a href="<?php echo base_url(); ?>admin/buku_tamu">Tamu Masuk</a></li>
              <li class="active">Tambah Buku Tamu</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open("admin/insert_buku_tamu", array('enctype'=>'multipart/form-data')); ?>
                      <br>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama"/>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Asal Perusahaan</label>
                      <input type="text" class="form-control" name="asal_perusahaan" placeholder="Asal Perusahaan"/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tujuan</label>
                      <input type="text" class="form-control" name="tujuan" placeholder="Tujuan"/>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bertemu</label>
                      <input type="text" class="form-control" name="bertemu" placeholder="Bertemu"/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Kartu</label>
                      <input type="text" class="form-control" name="nomor_kartu" placeholder="Nomor Kartu"/>
                  </div>

                    <?php  
                      $no = 1;
                      foreach ($data as $lihat):
                      ?>
                    <tr>
                    <strong><p><?php echo $lihat->pertanyaan ?><br>

                    <div class="form-group">
                    <input type="checkbox" name="jawaban" value="YA">
                    <label for="vehicle2"><strong>YA</strong> </label><br>
                    <input type="checkbox" name="jawaban" value="TIDAK">
                    <label for="vehicle3"> TIDAK</label><br></p></strong>
                    </div>
                                    
                      </tr>
                      <?php endforeach ?>


                    <!-- <?php  
                      $no = 1;
                      foreach ($data as $lihat):
                      ?>
                    <tr>
                    <strong><p><?php echo $lihat->pertanyaan ?><br>
                    <div class="form-group">
                      <label for="vehicle3">
                        <input type="radio" name="jawaban" class="minimal" checked>YA
                      </label><br>
                      <label for="vehicle1">
                        <input type="radio" name="jawaban" class="minimal">TIDAK
                      </label>
                    </div>

                    </tr>
                      <?php endforeach ?>
 -->

                  <div class="form-group">
                    <label for="exampleInputEmail1">Suhu Tubuh</label>
                      <input type="text" class="form-control" name="suhu_tubuh" placeholder="Suhu Tubuh"/>
                  </div>

                  

                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Jam Masuk</label>
                      <input type="text" class="form-control" name="jam_masuk" placeholder="Jam Masuk"/>
                  </div> -->

                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Jam Keluar</label>
                      <input type="text" class="form-control" name="jam_keluar" placeholder="Jam Keluar"/>
                  </div> -->

                  <a href="<?php echo base_url(); ?>admin/tamu_masuk" class="btn btn-danger btn-flat"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>

       <!--  <script type="text/javascript" src="<?php echo base_url(); ?>assets/webcamjs/webcam.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script> -->
        <!-- Code to handle taking the snapshot and displaying it locally -->
       <!--   <script language="JavaScript"> -->
         
        <!-- 
        /*Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
        });
        Webcam.attach( '#my_camera' );*/
         // A button for taking snaps


        function cancel(){
        Webcam.set({
         width: 320,
         height: 240,
         image_format: 'jpeg',
         jpeg_quality: 90
        });
        Webcam.attach( '#my_camera' );
       }

         // preload shutter audio clip
         var shutter = new Audio();
         shutter.autoplay = false;
         shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

         function take_snapshot() {
          // play sound effect
          shutter.play();

          // take snapshot and get image data
          Webcam.snap( function(data_uri) {
          // display results in page
          document.getElementById('results').innerHTML = 
           '<img id="imageprev" src="'+data_uri+'"/>';
          } );

          Webcam.reset();
         }
        </script> -->

        <!-- <script type="text/javascript">
        $('#simpan').on('submit', function (event) {
          event.preventDefault();
          var image = '';
          var tanggal = $('#tanggal').val();
          var asal_perusahaan = $('#asal_perusahaan').val();
          var keperluan = $('#keperluan').val();
          var bertemu = $('#bertemu').val();
          var jam_masuk = $('#jam_masuk').val();
          var jam_keluar = $('#jam_keluar').val();
          Webcam.snap( function(data_uri) {
            image = data_uri;
          });
          $.ajax({
            url: '<?php echo site_url("admin/insert_buku_tamu");?>',
            type: 'POST',
            dataType: 'json',
            data: {tanggal: tanggal, asal_perusahaan: asal_perusahaan, keperluan: keperluan, bertemu: bertemu, jam_masuk: jam_masuk, jam_keluar:jam_keluar, image:image},
          })
          .done(function(data) {
            if (data > 0) {
              alert('insert data sukses');
              $('#simpan')[0].reset();
            }
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });
          
          
        });
      </script> -->
        