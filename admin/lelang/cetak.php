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
$pdf->Cell(190,7,'Lelang Faiz1',0,1,'C');
$pdf->SetFont('times','B',14);
$pdf->Cell(190,7,'Lelang',0,1,'C');
$pdf->SetFont('times','B',14);

// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(40,7,'',0,1);

$pdf->SetFont('times','B',12);
$pdf->Cell(30,6,'Id Lelang',1,0);
$pdf->Cell(30,6,'Id Barang',1,0);
$pdf->Cell(30,6,'Tanggal Lelang',1,0);
$pdf->Cell(30,6,'Harga Akhir',1,0);
$pdf->Cell(30,6,'Id User',1,0);
$pdf->Cell(30,6,'Id Petugas',1,0);
$pdf->Cell(30,6,'Status',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($koneksi, "SELECT * FROM tb_lelang");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(30,6,$row['id_lelang'],1,0);
    $pdf->Cell(30,6,$row['id_barang'],1,0);
    $pdf->Cell(30,6,$row['tgl_lelang'],1,0);
    $pdf->Cell(30,6,$row['harga_akhir'],1,0);
    $pdf->Cell(30,6,$row['id_user'],1,0);
    $pdf->Cell(30,6,$row['id_petugas'],1,0);
    $pdf->Cell(30,6,$row['status'],1,1);
}

$pdf->Output();
?>