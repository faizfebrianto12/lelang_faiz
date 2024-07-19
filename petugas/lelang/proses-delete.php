<?php
require __DIR__.'/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM tb_lelang WHERE id_lelang ='$id';";

if ($koneksi->query($sql) === true) {
    header("location:../lelang.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
;
?>