<?php
require __DIR__.'/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id_user ='$id';";

if ($koneksi->query($sql) === true) {
    header("location:../user.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
;
?>