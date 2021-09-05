<?php
include_once 'database.php';
if(isset($_GET['id_petugas'])){
$tampil = $koneksi->prepare("SELECT id_petugas FROM tbl_petugas WHERE id_petugas='".$_GET['id_petugas']."' ");
$tampil->execute();
$tampil->store_result();
$tampil->bind_result($id_petugas);
while($tampil->fetch())
                {


$tambah = $koneksi->prepare("DELETE FROM tbl_petugas WHERE id_petugas='$id_petugas'");
}

if($tambah->execute())
{
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Data Berhasil Dihapus!');
          window.location.href='../index.php?m=contents&p=listdatapetugas';
       </script>");
}
else
{
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Gagal Menghapus,Karena Data Sedang Berelasi dengan table lainnya !');
          window.location.href='../ndex.php?m=contents&p=listdatapetugas';
       </script>");
}

}
?>