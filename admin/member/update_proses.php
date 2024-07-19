<?php
include_once __DIR__.'/koneksi.php';
    $id = $_POST['id'];
    $id_member = $_POST['id_member'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tlp = $_POST['tlp'];
    

$sql = "UPDATE tb_member SET id_member = '$id_member', nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jenis_kelamin', tlp = '$tlp' WHERE id_member = '$id'";

    if ($koneksi->query($sql) === true) {
        header("location:../member.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

$koneksi->close();
?>