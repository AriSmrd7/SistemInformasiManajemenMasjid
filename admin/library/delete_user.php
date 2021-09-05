<?php
include_once 'database.php';
if(isset($_GET['id_user'])){
$tampil = $koneksi->prepare("SELECT id_user FROM tbl_user WHERE id_user='".$_GET['id_user']."' ");
$tampil->execute();
$tampil->store_result();
$tampil->bind_result($id_user);
while($tampil->fetch())
                {


$tambah = $koneksi->prepare("DELETE FROM tbl_user WHERE id_user='$id_user'");
}

if($tambah->execute())
{
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Data Berhasil DiHapus!');
          window.location.href='../index.php?m=contents&p=listdatauser';
       </script>");
}
else
{
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('Gagal Menghapus,Karena Data Sedang Berelasi dengan table lainnya !');
          window.location.href='../index.php?m=contents&p=listdatauser';
       </script>");
}

}
?>