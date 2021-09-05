<?php 

include('fungsi.php');
include_once "library/database.php";
include_once "library/fungsi.php"; 
require_once("urut_transaksi.php");
 
	session_start(); 
	if(cek_login($mysqli) == false){
	 echo "<script>window.alert('Anda harus login dulu!');
					window.location.href=('index.php')
		   </script>";
	 exit(); 
	}
	
	if( !isset($_SESSION['id_user'])){
	header("location: index.php");
	exit;	
	}
	
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Selamat Datang - Masjid Al-Ikhlas</title>
        
<!-- 

Sentra Template

http://www.templatemo.com/tm-518-sentra

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="assets/apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/fontAwesome.css">
        <link rel="stylesheet" href="assets/css/light-box.css">
        <link rel="stylesheet" href="assets/css/owl-carousel.css">
        <link rel="stylesheet" href="assets/css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>



        <header class="nav-down responsive-nav hidden-lg hidden-md">
          <!-- untuk memanggil header.php-->
		 <?php  require_once "header.php"; ?>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
           <!-- untuk memanggil sidebar.php-->
		 <?php  require_once "sidebar.php"; ?>
        </div>

        <div class="slider">
           <!-- untuk memanggil sidebar.php-->
		 <?php  require_once "slider.php"; ?>		
        </div>


        <div class="page-content">
            <section id="featured" class="content-section">
                <div class="section-heading">
                    <h1><!--<php echo $_SESSION['username'];?>,--> Agenda Kegiatan<br><em>Masjid Al-Ikhlas</em></h1>
                    <p>Alhamdulillah, kami ucapkan terimakasih atas
                    <br>Nikmat Allah yang Maha Kuasa.</p>
                </div>
                <div class="table-responsive">
										<table class="table table-condesed table-bordered table-hover">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Kegiatan</th>
													<th>Waktu</th>
													<th>Tanggal</th>
													<th>Keterangan</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$i = 1;
												$tampil = $koneksi->prepare("SELECT id_agenda,judul,jam_awal,jam_akhir,tgl_awal,tgl_akhir,keterangan from tbl_agenda where tgl_awal = CURDATE()");
												$tampil->execute();
												$tampil->store_result();
												$tampil->bind_result($id, $judul, $jamawal, $jamakhir, $tglawal, $tglakhir, $ket);
												if($tampil->num_rows()==0){
												echo "<tr align='center' bgcolor='pink'><td  colspan='6'><b>BELUM ADA DATA!</b></td></tr>";
												}else{
												while($tampil->fetch())
												{
											?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $judul;?></td>
													<td><?php echo $jamawal." s/d ".$jamakhir;?></td>
													<td><?php echo $tglawal." s/d ".$tglakhir;?></td>
													<td><?php echo $ket;?></td>
												</tr>
											<?php
												}
												}
											?>
											</tbody>
										</table>
									</div>	
									
									<div class="table-responsive">
										<table class="table table-bordered table-condesed">
											<thead>
												<tr>
													<th width="1%">No</th>
													<th>Foto</th>
													<th>Tanggal Upload</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$i = 1;
												$tampil = $koneksi->prepare("SELECT id_album,file_name,tgl_upload FROM tbl_album");
												$tampil->execute();
												$tampil->store_result();
												$tampil->bind_result($id, $nama,$tgl);
												if($tampil->num_rows()==0){
												echo "<tr align='center' bgcolor='pink'><td  colspan='10'><b>BELUM ADA DATA!</b></td></tr>";
												}else{
												while($tampil->fetch())
													
												{
											?>
												<tr>
												<form method="get" action="library/proses-upload.php">
													<td><?php echo $i++;?></td>
													<td><img src="petugas/library/files/<?php echo $nama;?>" width="auto" height="150"></td>
													<td><?php echo $tgl;?></td>
												</form>
												</tr>
											<?php
												}
												}
											?>
											</tbody>
										</table>
									</div>
            </section>
			
			<section id="projects" class="content-section">
                <div class="section-heading">
                    <h1>Jadwal<br><em>Adzan</em></h1>
                    <p>Alhamdulillah, kami ucapkan terimakasih atas
                    <br>Nikmat Allah yang Maha Kuasa.</p>
                <div class="section-content">
                    <div class="masonry">
                        <div class="row">
                            <div class="item">
                                <div class="col-md-12">
                                    <iframe src="https://www.jadwalsholat.org/adzan/monthly.php?id=14" height="900" width="430" frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </section>
			
			<section id="datakeuangan" class="content-section">
                <div class="section-heading">
                    <h1>Data Keuangan<br><em>Masjid Al-Ikhlas</em></h1>
                    <p>Alhamdulillah, kami ucapkan terimakasih atas
                    <br>Nikmat Allah yang Maha Kuasa.</p>
				<div>
				<br>
				</div>
                <div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									Data uang yang masuk ke kas masjid
								</div>
								<div class="icons"><i class="icon-money"></i></div>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                        href="#collapse2">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </header>
								<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="default">
                                            <th>ID Transaksi</th>
                                            <th>Tanggal</th>
                                            <th>Nominal</th>
                                        </tr>
                                    </thead>

									<?php
										$tampil = $koneksi->prepare("SELECT id_pemasukan, tgl_pemasukan, totalbayar from tbl_pemasukan order by id_pemasukan desc");
										$tampil->execute();
										$tampil->store_result();
										$tampil->bind_result($id,$tgl,$tot);
										while($tampil->fetch())
										{
									
									 ?>
                                    <tbody>
                                        <tr>
                                            <td width="13%"><?php echo $id; ?></td>
                                            <td width="13%"><?php echo $tgl; ?></td>
											<td width="17%"><?php echo rupiah($tot);?></td>
                                        </tr>
										   <?php } ?>
									</tr>
								   </tbody>								   
                                </table>
								</div>
						</div>
					</div>
            </div>
			<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									Data uang yang keluar dari kas masjid
								</div>
								<div class="panel-body">
									<!-- FORM SEARCH -->
                                        <!--<div class="row">
                                        <div class="col-xs-9">
                                            &nbsp;
                                        </div> 
										<div class="col-lg-3 form-group input-group">
                                            <input type="text" placeholder="ketikkan sesuatu..." class="form-control" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                        </div>-->
									<!-- END FORM SEARCH -->
									<div class="table-responsive">
										<table class="table table-condesed table-bordered table-hover">
											<thead>
												<tr>
													<th width="1%">No</th>
													<th width="6%">ID Transaksi</th>
													<th width="10%">Nominal</th>
													<th width="15%">Tanggal</th>
													<th width="30%">Keterangan</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$i = 1;
												$tampil = $koneksi->prepare("SELECT id_pengeluaran,nominal,tgl_pengeluaran,keterangan FROM tbl_pengeluaran");
												$tampil->execute();
												$tampil->store_result();
												$tampil->bind_result($id, $jml, $tgl, $ket);
												if($tampil->num_rows()==0){
												echo "<tr align='center' bgcolor='pink'><td  colspan='10'><b>BELUM ADA DATA!</b></td></tr>";
												}else{
												while($tampil->fetch())
												{
											?>
												<tr>
													<td><?php echo $i++;?></td>
													<td><?php echo $id;?></td>
													<td><?php echo rupiah($jml);?></td>
													<td><?php echo $tgl;?></td>
													<td class="text-danger"><?php echo $ket;?></td>
												</tr>
											<?php
												}
												}
											?>
											</tbody>
										</table>
									</div>
										
								</div>
							</div>
						</div>
					</div>
            </div>
            </section>
			
			<section id="donate" class="content-section">
                <div class="section-heading">
                    <h1>Donasi<br><em>Sedekah</em></h1>
                    <p>Alhamdulillah, kami ucapkan terimakasih atas
                    <br>Nikmat Allah yang Maha Kuasa.</p>
                </div>
				<div style="border:0; padding:10px; width:760px; height:auto; text-align:left;">
					<form action="tambah-transfer.php" method="POST" enctype="multipart/form-data">
						<table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
							<tr height="46">
								<td width="10%"> </td>
								<td width="25%"> </td>
								<td width="65%"><font size="4"><b>Form Donasi/Sedekah</b></font></td>
							</tr>
							<tr height="46">
								<td> </td>
								<td>ID Transaksi</td>
								<td><input name="id_transaksi" type="text" value="<?php echo $newTF;?>" class="form-control"  readonly /></td>
							</tr>
							<tr height="46">
								<td> </td>
								<td>ID User</td>
								<td><input type="text" name="id_user" size="35" maxlength="6" value="<?php echo $_SESSION["id_user"]; ?>" class="form-control" readonly="readonly"/></td>
							</tr>
							<tr height="46">
								<td> </td>
								<td>Nama User</td>
								<td><input type="text" name="nama_user" size="35" maxlength="6" value="<?php echo $_SESSION["nama_user"]; ?>" class="form-control" readonly="readonly"/></td>
							</tr>
							<tr height="46">
								<td> </td>
								<td>Bank</td>
								<td><input name="bank" type="text" value="<?php echo $_SESSION["bank_user"];?>" class="form-control"   /></td>
							</tr>
							<tr height="46">
								<td> </td>
								<td>Rekening</td>
								<td><input name="rekening" type="text" value="<?php echo $_SESSION["rekening_user"];?>" class="form-control"   /></td>
							</tr>
							<tr height="46">
								<td> </td>
								<td>Tanggal</td>
								<td><input type="text" name="tgl"  class="form-control"  value="<?php echo date('Y-m-d');?>" required readonly /></td>
							</tr>
							<tr height="46">
								<td> </td>
								<td>Jenis</td>
								<td>
									<select name="id_kategori" class="form-control" >
											<?php
												$tampil = $koneksi->prepare("SELECT id_kategori,nama_kategori FROM tbl_kategori");
												$tampil->execute();
												$tampil->store_result();
												$tampil->bind_result($id_kat, $kategori);
												while($tampil->fetch())
												{
											?>
													<option value="<?php echo $id_kat;?>"><?php echo $kategori;?></option>
											<?php
													}
											?>
									</select>
								</td>
							</tr>
							<tr height="46">
								<td> </td>
								<td>Jumlah</td>
								<td>
								<input type="text" name="nominal" onkeypress="return hanyaAngka(event, false)" class="form-control"  required />								
								</td>
							</tr>
							<tr height="50">
							<td> <br> </td>
							<td>
							<br>
							<tr height="46">
								<td> </td>
								<td> </td>
								<td>
								<input type="submit" name="Submit" id="Submit" value="Submit" class="btn btn-grad btn-md btn-primary">
								</td>
							</tr>
						</table>
					</form>
					<br><br>
						<div style="border:0; padding:10px; width:825px; height:auto; text-align:left;">
                                <table width="700" border="1" align="center" cellpadding="0" cellspacing="0">
                                    <thead>
                                        <tr class="default">
                                            <th>ID Kategori</th>
                                            <th>Kategori</th>
                                            <th>Nominal</th>
                                        </tr>
                                    </thead>

									<?php
										$tampil = $koneksi->prepare("SELECT tbl_kategori.id_kategori,tbl_kategori.nama_kategori,tbl_sementaratrf.subtotal FROM tbl_sementaratrf
										JOIN tbl_kategori USING (id_kategori)");
										$tampil->execute();
										$tampil->store_result();
										$tampil->bind_result($id,$nm,$jml);
										while($tampil->fetch())
										{
									
									 ?>
                                    <tbody>
                                        <tr>
                                            <td width="13%"><?php echo $id; ?></td>
                                            <td width="13%"><?php echo $nm; ?></td>
											<td width="17%">Rp. <?php echo str_replace(",",".",number_format($jml,0));?></td>
                                        </tr>
										   <?php } ?>

									<?php
									$res = $koneksi->query("SELECT sum(subtotal) as total from tbl_sementaratrf");
									while($row=$res->fetch_array())
									{	
									 ?>
									 <tr class="info">
									 <td colspan='2'> Total</td>
									 <td><b>
									 <form method="post" action="print.php">
									 <input class="form-control" type="text" name="gtotal" readonly value="Rp. <?php echo str_replace(",",".",number_format($row['total'],0));?>"/>
									 </form>
									 </b></td>
									<?php } ?>
									</tr>
								   </tbody>								   
                                </table>	
								<form method="POST" action="tambah-pembayaran.php" enctype="multipart/form-data">
								<div class="form-group">
								<br>
								<b>Bukti Pembayaran</b><br/>
									<input type="file" name="file">
									</td>
									</tr>
								</div>
							<?php
								$tampil = $koneksi->prepare("SELECT max(id_pemasukan) as idtrx FROM tbl_pemasukan");
								$tampil->execute();
								$tampil->store_result();
								$tampil->bind_result($idtrx);
								while($tampil->fetch())
								{
								?>
									<input type="hidden" value="<?php echo $newTF;?>" name="idtrx"/>
									<input type="hidden" name="id_user" size="35" maxlength="6" value="<?php echo $_SESSION["id_user"]; ?>" class="form-control" readonly="readonly"/>
									<input type="hidden" name="nama_user" size="35" maxlength="6" value="<?php echo $_SESSION["nama_user"]; ?>" class="form-control" readonly="readonly"/>
									<input type="hidden" name="tgl"  class="form-control"  value="<?php echo date('Y-m-d');?>" required readonly />
									<input type="hidden" name="bank" value="<?php echo $_SESSION["bank_user"];?>" class="form-control"/>
									<input type="hidden" name="rekening" value="<?php echo $_SESSION["rekening_user"];?>" class="form-control"/>
									<?php
									$res = $koneksi->query("SELECT sum(subtotal) as total from tbl_sementaratrf");
									while($row=$res->fetch_array())
									{	
									 ?>
									<input class="form-control" type="hidden" name="gtotal" readonly value="<?php echo str_replace(",",".",number_format($row['total'],0));?>"/>
									<input type="hidden" name="status" value="<?php echo "tertunda";?>" class="form-control"/>
									<?php } ?>
								<?php
								}
								?>
								<center><button type="submit" name="lanjutkan" class="btn btn-lg btn-primary" > <i class="fa fa-save fa-fw"></i>&nbsp;Proses</a></center>												
							</div>
							</form>
				</div> 				
            </section>
			
			<section id="contact" class="content-section">
                <div class="section-heading">
                    <h1>Hubungi<br><em>Kami</em></h1>
                    <p>Alhamdulillah, kami ucapkan terimakasih atas
                    <br>Nikmat Allah yang Maha Kuasa.</p>
                </div>
                <div style="border:0; padding:10px; width:760px; height:auto; text-align:left;">
					<form action="action-input-data.php" method="POST" name="form-input-data">
						<table width="760" border="2" align="center" cellpadding="0" cellspacing="0">
							<tr height="46">
								<td>&nbsp;Whatsapp</td>
								<td>&nbsp;+62 812-2087-5262</td>
							</tr>
							<tr height="46">
								<td>&nbsp;Line</td>
								<td>&nbsp;@MasjidAlIkhlas</td>
							</tr>
					</form>
				</div>            
            </section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="assets/js/vendor/bootstrap.min.js"></script>
    
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

	<script language="javascript">
	function hanyaAngka(e,decimal){
		var key;
		var keychar;
		if(window.event){
			key = window.event.keyCode;
		}else
			if(e){
				key = e.which;
			}else return true;
			
			keychar = String.fromCharCode(key);
			if((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27)){
				return true;
			}else
				if((("0123456789").indexOf(keychar)>-1)){
					return true;
				}else
					if(decimal && (keychar ==".")){
						return true;
					}else return false;
	}
	</script>
	
    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>