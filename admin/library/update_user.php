<?php
include_once 'database.php';

$id 		= $_POST['id_user'];
$nama 		= $_POST['nama'];
$no_hp		= str_replace(" ", "",$_POST['no_hp']);
$alamat 	= $_POST['alamat'];
$bank 		= $_POST['bank'];
$no_rekening= $_POST['no_rekening'];
$username	= $_POST['username'];



$tambah = $koneksi->prepare("UPDATE tbl_user SET id_user = '$id', nama_user='$nama',nohp_user='$no_hp',alamat_user='$alamat',bank_user='$bank', rekening_user='$no_rekening' WHERE id_user='$id'");

if($tambah->execute())
{	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Data Berhasil DiUbah!');
          window.location.href='../index.php?m=contents&p=listdatauser';
       </script>");		  
}
else
{
		echo "<script> 
		alert('Data Tidak Lengkap & Valid');
		javascript:history.back();
	</script>";
}
?>