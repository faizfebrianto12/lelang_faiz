<?php
include_once __DIR__.'/koneksi.php';
    $id = $_POST['id'];
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $level = $_POST['level'];


$sql = "UPDATE user SET id_user = '$id_user', username = '$username', password = '$password', fullname = '$fullname', level = '$level' WHERE id_user = '$id'";

    if ($koneksi->query($sql) === true) {
        header("location:../user.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

$koneksi->close();
?>