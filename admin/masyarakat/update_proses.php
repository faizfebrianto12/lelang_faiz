<?php
include_once __DIR__.'/koneksi.php';
    $id = $_POST['id'];
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telp = $_POST['telp'];

$sql = "UPDATE tb_masyarakat SET id_user = '$id_user', nama_lengkap = '$nama_lengkap', username = '$username', password = '$password', telp = '$telp' WHERE id_user = '$id'";

    if ($koneksi->query($sql) === true) {
        header("location:../masyarakat.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

$koneksi->close();
?>