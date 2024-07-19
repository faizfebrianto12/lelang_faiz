<?php
include __DIR__.'/koneksi.php';

$id_lelang = $_POST['id_lelang'];
$id_barang = $_POST['id_barang'];
$tgl_lelang = $_POST['tgl_lelang'];
$harga_akhir = $_POST['harga_akhir'];
$id_user = $_POST['id_user'];
$id_petugas = $_POST['id_petugas'];
$status = $_POST['status'];


// sql
$sql =  "INSERT INTO tb_lelang(id_lelang, id_barang, tgl_lelang, harga_akhir, id_user, id_petugas, status) 
VALUES ('$id_lelang','$id_barang','$tgl_lelang','$harga_akhir','$id_user','$id_petugas','$status')";

if ($koneksi->query($sql) === true) {
    header("location:../lelang.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
