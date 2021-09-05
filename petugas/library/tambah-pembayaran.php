<?php
include_once 'database.php';
include_once 'fungsi.php';

if(isset($_POST['tambah']))
{
//$id_user 	 = $_POST['id_user'];
$idpm 	 	 = $_POST['idpm'];
$id_kategori = $_POST['id_kategori'];
//$tgl		 = $_POST['tglmasuk'];
$nominal	 = $_POST['nominal'];

$tambah = $koneksi->prepare("INSERT INTO tbl_sementara(id_pemasukan,id_kategori,jumlah)VALUES(?,?,?)");
$tambah->bind_param("sss",$idpm,$id_kategori,$nominal);

if($tambah->execute())
{
	echo "<script>window.alert('Berhasil Ditambah!');
		  window.location.href=('../index.php?m=contents&p=input-pembayaran')
		  </script>";
}
else
{
	echo "GAGAL TAMBAH DATA";
}
}
