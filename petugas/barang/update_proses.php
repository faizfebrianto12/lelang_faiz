<?php
include_once __DIR__.'/koneksi.php';
    $id = $_POST['id'];
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $tgl = $_POST['tgl'];
    $harga_awal = $_POST['harga_awal'];
    $deskripsi_barang = $_POST['deskripsi_barang'];

$sql = "UPDATE tb_barang SET id_barang = '$id_barang', nama_barang = '$nama_barang', tgl = '$tgl', harga_awal = '$harga_awal', deskripsi_barang = '$deskripsi_barang' WHERE id_barang = '$id'";

    if ($koneksi->query($sql) === true) {
        header("location:../barang.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

$koneksi->close();
?>