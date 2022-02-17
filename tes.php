<?php
require 'koneksi.php';
$visimisi = query("SELECT * FROM tbl_proyek");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>VISI MISI</h1>


    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Visi</th>
            <th>Misi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $visimisi as $row) : ?>
            
        
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["nama_produk"]; ?></td>
            <td><img src="admin/gambar/<?= $row["gambar_produk"]; ?>"></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>