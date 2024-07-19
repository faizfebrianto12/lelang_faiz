<?php
require __DIR__.'/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM tb_barang WHERE id_barang ='$id';";

if ($koneksi->query($sql) === true) {
    header("location:../barang.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
;
?>