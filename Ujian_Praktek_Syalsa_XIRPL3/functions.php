<?php

$conn = mysqli_connect("localhost", "root", "", "siswa");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn; 

    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["Alamat"]);

    $query = "INSERT INTO siswa (nama, nis, jurusan, alamat) VALUES ('$nama', '$nis', '$jurusan', '$alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id= $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn; // Pastikan koneksi database diakses di dalam fungsi ini

    // Ambil data dari form
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);

    // Query untuk mengupdate data
    $query = "UPDATE siswa SET 
                nama = '$nama', 
                nis = '$nis', 
                jurusan = '$jurusan', 
                alamat = '$alamat' 
              WHERE id = $id";

    mysqli_query($conn, $query);

    // Mengembalikan jumlah baris yang terpengaruh
    return mysqli_affected_rows($conn);
}
?>