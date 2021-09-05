<?php
	if(!isset($_SESSION["username_petugas"]))
		header("Location: ../administrator.php");
?>
<?php include_once "library/database.php"; ?>
<?php include_once "library/fungsi.php"; ?>
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Pengeluaran </h1>
                    </div>
                </div>
                  <hr />
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
