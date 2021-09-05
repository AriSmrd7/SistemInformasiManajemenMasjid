<?php

include "functions.php";
$db = dbConnect();
// mencari kode barang dengan nilai paling besar
$carikode = mysqli_query($db, "SELECT max(id_kategori) from tbl_kategori") or die (mysqli_error());
  $datakode = mysqli_fetch_array($carikode);
  if ($datakode) {
   $coba = substr($datakode[0], 3);
   $jumlah_data = (int) $coba;
   $kode = $jumlah_data + 1;
   $id_kategori = "KT".str_pad($kode, 2, "0", STR_PAD_LEFT);  
  } else {
   $id_kategori = "KT01";
  }
?>