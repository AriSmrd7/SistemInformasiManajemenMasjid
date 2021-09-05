<?php
include_once 'database.php';
include_once 'fungsi.php';

if(isset($_POST['tambah']))
{
//$id_user 	 = $_POST['id_user'];
$judul 	 	 = $_POST['judul'];
$jamawal 	 = $_POST['jamawal'];
$jamakhir 	 = $_POST['jamakhir'];
$tglawal 	 = $_POST['tglawal'];
$tglakhir 	 = $_POST['tglakhir'];
$keterangan  = $_POST['keterangan'];
session_start();
$idpetugas = $_SESSION['id_petugas'];

$tambah = $koneksi->prepare("INSERT INTO tbl_agenda(id_petugas,judul,jam_awal,jam_akhir,tgl_awal,tgl_akhir,keterangan)VALUES(?,?,?,?,?,?,?)");
$tambah->bind_param("sssssss",$idpetugas,$judul,$jamawal,$jamakhir,$tglawal,$tglakhir,$keterangan );

if($tambah->execute())
{
	echo "<script>window.alert('Berhasil Ditambah!');
		  window.location.href=('../index.php?m=contents&p=agenda')
		  </script>";
}
else
{
	echo "GAGAL TAMBAH DATA";
}
}
