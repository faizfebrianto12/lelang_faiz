<?php
include __DIR__.'/koneksi.php';

$id_disposition = $_POST['id_disposition'];
$disposition_at = $_POST['disposition_at'];
$reply_at = $_POST['reply_at'];
$desciption = $_POST['desciption'];
$notification = $_POST['notification'];
$mailid = $_POST['mailid'];
$userid = $_POST['userid'];
$status = $_POST['status'];

// sql
$sql =  "INSERT INTO disposition (id_disposition, disposition_at, reply_at, desciption, notification, mailid, userid, status) 
VALUES ('$id_disposition','$disposition_at','$reply_at','$desciption','$notification','$mailid','$userid','$status')";

if ($koneksi->query($sql) === true) {
    header("location:../disposition.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
