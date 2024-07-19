<?php
require __DIR__.'/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM disposition WHERE id_disposition ='$id';";

if ($koneksi->query($sql) === true) {
    header("location:../disposition.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
;
?>