<?php
require __DIR__.'/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM tb_masyarakat WHERE id_user ='$id';";

if ($koneksi->query($sql) === true) {
    header("location:../masyarakat.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
;
?>