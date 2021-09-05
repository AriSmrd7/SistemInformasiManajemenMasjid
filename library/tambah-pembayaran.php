<?php
include_once 'database.php';
include 'koneksidb.php';

//menangkap posting dari field input form
$id_user 	  = $_POST['id_user'];
$id_transaksi = $_POST['id_transaksi'];
$id_kategori  = $_POST['id_kategori'];
$tgl		  = $_POST['tgl'];
$jumlah	      = $_POST['jumlah'];
$bank      	  = $_POST['bank'];
$rekening	  = $_POST['rekening'];
$nama	      = $_POST['nama_user'];
$nama_file = $_FILES['file']['name'];
$ukuran_file = $_FILES['file']['size'];
$tipe_file = $_FILES['file']['type'];
$tmp_file = $_FILES['file']['tmp_name'];
$status   = "tertunda";
$path = "file/".$nama_file;
if($tipe_file == "file/jpg" || $tipe_file == "file/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 1044070){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    
	// Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      
	  // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $query = "INSERT INTO tbl_transfer (id_transfer,id_user,nama,no_rekening,nama_bank,jumlah,tgl_transfer,id_kategori,gambar,status)
					VALUES ('$nama','$id_transaksi','$id_user','$nama','$rekening','$bank','$jumlah','$tgl','$id_kategori','$nama_file','$status')";
      $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      
	  // Jika Sukses, Lakukan :
        header("location: home.php"); // Redirectke halaman index.php
      }else{
       
	   // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='home.php'>Kembali Ke Form</a>";
      }
    }else{
      
	  // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='home.php'>Kembali Ke Form</a>";
    }
  }else{
    
	// Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
    echo "<br><a href='home.php'>Kembali Ke Form</a>";
  }
}else{
  
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
  echo "<br><a href='home.php'>Kembali Ke Form</a>";
}
?>