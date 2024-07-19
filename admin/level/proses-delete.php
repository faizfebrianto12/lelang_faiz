<?php
require __DIR__.'/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM tb_level WHERE id_level ='$id';";

if ($koneksi->query($sql) === true) {
    header("location:../level.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
;
?>