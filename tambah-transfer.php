<?php
include_once 'koneksidb.php';
include_once 'fungsi.php';

if(isset($_POST['Submit']))
{
//$id_user 	  = $_POST['id_user'];
$id_transaksi = $_POST['id_transaksi'];
$id_kategori  = $_POST['id_kategori'];
//$tgl		  = $_POST['tglmasuk'];
$nominal	  = $_POST['nominal'];

$tambah = $mysqli->prepare("INSERT INTO tbl_sementaratrf(id_transfer,id_kategori,subtotal)VALUES(?,?,?)");
$tambah->bind_param("sss",$id_transaksi,$id_kategori,$nominal);

if($tambah->execute())
{
	echo "<script>window.alert('Berhasil Ditambah!');
		  window.location.href=('home.php')
		  </script>";
}
else
{
	echo "GAGAL TAMBAH DATA";
}
}
