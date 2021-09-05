<?php
include "koneksidb.php";
	if(isset($_POST["LoginPetugas"])){
		$user=$mysqli->escape_string($_POST["username"]);
		$pass=$mysqli->escape_string($_POST["password"]);
		$sql="SELECT * FROM tbl_petugas
			  WHERE username='$user' ";
		$res=$mysqli->query($sql);
		if(mysqli_num_rows($res) === 1){
	
				$data = mysqli_fetch_assoc($res);
				if( password_verify($pass, $data["password"])){
				session_start();
				$_SESSION["id_petugas"]			=$data["id_petugas"];
				$_SESSION["username_petugas"]	=$data["username"];
				$_SESSION["nama_petugas"]		=$data["nama"];
				header("Location: petugas/index.php");
			}
			else{
			echo "<script>window.alert('Username atau password salah!');
				  window.location.href=('administrator.php')
				  </script>";
			}
		}
		else{
			echo "<script>window.alert('Username atau password salah!');
				  window.location.href=('administrator.php')
				  </script>";
		}
	}


?>