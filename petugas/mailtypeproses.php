<?php
include __DIR__.'/koneksi.php';

$id_type = $_POST['id_type'];
$type = $_POST['type'];

// sql
$sql =  "INSERT INTO mail_type(id_type, type) 
VALUES ('$id_type','$type')";

if ($koneksi->query($sql) === true) {
    header("location:mailtype.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
