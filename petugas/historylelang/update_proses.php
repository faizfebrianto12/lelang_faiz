<?php
include_once __DIR__.'/koneksi.php';
    $id = $_POST['id'];
    $id_history = $_POST['id_history'];
    $id_lelang = $_POST['id_lelang'];
    $id_barang = $_POST['id_barang'];
    $id_user = $_POST['id_user'];
    $penawaran_harga = $_POST['penawaran_harga'];

$sql = "UPDATE history_lelang SET id_history = '$id_history', id_lelang = '$id_lelang', id_barang = '$id_barang', id_user = '$id_user', penawaran_harga = '$penawaran_harga' WHERE id_history = '$id'";

    if ($koneksi->query($sql) === true) {
        header("location:../historylelang.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

$koneksi->close();
?>