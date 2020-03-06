<?php
/* header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=TEST.xls"); */
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=report_surat_masuk.xls");
header("Cache-control: public");
?>

<table id="example1" border="1" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        
                        <th>Tanggal Surat</th>
                        <th>Tanggal Terima Surat</th>
                        <th>No.Surat</th>
                        <th>Dari</th>
                        <th>Tujuan</th>
                        <th>Keterangan</th>
                        <th>Diterima</th>
                        <th>Nomor Transmital</th>
                        <th>Tanggal Transmital</th>
                    </thead>

<tbody>

<?php $i=1; foreach($user as $user) { ?>

<tr>

 <td><?php echo $user->tgl_surat ?></td>
 <td><?php echo $user->tgl_terimasurat ?></td>
 <td><?php echo $user->nomor_surat ?></td>
 <td><?php echo $user->dari ?></td>
 <td><?php echo $user->tujuan ?></td>
 <td><?php echo $user->Keterangan ?></td>
 <td><?php echo $user->Diterima ?></td>
 <td><?php echo $user->nomor_transmital ?></td>
 <td><?php echo $user->tgl_transmital ?></td>
 </tr>

<?php $i++; } ?>

</tbody>

</table>