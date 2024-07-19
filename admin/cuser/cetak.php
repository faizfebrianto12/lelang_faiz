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
$pdf->Cell(30,6,'Id User',1,0);
$pdf->Cell(30,6,'Username',1,0);
$pdf->Cell(30,6,'Password',1,0);
$pdf->Cell(30,6,'Full Name',1,0);
$pdf->Cell(30,6,'Level',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($koneksi, "SELECT * FROM user");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(30,6,$row['id_user'],1,0);
    $pdf->Cell(30,6,$row['username'],1,0);
    $pdf->Cell(30,6,$row['password'],1,0);
    $pdf->Cell(30,6,$row['fullname'],1,0);
    $pdf->Cell(30,6,$row['level'],1,1);
}

$pdf->Output();
?>