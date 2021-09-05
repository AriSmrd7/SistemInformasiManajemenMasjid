 <?php  
 include_once "library/database.php";
 require_once("urut_id_kategori.php");
 ?>
           <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> Form Kategori </h1>
                    </div>
                </div>
                  <hr />
                 <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="icon-money"></i></div>
                                    <h5>Input Data Kategori</h5>
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
                                    <form class="form-horizontal" action="library/tambah-kategori.php" method="post" id="popup-validation">
										<div class="form-group">
											<label class="control-label col-lg-4">ID Kategori</label>
											<div class="col-lg-4">
												<input type="text" name="id_kategori" class="form-control chzn-select" tabindex="2" readonly="" value="<?php echo $id_kategori;?>"/>
													
											</div>
										</div>
			                             
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nama Kategori</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="nama_kategori" id="sport" class="validate[required] form-control">
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
