<?php

$koneksi = mysqli_connect("localhost","root","","laundry");

// Koneksi library FPDF
require('library/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('times','B',20);
// Membuat string
$pdf->Cell(190,7,'Member Anda',0,1,'C');
$pdf->SetFont('times','B',14);
$pdf->Cell(190,7,'Laundry Erikha!',0,1,'C');
$pdf->SetFont('times','B',14);
$pdf->Cell(190,7,'Data Member',0,1,'C');

// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(40,7,'',0,1);

$pdf->SetFont('times','B',12);
$pdf->Cell(30,6,'Id Member',1,0);
$pdf->Cell(30,6,'Nama',1,0);
$pdf->Cell(30,6,'Alamat',1,0);
$pdf->Cell(30,6,'Jenis Kelamin',1,0);
$pdf->Cell(30,6,'Nomor Telepon',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($koneksi, "SELECT * FROM tb_member");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(30,6,$row['id_member'],1,0);
    $pdf->Cell(30,6,$row['nama'],1,0);
    $pdf->Cell(30,6,$row['alamat'],1,0);
    $pdf->Cell(30,6,$row['jenis_kelamin'],1,0);
    $pdf->Cell(30,6,$row['tlp'],1,1);
}

$pdf->Output();
?>