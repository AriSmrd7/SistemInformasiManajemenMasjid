<?php
if(isset($_POST['cetak'])){
date_default_timezone_set('Asia/Jakarta');
$db = mysqli_connect("localhost","root","","db_masjid");
require('../library/fpdf17/fpdf.php');
require('../library/fungsi.php');
$result=mysqli_query($db,"SELECT tbl_kategori.nama_kategori, tbl_dana.total 
						  FROM tbl_dana JOIN tbl_kategori USING(id_kategori) 
						  order by id_dana asc") or die(mysqli_error());

//Inisiasi untuk membuat header kolom
$column_no = "";
$column_nama_kategori = "";
$column_total= "";


//For each row, add the field to the corresponding column
$no=1;
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result))
{
	$no = $no++;
	$nama_kategori     = $row["nama_kategori"];
	$total   	       = $row["total"];
 
	$column_no 			  = $column_no.$no++."\n";
	$column_nama_kategori = $column_nama_kategori.$nama_kategori."\n";
    $column_total		  = $column_total.$total."\n";

//Create a new PDF file
$pdf = new FPDF('L','mm',array(360,210)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar

$pdf->SetFont('Arial','B',13);
$pdf->Cell(140);
$pdf->Cell(50,2,'KAS MASJID',0,0,'C');
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
$pdf->Cell(50,8,'Kategori',1,0,'C',1);

$pdf->SetX(177);
$pdf->Cell(60,8,'Nominal',1,0,'C',1);

$pdf->SetX(237);
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
$pdf->MultiCell(50,6,$column_nama_kategori,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(177);
$pdf->MultiCell(60,6,$column_total,1,'L');

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