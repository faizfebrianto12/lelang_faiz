<?php
include __DIR__.'/koneksi.php';

$id_user = $_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];

// sql
$sql =  "INSERT INTO tb_masyarakat(id_user, nama_lengkap, username, password, telp) 
VALUES ('$id_user','$nama_lengkap','$username','$password','$telp')";

if ($koneksi->query($sql) === true) {
    header("location:./index.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
