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
$pdf->Cell(190,7,'Barang',0,1,'C');
$pdf->SetFont('times','B',14);

// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(40,7,'',0,1);

$pdf->SetFont('times','B',12);
$pdf->Cell(30,6,'Id Barang',1,0);
$pdf->Cell(30,6,'Nama Barang',1,0);
$pdf->Cell(30,6,'Tanggal',1,0);
$pdf->Cell(30,6,'Harga Awal',1,0);
$pdf->Cell(35,6,'Deskripsi Barang',1,1);
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($koneksi, "SELECT * FROM tb_barang");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(30,6,$row['id_barang'],1,0);
    $pdf->Cell(30,6,$row['nama_barang'],1,0);
    $pdf->Cell(30,6,$row['tgl'],1,0);
    $pdf->Cell(30,6,$row['harga_awal'],1,0);
    $pdf->Cell(35,6,$row['deskripsi_barang'],1,1);
}

$pdf->Output();
?>