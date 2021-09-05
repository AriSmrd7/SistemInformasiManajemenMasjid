<?php
if(isset($_POST['cetak'])){
date_default_timezone_set('Asia/Jakarta');
$db = mysqli_connect("localhost","root","","db_masjid");
require_once("../../library/fpdf17/fpdf.php");
require_once("../library/fungsi.php");
$tglawal = $_POST['tglawal'];
$tglakhir = $_POST['tglakhir'];
$result=mysqli_query($db,"SELECT id_pemasukan,tgl_pemasukan, totalbayar
						 FROM tbl_pemasukan where tgl_pemasukan BETWEEN '$tglawal' AND '$tglakhir' order by id_pemasukan asc") or die(mysqli_error());

//Inisiasi untuk membuat header kolom
$column_no = "";
$column_id_pemasukan = "";
$column_total_bayar= "";
$column_tgl_pemasukan = "";


//For each row, add the field to the corresponding column
$no=1;
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result))
{
	$no = $no++;
	$id_pemasukan     = $row["id_pemasukan"];
	$total_bayar   	  = $row["totalbayar"];
	$tgl_pemasukan	  = $row["tgl_pemasukan"];
 
	$column_no 			  = $column_no.$no++."\n";
	$column_id_pemasukan  = $column_id_pemasukan.$id_pemasukan."\n";
    $column_total_bayar   = $column_total_bayar.$total_bayar."\n";
    $column_tgl_pemasukan = $column_tgl_pemasukan.$tgl_pemasukan."\n";

//Create a new PDF file
$pdf = new FPDF('L','mm',array(360,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar

$pdf->SetFont('Arial','B',13);
$pdf->Cell(140);
$pdf->Cell(50,2,'DATA PEMASUKAN',0,0,'C');
$pdf->Ln();
$pdf->Cell(140);
$pdf->Cell(50,10,'Masjid Al-Ikhlas | SIMAS',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(180,180,180);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(115);
$pdf->Cell(12,8,'No',1,0,'C',1);

$pdf->SetX(127);
$pdf->Cell(25,8,'ID Pemasukan',1,0,'C',1);

$pdf->SetX(152);
$pdf->Cell(60,8,'Nominal',1,0,'C',1);

$pdf->SetX(212);
$pdf->Cell(30,8,'Tanggal',1,0,'C',1);

$pdf->SetX(242);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(115);
$pdf->MultiCell(12,6,$column_no,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(127);
$pdf->MultiCell(25,6,$column_id_pemasukan,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(152);
$pdf->MultiCell(60,6,$column_total_bayar,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(212);
$pdf->MultiCell(30,6,$column_tgl_pemasukan,1,'C');

$pdf->Output();
	}
	else{
		echo "<script>window.alert('Tidak Ada Data!');
				window.location.href=('../index.php?m=contents&p=laporan')
			 </script>";
	}
} 
else{
	echo "Cetak data GAGAL";
}?>