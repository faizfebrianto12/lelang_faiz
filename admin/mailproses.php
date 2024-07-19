<?php
include __DIR__.'/koneksi.php';

$id_mail = $_POST['id_mail'];
$incoming_at = $_POST['incoming_at'];
$mail_code = $_POST['mail_code'];
$mail_date = $_POST['mail_date'];
$mail_from = $_POST['mail_from'];
$mail_to = $_POST['mail_to'];
$mail_subject = $_POST['mail_subject'];
$description = $_POST['description'];
$file_upload = $_POST['file_upload'];
$mail_typeid = $_POST['mail_typeid'];
$userid = $_POST['userid'];

// sql
$sql =  "INSERT INTO mail(id_mail, incoming_at, mail_code, mail_date, mail_from, mail_to, mail_subject, description, file_upload, mail_typeid, userid) 
VALUES ('$id_mail','$incoming_at','$mail_code','$mail_date','$mail_from','$mail_to','$mail_subject','$description','$file_upload','$mail_typeid','$userid')";

if ($koneksi->query($sql) === true) {
    header("location:mail.php");
} else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
}
$koneksi->close();
?>
