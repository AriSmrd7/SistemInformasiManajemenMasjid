<?php
	if(!isset($_SESSION["username_petugas"]))
		header("Location: ../administrator.php");
?>
<?php include_once "library/database.php";?>
<?php include_once "library/fungsi.php"; ?>
           <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Agenda </h1>
                    </div>
                </div>
                  <hr />
                 <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="icon-money"></i></div>
                                    <h5 class="text-info">Input Agenda Kegiatan</h5>
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
                                    <form class="form-horizontal" action="library/tambah-agenda.php" method="post" id="popup-validation">
										<div class="form-group">
										<label class="control-label col-lg-4">Nama Kegiatan</label>
												<div class="col-lg-7">
													<input name="judul" class="form-control" type="text"/>
												</div>
										</div>	
										<div class="form-group">
										<label class="control-label col-lg-4">Pukul</label>
											<div class="col-lg-2">
											<div class="input-group">
												<input name="jamawal" class="form-control" type="time"/>
												<span class="input-group-addon"><i class="icon-time"></i></span>
											</div>
											</div>
											<label class="control-label col-lg-1">s/d</label>
											<div class="col-lg-2">
											<div class="input-group">
												<input name="jamakhir" class="form-control" type="time"/>
												<span class="input-group-addon"><i class="icon-time"></i></span>
											</div>
											</div>
										</div>
										<div class="form-group">
										<label class="control-label col-lg-4">Tanggal</label>
											<div class="col-lg-3">
											<div class="input-group">
												<input name="tglawal" class="form-control" type="date"/>
												<span class="input-group-addon"><i class="icon-calendar"></i></span>
											</div>
											</div>
											<label class="control-label col-lg-1">s/d</label>
											<div class="col-lg-3">
											<div class="input-group">
												<input name="tglakhir" class="form-control" type="date"/>
												<span class="input-group-addon"><i class="icon-calendar"></i></span>
											</div>
											</div>
										</div>	
										<div class="form-group">
											<label class="control-label col-lg-4">Keterangan</label>
											<div class="col-lg-4">
												<textarea name="keterangan" class="form-control"></textarea>
											</div>
											</div>
										<div class="panel-footer">
											<div class="text-center">
												<button type="reset" class="btn btn-md btn-grad btn-danger"><i class="icon-remove"></i> Batal</button>
												<button type="submit" name="tambah" class="btn btn-md btn-grad btn-primary"><i class="icon-save"></i> Simpan</button>
											</div>
										</div>
										</div>
                                    </form>
                                </div>	
								<br><br>
									<!-- FORM SEARCH 
                                        <div class="row">
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
                                        </div>
									END FORM SEARCH -->
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
												$tampil = $koneksi->prepare("SELECT id_agenda,judul, jam_awal,jam_akhir,tgl_awal,tgl_akhir,keterangan from tbl_agenda");
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
                            </div>
                        </div>
