<?php
include_once 'database.php';
include_once 'fungsi.php';

if(isset($_POST['proses']))
{
$idpm 	 	 = $_POST['idpm'];
$nama		 = $_POST['nama'];
$tgl	 	 = $_POST['tgl']; 
session_start();
$idpetugas = $_SESSION['id_petugas'];

$res = $koneksi->query("SELECT sum(jumlah) as total from tbl_sementara");
while($row=$res->fetch_array())
{
	$tot=$row['total'];
	$tambah = $koneksi->prepare("INSERT INTO tbl_pemasukan(id_petugas,id_pemasukan,nama,tgl_pemasukan,totalbayar)VALUES(?,?,?,?,?)");
	$tambah->bind_param("sssss",$idpetugas,$idpm,$nama,$tgl,$tot);
}
if($tambah->execute())
{
		$res = $koneksi->query("SELECT id_pemasukan,id_kategori,jumlah from tbl_sementara");
		while($r=$res->fetch_row())
		{
			 $koneksi->query("insert into tbl_detailpemasukan(id_pemasukan,id_kategori,jumlah)
                        values('$r[0]','$r[1]','$r[2]')");
		}
		  //hapus seluruh isi tabel sementara
        $koneksi->query("truncate table tbl_sementara");
        echo "<script>window.alert('Transaksi Berhasil');
        window.location=('../index.php?m=contents&p=view-pembayaran')</script>";
}
else
{
	echo "GAGAL TAMBAH DATA";
}
}
