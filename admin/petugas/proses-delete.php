<?php
require __DIR__.'/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM tb_petugas WHERE id_petugas ='$id';";

if ($koneksi->query($sql) === true) {
    header("location:../petugas.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
;
?>