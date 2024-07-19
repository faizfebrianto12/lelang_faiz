<?php
include __DIR__.'/koneksi.php';

$id_history = $_POST['id_history'];
$id_lelang = $_POST['id_lelang'];
$id_barang = $_POST['id_barang'];
$id_user = $_POST['id_user'];
$penawaran_harga = $_POST['penawaran_harga'];

// sql
$sql =  "INSERT INTO history_lelang(id_history, id_lelang, id_barang, id_user, penawaran_harga) 
VALUES ('$id_history','$id_lelang','$id_barang','$id_user','$penawaran_harga')";

if ($koneksi->query($sql) === true) {
    header("location:../historylelang.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
