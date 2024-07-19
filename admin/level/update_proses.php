<?php
include_once __DIR__.'/koneksi.php';
    $id = $_POST['id'];
    $id_level = $_POST['id_level'];
    $level = $_POST['level'];

$sql = "UPDATE tb_level SET id_level = '$id_level', level = '$level' WHERE id_level = '$id'";

    if ($koneksi->query($sql) === true) {
        header("location:../level.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

$koneksi->close();
?>