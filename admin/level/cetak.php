<?php

$koneksi = mysqli_connect("localhost","root","","lelang_faiz");

// Koneksi library FPDF
require('library/fpdf.php');
// Setting halaman PDF
$pdf = new FPDF('l','mm','A4');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('times','B',20);
// Membuat string
$pdf->Cell(190,7,'Lelang Faiz!',0,1,'C');
$pdf->SetFont('times','B',14);
$pdf->Cell(190,7,'Level',0,1,'C');
$pdf->SetFont('times','B',14);

// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(40,7,'',0,1);

$pdf->SetFont('times','B',12);
$pdf->Cell(30,6,'Id Level',1,0);
$pdf->Cell(30,6,'Level',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($koneksi, "SELECT * FROM tb_level");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(30,6,$row['id_level'],1,0);
    $pdf->Cell(30,6,$row['level'],1,1);
}

$pdf->Output();
?>