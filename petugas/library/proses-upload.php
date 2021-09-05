<?php 
include "database.php";
if(isset($_POST['kirim'])){
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
session_start();
$idpetugas = $_SESSION['id_petugas'];
$tgl = date('Ymd');
$folder = "files/$nama_file";

if(move_uploaded_file($lokasi_file,"$folder")){

	echo "<script>window.alert('Berhasil diunggah!');
		  window.location.href=('../index.php?m=contents&p=album')
		  </script>";
	$query = $koneksi->query("INSERT INTO tbl_album (id_petugas,file_name,tgl_upload) VALUES ('$idpetugas','$nama_file','$tgl')");
}
else{
	echo "<script>window.alert('Gagal diunggah!');
		  window.location.href=('../index.php?m=contents&p=album')
		  </script>";
}
}

if(isset($_GET['del']))
{
 $SQL = $koneksi->query("DELETE FROM tbl_album WHERE id_album =".$_GET['del']);
 	echo "<script>
		  window.location.href=('index.php?m=contents&p=album')
		  </script>";
}

?>