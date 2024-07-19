<?php
include __DIR__.'/koneksi.php';

$id_member = $_POST['id_member'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tlp = $_POST['tlp'];

// sql
$sql =  "INSERT INTO tb_member(id_member, nama, alamat, jenis_kelamin, tlp) 
VALUES ('$id_member','$nama','$alamat','$jenis_kelamin','$tlp')";

if ($koneksi->query($sql) === true) {
    header("location:../member.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
