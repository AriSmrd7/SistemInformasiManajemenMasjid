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
									<div class="table-responsive">
										<table class="table table-bordered table-condesed">
											<thead>
												<tr>
													<th width="1%">No</th>
													<th>ID</th>
													<th>Kategori</th>
													<th>ID User</th>
													<th>Nama Lengkap</th>
													<th>Nomor Rekening</th>
													<th>Bank</th>
													<th>Nominal</th>
													<th>Tanggal Transfer</th>
													<th width="4%">Status</th>
												</tr>
											</thead>
											<tbody>
											<?php
												$cari = $_POST['dicari'];
												$i = 1;
												$tampil = $koneksi->prepare("SELECT id_transfer, id_kategori,id_user,nama,no_rekening,nama_bank,jumlah,tgl_transfer FROM tbl_transfer
												WHERE nama like '%$cari%' or  no_rekening like '%$cari%' or jumlah like '%$cari%' ");
												$tampil->execute();
												$tampil->store_result();
												$tampil->bind_result($idtrans,$idkat,$iduser, $nama, $norek, $bank, $jml,$tgl);
												if($tampil->num_rows()==0){
												echo "<tr align='center' bgcolor='pink'><td  colspan='10'><b> --$cari--  TIDAK DAPAT DITEMUKAN!</b></td></tr>";
												}else{
												while($tampil->fetch())
													
												{
											?>
												<tr>
												<form method="post" action="library/proses-acc.php">
													<td><?php echo $i++;?></td>
													<td><input type="text" name="idtrans" class="form-control" value="<?php echo $idtrans;?>" readonly /></td>
													<td><input type="text" name="idkat" class="form-control" value="<?php echo $idkat;?>" readonly /></td>
													<td><input type="text" name="iduser" class="form-control" value="<?php echo $iduser;?>" readonly /></td>
													<td><input type="text" name="nama" class="form-control" value="<?php echo $nama;?>" readonly /></td>
													<td><input type="text" name="norek" class="form-control" value="<?php echo $norek;?>" readonly /></td>
													<td><input type="text" name="bank" class="form-control" value="<?php echo $bank;?>" readonly /></td>
													<td><input type="text" name="jml" class="form-control" value="<?php echo $jml;?>" readonly /></td>
													<td><input type="text" name="tgl" class="form-control" value="<?php echo $tgl;?>" readonly /></td>
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
								   <div class="form-group">
									<a href="javascript:history.back()" class="btn btn-danger">Kembali</a>
								   </div>
								</div>
							</div>
						</div>
					</div>
            </div>
