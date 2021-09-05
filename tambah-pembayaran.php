<?php
//script php dimodifikasi berdasarkan script
//http://www.phpeasystep.com/phptu/18.html

//koneksi ke database
include 'koneksidb.php';
include_once 'fungsi.php';

//menangkap posting dari field input form


$id_user 	  = $_POST['id_user'];
$id_transaksi = $_POST['idtrx'];
$tgl		  = $_POST['tgl'];
$bank      	  = $_POST['bank'];
$rekening	  = $_POST['rekening'];
$nama	      = $_POST['nama_user'];
$status		  = $_POST['status'];
$lokasi_file  = $_FILES['file']['tmp_name'];
$nama_file    = $_FILES['file']['name'];
$folder       = "petugas/library/files/$nama_file";

if (!empty($_FILES["file"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['file']['type']; //memeriksa format gambar
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $lampiran = basename($_FILES['file']['name']);  
        
        //mengupload gambar dan update row table database dengan path folder dan nama image		
        if(move_uploaded_file($lokasi_file,"$folder")){
			$res = $mysqli->query("SELECT sum(subtotal) as total from tbl_sementaratrf");
			while($row=$res->fetch_array())
			{
				$tot=$row['total'];
				$tambah = $mysqli->prepare("INSERT INTO tbl_transfer(id_transfer,id_user,nama,no_rekening,nama_bank,jumlah,tgl_transfer,image,status)VALUES(?,?,?,?,?,?,?,?,?)");
				$tambah->bind_param("sssssssss",$id_transaksi,$id_user,$nama,$rekening,$bank,$tot,$tgl,$lampiran,$status);
			}
			if($tambah->execute())
			{
				$ress = $mysqli->query("SELECT id_transfer,id_kategori,subtotal from tbl_sementaratrf");
				while($r=$ress->fetch_row())
				{
				$mysqli->query("insert into tbl_detailtransfer
                        values('$r[0]','$r[1]','$r[2]')");
				}

			$mysqli->query("truncate table tbl_sementaratrf");
			echo "<script>window.alert('Transaksi Berhasil');
				window.location=('home.php')</script>";
			}
			else {
				echo "Salah";
			}
		}
   } else {
        echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
   }
} else {
    echo "Anda belum memilih gambar";
}

?>

		<br/>
		<br/>
		<a href="home.php"><b>Kembali<b></a>
		<br/>
		<br/>

		
	</body>
</html>