<?php
include_once 'database.php';

$id 		= $_POST['id_user'];
$nama 		= $_POST['nama_user'];
$alamat 	= $_POST['alamat_user'];
$no_hp		= str_replace(" ", "",$_POST['nohp_user']);
$username	= strtolower(stripslashes($_POST['username']));
$password 	= $_POST['password'];
$password2   = $_POST['password2'];

if( $password !== $password2) {
	echo "<script> 
		alert('konfirmasi password tidak sesuai');
		javascript:history.back();
	</script>";
	}
else{
$password = password_hash($password, PASSWORD_DEFAULT);	
$tambah = $koneksi->prepare("INSERT INTO tbl_user(id_user,nama_user,nohp_user,alamat_user,username_user,password_user)VALUES(?,?,?,?,?,?)");
$tambah->bind_param("ssssss",$id,$nama,$no_hp,$alamat,$username,$password);

if($tambah->execute())
{
	echo "<script>window.alert('User Berhasil Ditambah!');
		  window.location.href='../index.php?m=contents&p=listdatauser';
		  </script>";
}
else
{
		echo "<script> 
		alert('Data Tidak Lengkap & Valid');
		javascript:history.back();
	</script>";
}
}
?>