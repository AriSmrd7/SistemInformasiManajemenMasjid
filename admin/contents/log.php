<?php 
include 'library/database.php'; ?>
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>History </h1>
                    </div>
                </div>
                  <hr />
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            History
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tblbayar">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Aktivitas</th>
                                            <th>Pelaku Aktivitas</th>
                                            <th>Waktu Aktivitas</th>
                                            <th>Keterangan</th>
                                                                                       
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										$i = 1;
										$tampil = $koneksi->prepare("SELECT aktivitas,pelaku_aktivitas,tanggal_aktivitas,detail_aktivitas FROM data_log");
										$tampil->execute();
										$tampil->store_result();
										$tampil->bind_result($aktivitas,$pelaku_aktivitas,$tanggal_aktivitas,$detail_aktivitas);
										while($tampil->fetch())
										{
									?>
										<tr>
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $aktivitas;?></td>
                                            <td><?php echo $pelaku_aktivitas;?></td>
                                            <td><?php echo $tanggal_aktivitas;?></td>
                                            <td><?php echo $detail_aktivitas;?></td>
                                        </tr>
									<?php
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
