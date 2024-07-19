<?php
include_once __DIR__.'/koneksi.php';
    $id = $_POST['id'];
    $id_lelang = $_POST['id_lelang'];
    $id_barang = $_POST['id_barang'];
    $tgl_lelang = $_POST['tgl_lelang'];
    $harga_akhir = $_POST['harga_akhir'];
    $id_user = $_POST['id_user'];
    $id_petugas = $_POST['id_petugas'];
    $status = $_POST['status'];

$sql = "UPDATE tb_lelang SET id_lelang = '$id_lelang', id_barang = '$id_barang', tgl_lelang = '$tgl_lelang', harga_akhir = '$harga_akhir', id_user = '$id_user', id_petugas = '$id_petugas', status = '$status' WHERE id_lelang = '$id'";

    if ($koneksi->query($sql) === true) {
        header("location:../lelang.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

$koneksi->close();
?>