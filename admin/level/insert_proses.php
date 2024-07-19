<?php
include __DIR__.'/koneksi.php';

$id_level = $_POST['id_level'];
$level = $_POST['level'];

// sql
$sql =  "INSERT INTO tb_level(id_level, level) 
VALUES ('$id_level','$level')";

if ($koneksi->query($sql) === true) {
    header("location:../level.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
