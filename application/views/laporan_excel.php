<?php
/* header("Content-Type: application/vnd.ms-excel");
  header("Content-Disposition: attachment; filename=TEST.xls"); */
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=SuratKeluar.xls");
header("Cache-control: public");
?>

<table id="example1" border="1" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        
                        <th>No. Surat</th>
                        <th>Tgl Surat</th>
                        <th>Perihal</th>
                        <th>Tujuan</th>
                        
                        <th>Pembuat</th>
                        
                    </thead>

<tbody>

<?php $i=1; foreach($user as $user) { ?>

<tr>

 <td><?php echo $user->no_surat ?></td>
 <td><?php echo $user->tgl_surat ?></td>
 <td><?php echo $user->untuk ?></td>
 <td><?php echo $user->perihal ?></td>
 <td><?php echo $user->pembuat ?></td>

 </tr>

<?php $i++; } ?>

</tbody>

</table>