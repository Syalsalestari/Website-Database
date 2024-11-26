<?php
require 'functions.php';
$id = $_GET['id']; 
$sws = query("SELECT * FROM siswa WHERE id = $id")[0]; 

if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo "
        <script>
        alert('Update Berhasil!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Update Gagal!');
        document.location.href = 'index.php';
        </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP Dasar</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>Ubah Data Anda</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $sws["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required 
                value="<?= $sws["nama"]; ?>">
            </li>
            <li>
                <label for="nis">N i s : </label>
                <input type="text" name="nis" id="nis" required 
                value="<?= $sws["nis"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required 
                value="<?= $sws["jurusan"]; ?>">
            </li>
            <li>
                <label for="alamat">Alamat : </label>
                <input type="text" name="alamat" id="alamat" required 
                value="<?= $sws["alamat"]; ?>">
            </li>
            
            
                <button type="submit" name="submit">Ubah Data</button>
            
</body>
</html>