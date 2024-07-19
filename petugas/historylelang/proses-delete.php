<?php
require __DIR__.'/koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM history_lelang WHERE id_history ='$id';";

if ($koneksi->query($sql) === true) {
    header("location:../historylelang.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
;
?>