<?php
include_once 'database.php';

$id 		= $_POST['id_petugas'];
$no_ktp 	= $_POST['no_ktp'];
$nama 		= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$no_hp		= str_replace(" ", "",$_POST['no_hp']);


$tambah = $koneksi->prepare("UPDATE tbl_petugas SET id_petugas = '$id', no_ktp='$no_ktp',nama='$nama',alamat='$alamat',no_hp='$no_hp' WHERE id_petugas='$id'");


if($tambah->execute())
{	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Data Berhasil DiUbah!');
          window.location.href='../index.php?m=contents&p=listdatapetugas';
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