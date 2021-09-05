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
                                    <h5 class="text-info">Data Pemasukan</h5>
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
                                            <th>Detail</th>
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
											<td width="7%">
												<a href="index.php?m=contents&p=detail-bayar&idpm=<?php echo $id?>" class="btn btn-xs btn-info">
												<i class="icon-ok"></i>&nbsp;Lihat
												</a>
											</td>
                                        </tr>
										   <?php } ?>
									</tr>
								   </tbody>								   
                                </table>
								</div>	
                            </div>
                        </div>
				</div>
