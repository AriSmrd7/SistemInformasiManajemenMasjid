<?php
include "koneksidb.php";
	if(isset($_POST["LoginAdmin"])){
		$user=$mysqli->escape_string($_POST["username"]);
		$pass=$mysqli->escape_string($_POST["password"]);
		$sql="SELECT * FROM tbl_admin
			  WHERE username_admin='$user' and password_admin=password('$pass')";
		$res=$mysqli->query($sql);
		if($res){
			if($res->num_rows==1){
				$data=$res->fetch_assoc();
				session_start();
				$_SESSION["id_admin"]		=$data["id_admin"];
				$_SESSION["username_admin"]	=$data["username_admin"];
				$_SESSION["nama_admin"]		=$data["nama_admin"];
				header("Location: admin/index.php");
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