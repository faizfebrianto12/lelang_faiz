<?php
include_once __DIR__.'/koneksi.php';
    $id = $_POST['id'];
    $id_petugas = $_POST['id_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_level = $_POST['id_level'];

$sql = "UPDATE tb_petugas SET id_petugas = '$id_petugas', nama_petugas = '$nama_petugas', username = '$username', password = '$password', id_level = '$id_level' WHERE id_petugas = '$id'";

    if ($koneksi->query($sql) === true) {
        header("location:../petugas.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

$koneksi->close();
?>