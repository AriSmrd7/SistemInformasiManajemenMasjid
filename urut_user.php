<?php

include "koneksidb.php";

	$conn = mysqli_connect("localhost", "root", "", "db_masjid");
$carikode = mysqli_query($conn, "SELECT max(id_user) from tbl_user") or die (mysqli_error());
  $datakode = mysqli_fetch_array($carikode);
  if ($datakode) {
   $coba = substr($datakode[0], 3);
   $jumlah_data = (int) $coba;
   $kode = $jumlah_data + 1;
   $newUSR = "US-".str_pad($kode, 3, "0", STR_PAD_LEFT);  
  } else {
   $newUSR = "US-001";
  }
?>
?>