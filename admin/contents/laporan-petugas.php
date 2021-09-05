<?php
require "../../library/fpdf17/fpdf.php";
include "../functions.php";

if(isset($_POST['cetak'])){
$db=dbConnect();
$data = array();
$sql = mysqli_query($db, "SELECT id_petugas,nama,no_ktp,alamat,no_hp FROM tbl_petugas"); 
while ($row = mysqli_fetch_assoc($sql)) 
	{array_push($data, $row);}


$judul = "LAPORAN DATA PEGAWAI";
$header = array(
		array("label"=>"ID", "length"=>15, "align"=>"L"),
		array("label"=>"Nama", "length"=>50, "align"=>"L"),
		array("label"=>"No KTP", "length"=>35, "align"=>"L"),
		array("label"=>"Alamat", "length"=>65, "align"=>"L"),		
		array("label"=>"No HP", "length"=>28, "align"=>"L")

	);


$pdf = new FPDF();
$pdf-> AddPage();

$pdf->SetFont('Arial','B','16');
$pdf->Cell(0,20, $judul, '0', 1, 'C');
 
#buat header tabel
$pdf->SetFont('Arial','','10');
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
foreach ($header as $kolom) {
	$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0', $kolom['align'], true);
}
$pdf->Ln();


#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
	$i = 0;
	foreach ($baris as $cell) {
		$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0', $kolom['align'], $fill);
		$i++;
	}
	$fill = !$fill;
	$pdf->Ln();
}
 
#output file PDF
$pdf->Output();
}	
	else{
		echo "<script>window.alert('Tidak Ada Data!');
				window.location.href=('../index.php?m=contents&p=laporan')
			 </script>";
	}
 ?>