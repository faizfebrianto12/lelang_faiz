<?php
include_once __DIR__.'/koneksi.php';
    $id = $_POST['id'];
    $id_disposition = $_POST['id_disposition'];
    $disposition_at = $_POST['disposition_at'];
    $reply_at = $_POST['reply_at'];
    $desciption = $_POST['desciption'];
    $notification = $_POST['notification'];
    $mailid = $_POST['mailid'];
    $userid = $_POST['userid'];
    $status = $_POST['status'];
   

$sql = "UPDATE disposition SET id_disposition = '$id_disposition', disposition_at = '$disposition_at', reply_at = '$reply_at', desciption = '$desciption', notification = '$notification', mailid = '$mailid', userid = '$userid', status = '$status' WHERE id_disposition = '$id'";

    if ($koneksi->query($sql) === true) {
        header("location:../disposition.php");
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

$koneksi->close();
?>