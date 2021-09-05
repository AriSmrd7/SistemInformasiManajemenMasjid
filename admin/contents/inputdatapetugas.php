 <?php  
 include_once "library/database.php";
 require_once("urut_id_petugas.php");
 ?>
           <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Form Petugas </h1>
                    </div>
                </div>
                  <hr />
                 <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="icon-money"></i></div>
                                    <h5>Input Data Petugas</h5>
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
                                    <form class="form-horizontal" action="library/tambah-petugas.php" method="post" id="popup-validation">
										<div class="form-group">
											<label class="control-label col-lg-4">ID Petugas</label>
											<div class="col-lg-4">
												<input type="text" name="id_petugas" class="form-control chzn-select" tabindex="2" readonly="" value="<?php echo $id_petugas;?>"/>
													
											</div>
										</div>
			                             
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nama Lengkap</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="nama_petugas" id="sport" class="validate[required] form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">No KTP</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="no_ktp" id="sport" class="validate[required] form-control">
                                            </div>
                                        </div>

										<div class="form-group">
											<label class="control-label col-lg-4" >Alamat</label>
											<div class="col-lg-4">                                              
                                                    <textarea name="alamat" class="form-control" width="500"></textarea>
                                                                                                  
                                            </div>
										</div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">No Hp</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="no_hp" data-mask="+62 999 9999 9999" class="form-control"  required />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Username</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="username" class="form-control chzn-select" tabindex="2">
                                                    
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Password</label>
                                            <div class="col-lg-4">
                                                <input type="password" name="password" class="form-control chzn-select" tabindex="2">
                                                    
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Konfirmasi Password</label>
                                            <div class="col-lg-4">
                                                <input type="password" name="password2" class="form-control chzn-select" tabindex="2">
                                                    
                                            </div>
                                        </div>
										
                                        <div style="text-align:center" class="form-actions no-margin-bottom"> 
                                            <button type="submit" class="btn btn-grad btn-success btn-lg ">
											 <i class="icon-save"></i> Simpan
											</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                
            </div>
