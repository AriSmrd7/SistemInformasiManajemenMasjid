<?php
if(isset($_POST['cetak'])){
date_default_timezone_set('Asia/Jakarta');
$db = mysqli_connect("localhost","root","","db_masjid");
require('../../library/fpdf17/fpdf.php');
require('../library/fungsi.php');
$tglawal = $_POST['tglawal'];
$tglakhir = $_POST['tglakhir'];
$result=mysqli_query($db,"SELECT id_pengeluaran,tbl_kategori.nama_kategori,nominal,keterangan,tgl_pengeluaran 
				FROM tbl_pengeluaran JOIN tbl_kategori USING(id_kategori) 
				where tgl_pengeluaran BETWEEN '$tglawal' AND '$tglakhir'
				order by id_pengeluaran ASC") or die(mysqli_error());

//Inisiasi untuk membuat header kolom
$column_no = "";
$column_id_pengeluaran = "";
$column_nama_kategori= "";
$column_nominal = "";
$column_keterangan = "";
$column_tgl_pengeluaran= "";


//For each row, add the field to the corresponding column
$no=1;
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result))
{
	$no = $no++;
	$id_pengeluaran      = $row["id_pengeluaran"];
	$nama_kategori   	 = $row["nama_kategori"];
	$nominal   	 		 = $row["nominal"];
	$keterangan   	  	 = $row["keterangan"];
	$tgl_pengeluaran	 = $row["tgl_pengeluaran"];
 
	$column_no 			   = $column_no.$no++."\n";
	$column_id_pengeluaran = $column_id_pengeluaran.$id_pengeluaran."\n";
    $column_nama_kategori  = $column_nama_kategori.$nama_kategori."\n";
    $column_nominal		   = $column_nominal.$nominal."\n";
    $column_keterangan     = $column_keterangan.$keterangan."\n";
    $column_tgl_pengeluaran= $column_tgl_pengeluaran.$tgl_pengeluaran."\n";

//Create a new PDF file
$pdf = new FPDF('L','mm',array(360,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar

$pdf->SetFont('Arial','B',13);
$pdf->Cell(140);
$pdf->Cell(50,2,'DATA PENGELUARAN',0,0,'C');
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
$pdf->SetX(65);
$pdf->Cell(12,8,'No',1,0,'C',1);

$pdf->SetX(77);
$pdf->Cell(25,8,'ID Pengeluaran',1,0,'C',1);

$pdf->SetX(102);
$pdf->Cell(60,8,'Kategori',1,0,'C',1);

$pdf->SetX(162);
$pdf->Cell(30,8,'Nominal',1,0,'C',1);

$pdf->SetX(192);
$pdf->Cell(60,8,'Keterangan',1,0,'C',1);

$pdf->SetX(252);
$pdf->Cell(50,8,'Tanggal',1,0,'C',1);

$pdf->SetX(302);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(65);
$pdf->MultiCell(12,6,$column_no,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(77);
$pdf->MultiCell(25,6,$column_id_pengeluaran,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(102);
$pdf->MultiCell(60,6,$column_nama_kategori,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(162);
$pdf->MultiCell(30,6,$column_nominal,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(192);
$pdf->MultiCell(60,6,$column_keterangan,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(252);
$pdf->MultiCell(50,6,$column_tgl_pengeluaran,1,'C');

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