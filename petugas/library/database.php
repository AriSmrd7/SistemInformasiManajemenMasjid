<?php
 $koneksi = new mysqli("localhost","root","","db_masjid");
 if(mysqli_connect_errno()){
	trigger_error("Koneksi ke Database gagal!");
 }
 ?>