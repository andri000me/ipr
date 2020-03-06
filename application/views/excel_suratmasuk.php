<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <title><?php echo $title ?></title>
 <style type="text/css">
 body {
 background-color: green;
 font-family: Arial;
 }
 main {
 width: 80%;
 padding: 20px;
 background-color: white;
 min-height: 300px;
 border-radius: 5px;
 margin: 30px auto;
 }
 table {
 border-top: solid thin #000;
 border-collapse: collapse;
 }
 th, td {
 border-top: border-top: solid thin #000;
 padding: 6px 12px;
 }
 </style>
</head>

<body>
 <main>
 <h1>Laporan Excel</h1>
 <p><a href="<?php echo base_url('excel/export_excel') ?>">Export ke Excel</a></p>
 <table border="1" width="100%">
 <thead>
 <tr>
 						 <th>#</th>
                        <th>Tanggal Surat</th>
                        <th>Tanggal Terima Surat</th>
                        <th>No. Surat</th>
                        <th>Dari</th>
                        <th>Tujuan</th>
                        <th>Keterangan</th>
                        <th>Diterima</th>
                        <th>Nomor Transmital</th>
                        <th>Tanggal Transmital</th>
                        <th>Aksi</th>

 </tr>
 </tr>
 </thead>
 <tbody>
 <?php $i=1; foreach($user as $user) { ?>
 <tr>
 <td><?php echo $no++ ?></td>
                      <td><?php echo $lihat->tanggal_surat ?></td>  
                      <td><?php echo $lihat->tanggal_terimasurat ?></td>  
                      <td><?php echo $lihat->nomor_surat?></td>
                      <td><?php echo $lihat->dari ?></td> 
                      <td><?php echo $lihat->tujuan ?></td>
                      <td><?php echo $lihat->keterangan ?></td>
                      <td><?php echo $lihat->diterima ?></td>
                      <td><?php echo $lihat->nomor_transmital ?></td>
                      <td><?php echo $lihat->tanggal_transmital ?></td>
 </tr>
 <?php $i++; } ?>
 </tbody>
 </table>
 </main>
</body>
</html>