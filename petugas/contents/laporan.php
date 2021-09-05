<?php
	if(!isset($_SESSION["username_petugas"]))
		header("Location: ../administrator.php");
?>
<?php include_once "library/database.php"; ?>
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Manajemen Laporan  </h1>
                    </div>
                </div>
                  <hr />
                   <div class="row">
						<div class="col-lg-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									Laporan data pemasukan
								</div>
								<div class="panel-body">
								<form method="post" action="contents/laporan-pemasukan.php">
									<div class="form-group">
										<label class="control-label col-lg-1">Dari</label>
											<div class="col-lg-3">
											<div class="input-group">
												<input name="tglawal" class="form-control" type="date"/>
												<span class="input-group-addon"><i class="icon-calendar"></i></span>
											</div>
											</div>
											<div class="col-lg-1">
											<label class="control-label">Hingga</label>
											</div>
											<div class="col-lg-3">
											<div class="input-group">
												<input name="tglakhir" class="form-control" type="date"/>
												<span class="input-group-addon"><i class="icon-calendar"></i></span>
											</div>
											</div>
									</div>
									<br><br><br><br>
									<div class="form-group">
									<div class="col-lg-2">
									<button class="btn btn-md btn-success" type="submit" name="cetak">
										<i class="icon-print"></i> Cetak
									</button>
									</div>
									</div>
								</form>
								</div>
							</div>	

							<div class="panel panel-info">
								<div class="panel-heading">
									Laporan data pengeluaran
								</div>
								<div class="panel-body">
								<form method="post" action="contents/laporan-pengeluaran.php">
									<div class="form-group">
										<label class="control-label col-lg-1">Dari</label>
											<div class="col-lg-3">
											<div class="input-group">
												<input name="tglawal" class="form-control" type="date"/>
												<span class="input-group-addon"><i class="icon-calendar"></i></span>
											</div>
											</div>
											<div class="col-lg-1">
											<label class="control-label">Hingga</label>
											</div>
											<div class="col-lg-3">
											<div class="input-group">
												<input name="tglakhir" class="form-control" type="date"/>
												<span class="input-group-addon"><i class="icon-calendar"></i></span>
											</div>
											</div>
									</div>
									<br><br><br><br>
									<div class="form-group">
									<div class="col-lg-2">
									<button class="btn btn-md btn-success" type="submit" name="cetak">
										<i class="icon-print"></i> Cetak
									</button>
									</div>
									</div>
								</form>
								</div>
							</div>		

							<div class="panel panel-info">
								<div class="panel-heading">
									Laporan data kas masjid
								</div>
								<div class="panel-body">
								<form method="post" action="contents/laporan-dana.php">
									<div class="form-group">
									<div class="col-lg-2">
									<button class="btn btn-md btn-success" type="submit" name="cetak">
										<i class="icon-print"></i> Cetak
									</button>
									</div>
									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
            </div>