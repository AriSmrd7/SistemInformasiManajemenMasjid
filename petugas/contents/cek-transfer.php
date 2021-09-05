<?php
	if(!isset($_SESSION["username_petugas"]))
		header("Location: ../administrator.php");
?>
<?php include_once "library/database.php"; ?>
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Transfer </h1>
                    </div>
                </div>
                  <hr />
                   <div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									Transfer masuk yang menunggu konfirmasi.
								</div>
								<div class="panel-body">
									<!-- FORM SEARCH -->
									<form method="post" action="index.php?m=contents&p=cari-transfer">
                                        <div class="row">
                                        <div class="col-xs-9">
                                            &nbsp;
                                        </div> 
										<div class="col-lg-3 form-group input-group">
                                            <input type="text" name="dicari" placeholder="ketikkan sesuatu..." class="form-control" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit" name="cari">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                        </div>
									</form>
									<!-- END FORM SEARCH -->
									<div class="table-responsive">
										<table class="table table-bordered table-condesed">
											<thead>
												<tr>
													<th width="1%">No</th>
													<th>ID</th>
													<th>ID User</th>
													<th>Nama Lengkap</th>
													<th>Nomor Rekening</th>
													<th>Bank</th>
													<th>Nominal</th>
													<th>Tanggal Transfer</th>
													<th>Bukti Transfer</th>
													<th width="4%">Status</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$i = 1;
												$tampil = $koneksi->prepare("SELECT id_transfer,id_user,nama,no_rekening,nama_bank,jumlah,tgl_transfer,image FROM tbl_transfer");
												$tampil->execute();
												$tampil->store_result();
												$tampil->bind_result($idtrans, $iduser, $nama, $norek, $bank, $jml, $tgl, $img);
												if($tampil->num_rows()==0){
												echo "<tr align='center' bgcolor='pink'><td  colspan='10'><b>BELUM ADA DATA!</b></td></tr>";
												}else{
												while($tampil->fetch())
													
												{
											?>
												<tr>
												<form method="post" action="library/proses-acc.php">
													<td><?php echo $i++;?></td>
													<td><input type="text" name="idtrans" class="form-control" value="<?php echo $idtrans;?>" readonly /></td>
													<td><input type="text" name="iduser" class="form-control" value="<?php echo $iduser;?>" readonly /></td>
													<td><input type="text" name="nama" class="form-control" value="<?php echo $nama;?>" readonly /></td>
													<td><input type="text" name="norek" class="form-control" value="<?php echo $norek;?>" readonly /></td>
													<td><input type="text" name="bank" class="form-control" value="<?php echo $bank;?>" readonly /></td>
													<td><input type="text" name="jml" class="form-control" value="<?php echo $jml;?>" readonly /></td>
													<td><input type="text" name="tgl" class="form-control" value="<?php echo $tgl;?>" readonly /></td>
													<td><img src="library/files/<?php echo $img;?>" width="50" height="50"></td>
													<td><button class="btn btn-grad  btn-sm btn-danger" type="submit" onclick="return confirm('Pastikan anda sudah memeriksa semua data dengan benar!'); " >Konfirmasi</button></td>
												</form>
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
