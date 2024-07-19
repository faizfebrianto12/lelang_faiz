<?php
include __DIR__.'/koneksi.php';

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$tgl = $_POST['tgl'];
$harga_awal = $_POST['harga_awal'];
$deskripsi_barang = $_POST['deskripsi_barang'];

// sql
$sql =  "INSERT INTO tb_barang(id_barang, nama_barang, tgl, harga_awal, deskripsi_barang) 
VALUES ('$id_barang','$nama_barang','$tgl','$harga_awal','$deskripsi_barang')";

if ($koneksi->query($sql) === true) {
    header("location:../barang.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
