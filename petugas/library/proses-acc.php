<?php
include_once 'database.php';
session_start();
$id_trans 	 = $_POST['idtrans'];
$id_user 	 = $_POST['iduser'];
$nama 		 = $_POST['nama'];
$tgl		 = $_POST['tgl'];
$nominal	 = $_POST['jml'];

$petugas     = $_SESSION['id_petugas'];
$tambah = $koneksi->prepare("INSERT INTO tbl_pemasukan(id_pemasukan,id_user,nama,id_petugas,tgl_pemasukan,totalbayar)VALUES(?,?,?,?,?,?)");
$tambah->bind_param("ssssss",$id_trans,$id_user,$nama,$petugas,$tgl,$nominal);


if($tambah->execute())
{	
$id = $_POST['idtrans'];
$res = $koneksi->query("SELECT id_transfer,id_kategori,jumlah from tbl_detailtransfer where id_transfer='$id' ");
while($r=$res->fetch_row())
{
	 $koneksi->query("insert into tbl_detailpemasukan(id_pemasukan,id_kategori,jumlah)
                        values('$r[0]','$r[1]','$r[2]')");
}
	$koneksi->query("update tbl_transfer SET status='sukses' "); 
	echo "<script>window.alert('Berhasil Dikonfirmasi!');
		  window.location.href=('../index.php?m=contents&p=cek-transfer')
		  </script>";
}
else
{
	echo "GAGAL KONFIRMASI TRANSFER";
}

?>