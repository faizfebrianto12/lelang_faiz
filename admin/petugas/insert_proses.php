<?php
include __DIR__.'/koneksi.php';

$id_petugas = $_POST['id_petugas'];
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$id_level = $_POST['id_level'];

// sql
$sql =  "INSERT INTO tb_petugas(id_petugas, nama_petugas, username, password, id_level) 
VALUES ('$id_petugas','$nama_petugas','$username','$password','$id_level')";

if ($koneksi->query($sql) === true) {
    header("location:../petugas.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
