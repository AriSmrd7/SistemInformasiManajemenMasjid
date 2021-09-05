<?php
include_once 'database.php';

$id_user 	 = $_POST['iduser'];
$id_kategori = $_POST['idkat'];
$tgl		 = $_POST['tgl'];
$nominal	 = $_POST['jml'];

$tambah = $koneksi->prepare("INSERT INTO tbl_pemasukan(id_user,id_kategori,tgl_pemasukan,nominal)VALUES(?,?,?,?)");
$tambah->bind_param("ssss",$id_user,$id_kategori,$tgl,$nominal);

if($tambah->execute())
{	
$id = $_POST['idtrans'];
$hps = $koneksi->query("DELETE FROM tbl_transfer where id_transfer='$id'");

	echo "<script>window.alert('Berhasil Dikonfirmasi!');
		  window.location.href=('../index.php?m=contents&p=cek-transfer')
		  </script>";
}
else
{
	echo "GAGAL KONFIRMASI TRANSFER";
}

?>