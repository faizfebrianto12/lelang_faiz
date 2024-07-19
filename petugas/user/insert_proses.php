<?php
include __DIR__.'/koneksi.php';

$id_user = $_POST['id_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$level = $_POST['level'];

// sql
$sql =  "INSERT INTO user(id_user, username, password, fullname, level) 
VALUES ('$id_user','$username','$password','$fullname','$level')";

if ($koneksi->query($sql) === true) {
    header("location:../user.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
