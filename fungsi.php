<?php

	function login($username, $password, $mysqli){
		// Menggunakan perintah prepared statement untuk menghindari SQL injection
	  if($stmt = $mysqli->prepare("SELECT id_user, password_user, nama_user, bank_user, rekening_user FROM tbl_user WHERE username_user = ?")){
			$stmt->bind_param('s', $username); // Menyimpan data inputan username ke variabel "$username"
			$stmt->execute(); // Menjalankan perintah query MySQL diatas
			$stmt->store_result();
			$stmt->bind_result($id_user, $dbpassword, $nama_user, $bank_user, $rekening_user); // Menyimpan nilai hasil query ke variabel
			$stmt->fetch();
		   
	  if($stmt->num_rows == 1){ // Jika user ada/ditemukan
			 if( password_verify($password, $dbpassword)){
				  // Jika sama buat SESSION id dan password
				 $_SESSION['id_user'] = $id_user;
				 $_SESSION['password'] = $dbpassword;
				 $_SESSION['nama_user'] = $nama_user;
				 $_SESSION['bank_user'] = $bank_user;
				 $_SESSION['rekening_user'] = $rekening_user;
				  // Login berhasil
				   return true;
				}else{
				  // Password tidak sesuai
					return false;   
				}
	   }else{
			  // User tidak ditemukan
			 return false;   
			}
	   }
	}
	
	function cek_login($mysqli){
		// Cek apakah semua variabel session ada / tidak
		if(isset($_SESSION['id_user'], $_SESSION['password'])){
					 return true;    
					}else{
					  // User tidak melakukan login
					   return false;   
					}
			   
    }
	
	function idtf(){
	$conn = mysqli_connect("localhost", "root", "", "db_masjid");
	$query  = "SELECT max(id_pemasukan) as maxID FROM tbl_pemasukan";
	$tampil = mysqli_query($conn,$query);
	$data   = mysqli_fetch_array($tampil);
	$idPM  = $data['maxID'];
	$noUrut  = (int) substr($idPM,3,3);
	$noUrut++;
	
	$char    = "TF";
	$newPM   = $char.sprintf("-%03s", $noUrut); 

	echo $newPM;
	}
	
?>