<?php

include "koneksidb.php";

$conn = mysqli_connect("localhost", "root", "", "db_masjid");
$tampil = $koneksi->prepare("SELECT * FROM tbl_transfer");
	$tampil->execute();
	$tampil->store_result();
	if($tampil->num_rows()==0){
	$query  = "SELECT max(id_pemasukan) as maxID FROM tbl_pemasukan";
	$tampil = mysqli_query($conn,$query);
	$data   = mysqli_fetch_array($tampil);
	$idTF  = $data['maxID'];
	$noUrut  = (int) substr($idTF,3,3);
	$noUrut++;
	
	$char    = "PM";
	$newTF   = $char.sprintf("-%03s", $noUrut); 
	}
	else{
	$query  = "SELECT max(id_transfer) as maxID FROM tbl_transfer";
	$tampil = mysqli_query($conn,$query);
	$data   = mysqli_fetch_array($tampil);
	$idTF  = $data['maxID'];
	$noUrut  = (int) substr($idTF,3,3);
	$noUrut++;
	
	$char    = "PM";
	$newTF   = $char.sprintf("-%03s", $noUrut); 
	}
													

?>