<?php
include_once 'database.php';


$id 		= $_POST['id_petugas'];
$no_ktp 	= $_POST['no_ktp'];
$nama 		= $_POST['nama_petugas'];
$alamat 	= $_POST['alamat'];
$no_hp		= str_replace(" ", "",$_POST['no_hp']);
$username	= $_POST['username'];
$password 	= $_POST['password'];
$password2   = $_POST['password2'];
if( $password !== $password2) {
	echo "<script> 
		alert('konfirmasi password tidak sesuai');
		javascript:history.back();
	</script>";
	}
else{
$tambah = $koneksi->prepare("INSERT INTO tbl_petugas(id_petugas,no_ktp,nama,alamat,no_hp,username,password)VALUES(?,?,?,?,?,?,?)");
$tambah->bind_param("sssssss",$id,$no_ktp,$nama,$alamat,$no_hp,$username,$password);

if($tambah->execute())
{
	echo "<script>window.alert('Data Berhasil Ditambah!');
		  javascript:history.back();
		  </script>";
}
else
{
	echo "GAGAL TAMBAH DATA";
}
}
?>