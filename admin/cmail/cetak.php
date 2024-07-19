<?php

$koneksi = mysqli_connect("localhost","root","","surat");

// Koneksi library FPDF
require('library/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('times','B',20);
// Membuat string
$pdf->Cell(190,7,'Transaksi Anda',0,1,'C');
$pdf->SetFont('times','B',14);
$pdf->Cell(190,7,'Surat Faiz! Report Surat Masuk Dan Keluar',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(40,7,'',0,1);

$pdf->SetFont('times','B',12);
$pdf->Cell(30,6,'Id Mail',1,0);
$pdf->Cell(30,6,'Incoming At',1,0);
$pdf->Cell(30,6,'Mail Code',1,0);
$pdf->Cell(30,6,'Mail Date',1,0);
$pdf->Cell(30,6,'Mail From',1,0);
$pdf->Cell(30,6,'Mail To',1,0);
$pdf->Cell(30,6,'Mail Subject',1,0);
$pdf->Cell(30,6,'Description',1,0);
$pdf->Cell(30,6,'File Upload',1,0);
$pdf->Cell(30,6,'Mail TypeId',1,0);
$pdf->Cell(30,6,'User Id',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($koneksi, "SELECT * FROM mail");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(30,6,$row['id_mail'],1,0);
    $pdf->Cell(30,6,$row['incoming_at'],1,0);
    $pdf->Cell(30,6,$row['mail_code'],1,0);
    $pdf->Cell(30,6,$row['mail_date'],1,0);
    $pdf->Cell(30,6,$row['mail_from'],1,0);
    $pdf->Cell(30,6,$row['mail_to'],1,0);
    $pdf->Cell(30,6,$row['mail_subject'],1,0);
    $pdf->Cell(30,6,$row['description'],1,0);
    $pdf->Cell(30,6,$row['file_upload'],1,0);
    $pdf->Cell(30,6,$row['mail_typeid'],1,0);
    $pdf->Cell(30,6,$row['userid'],1,1);
}

$pdf->Output();
?>