<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Ekspor Surat Keluar ke Excel</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>images/nindya16px.png"/>
        <style type="text/css">
            body {
                background-color: #222D32;
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
            <h1>Pratinjau</h1>
            <p>Sudah oke? <strong><a href="<?php echo base_url('excel/export_excel') ?>">Export ke Excel</a></strong> aja langsung!</p>
            <table border="1" width="100%">
                <thead>
                    <tr>
 						<th>Nomor Surat</th>
                        <th>Tanggal Surat</th>
            			<th>Untuk</th>
            			<th>Perihal</th>            
                        <th>Pembuat</th>
                    </tr>
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
        </main>
    </body>
</html>