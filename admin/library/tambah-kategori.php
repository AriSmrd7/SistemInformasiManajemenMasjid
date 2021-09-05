<?php
include_once 'database.php';

$id_kategori = $_POST['id_kategori'];
$nama 	= $_POST['nama_kategori'];

$tambah = $koneksi->prepare("INSERT INTO tbl_kategori(id_kategori,nama_kategori)VALUES(?,?)");
$tambah->bind_param("ss",$id_kategori,$nama);

if($tambah->execute())
{
	echo "<script>window.alert('Data Berhasil Ditambah!');
		  window.location.href='../index.php?m=contents&p=listdatakategori';
		  </script>";
}
else
{
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('Gagal Menghapus,Karena Data Sedang Berelasi dengan table lainnya !');
          window.location.href='../index.php?m=contents&p=listdatakategori';
       </script>");
}

?>