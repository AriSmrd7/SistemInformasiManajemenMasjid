<?php
	if(!isset($_SESSION["username_petugas"]))
		header("Location: ../administrator.php");
?>
<?php include_once "library/database.php";?>
<?php include_once "library/fungsi.php"; ?>
           <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Pembayaran </h1>
                    </div>
                </div>
                  <hr />
                 <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="icon-money"></i></div>
                                    <h5 class="text-info">Detail Pembayaran</h5>
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
								<div class="form-group">

										<a href="javascript:history.back()" class="btn btn-lg btn-danger">
											<i class="icon-refresh"></i>&nbsp;Kembali
										</a>
									
								</div>
								<?php
										$idpm = $_GET['idpm'];
										$tampil = $koneksi->prepare("SELECT id_pemasukan, nama, tgl_pemasukan, totalbayar  FROM tbl_pemasukan where id_pemasukan='$idpm'");
										$tampil->execute();
										$tampil->store_result();
										$tampil->bind_result($id,$nama,$tgl,$total);
										$tampil->fetch()									
								?>
									<div class="text-left">
										<label>ID Transaksi  &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;<b class="text-info"><?php echo $id;?></b></label><br>
										<label>Tanggal Bayar &nbsp;: &nbsp;<b class="text-info"><?php echo $tgl;?></b></label><br>
										<label>Nama Lengkap  : &nbsp;<b class="text-info"><?php echo $nama;?></b></label>
									</div>
								<div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr class="default">
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Nominal</th>
                                        </tr>
                                    </thead>
									<?php
										$no = 1;
										$idpm = $_GET['idpm'];
										$tampil = $koneksi->prepare("SELECT tbl_kategori.nama_kategori, tbl_detailpemasukan.jumlah from tbl_detailpemasukan JOIN tbl_kategori USING (id_kategori) where id_pemasukan='$idpm'");
										$tampil->execute();
										$tampil->store_result();
										$tampil->bind_result($namakat,$jumlah);
										while($tampil->fetch())
										{
									
									 ?>
                                    <tbody>
                                        <tr>
                                            <td width="2%"><?php echo $no; ?></td>
                                            <td width="17%"><?php echo $namakat; ?></td>
											<td width="9%"><?php echo rupiah($jumlah);?></td>
                                        </tr>
										
										   <?php $no++; } ?>
									<tr bgcolor="#dddddd" class="text-danger">
										<td  colspan="2"><b>Total Bayar</b></td>
										<td><b><?php echo rupiah($total);?></b></td>
									</tr>
								   </tbody>								   
                                </table>
								</div>	
                            </div>
                        </div>
				</div>
