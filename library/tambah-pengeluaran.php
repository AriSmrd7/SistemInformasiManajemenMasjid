<?php
include_once 'database.php';

$idpg		 = $_POST['idpg'];
$idkat		 = $_POST['id_kategori'];
$ket		 = $_POST['ket'];
$tgl		 = $_POST['tgl'];
$nominal	 = $_POST['nominal'];

$tambah = $koneksi->prepare("INSERT INTO tbl_pengeluaran(id_pengeluaran,id_kategori,keterangan,tgl_pengeluaran,nominal)VALUES(?,?,?,?,?)");
$tambah->bind_param("sssss",$idpg,$idkat,$ket,$tgl,$nominal);

if($tambah->execute())
{
	echo "<script>window.alert('Berhasil!');
		  window.location.href=('../index.php?m=contents&p=input-pengeluaran')
		  </script>";
}
else
{
	echo "GAGAL TAMBAH DATA";
}
?>