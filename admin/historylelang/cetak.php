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
$pdf->Cell(190,7,'History Lelang',0,1,'C');
$pdf->SetFont('times','B',14);

// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(40,7,'',0,1);

$pdf->SetFont('times','B',12);
$pdf->Cell(30,6,'Id History',1,0);
$pdf->Cell(30,6,'Id Lelang',1,0);
$pdf->Cell(30,6,'Id Barang',1,0);
$pdf->Cell(30,6,'Id User',1,0);
$pdf->Cell(35,6,'Penawaran Harga',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($koneksi, "SELECT * FROM history_lelang");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(30,6,$row['id_history'],1,0);
    $pdf->Cell(30,6,$row['id_lelang'],1,0);
    $pdf->Cell(30,6,$row['id_barang'],1,0);
    $pdf->Cell(30,6,$row['id_user'],1,0);
    $pdf->Cell(35,6,$row['penawaran_harga'],1,1);
}

$pdf->Output();
?>