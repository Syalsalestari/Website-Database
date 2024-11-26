<?php
require 'functions.php';

$ieu = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>DATA SISWA</h1>

<a href="tambahdata.php" class="tambahdata">Tambah Data siswa</a>

<br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Nis</th>
            <th>Jurusan</th>
            <th>Alamat</th>
         
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $ieu as $row ) : ?>
        <tr>
            <td><?=$i ?></td>
            <td>
                <a href="ubah.php?id=<?=$row["id"]; ?>">Ubah</a>
                <a href="hapus.php?id=<?=$row["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a>
            </td>
            <td><?=$row["nama"]; ?></td>
            <td><?=$row["nis"]; ?></td>
            <td><?=$row["jurusan"]; ?></td>
            <td><?=$row["alamat"]; ?></td>
           
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>

</body>
</html>