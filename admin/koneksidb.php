<?php
	define("HOST", "localhost"); 
	define("USER", "root");
	define("PASSWORD", ""); 
	define("DATABASE", "db_masjid");
	 
	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
		if($mysqli->connect_error){
		 trigger_error('Koneksi ke database GAGAL: ' . $mysqli->connect_error, E_USER_ERROR);   
		}
?>