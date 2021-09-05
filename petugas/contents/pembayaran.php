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
                                    <h5 class="text-info">Proses Pembayaran</h5>
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
                                <div id="collapse2" class="body collapse in">
                                    <form class="form-horizontal" action="library/proses-pembayaran.php" method="post" id="popup-validation">
										<div class="form-group">
											<label class="control-label col-lg-4">ID Transaksi</label>
											<div class="col-lg-4">
												<input name="idpm" type="text" value="<?php echo $_POST['idtrx'];?>" class="form-control "  readonly />
											</div>
										</div>			
										<div class="form-group">
											<label class="control-label col-lg-4">Tanggal Bayar :</label>
											<div class="col-lg-4">
											<?php $tgl = date('Y-m-d'); ?>
												<input name="tgl" type="text" value="<?php echo $tgl;?>" class="form-control "  readonly />
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-lg-4">Nama Lengkap</label>
											<div class="col-lg-4">
												<input name="nama" type="text" class="form-control "   />
											</div>
										</div>
										<div class="table-responsive">
										<table class="table table-striped table-bordered table-hover">
											<thead>
												<tr class="default">
													<th>ID Kategori</th>
													<th>Kategori</th>
													<th>Nominal</th>
												</tr>
											</thead>

											<?php
												$idtrx = $_POST['idtrx'];
												$tampil = $koneksi->prepare("SELECT tbl_kategori.id_kategori,tbl_kategori.nama_kategori,tbl_sementara.jumlah FROM tbl_sementara
												JOIN tbl_kategori USING (id_kategori) WHERE id_pemasukan='$idtrx'");
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
											$res = $koneksi->query("SELECT sum(jumlah) as total from tbl_sementara");
											while($row=$res->fetch_array())
											{	
											 ?>
											 <tr class="info">
											 <td colspan='2'> Total yang harus dibayarkan</td>
											 <td><b>
											 <input class="form-control" type="text" name="totalbayar" value="Rp. <?php echo str_replace(",",".",number_format($row['total'],0));?>" readonly/>
											 </b></td>
											<?php } ?>
											</tr>
										   </tbody>								   
										</table>
										</div>	
										<div class="panel-footer">
											<div class="text-center">
												<button type="reset" class="btn btn-grad  btn-md btn-danger"><i class="icon-remove"></i> Batal</button>
												<button type="submit"  name="proses" class="btn btn-grad btn-md btn-success"><i class="icon-save"></i> Proses</button>
											</div>
										</div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
