<?php 
include 'library/database.php'; ?>
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Kategori </h1>
                    </div>
                </div>
                  <hr />
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Kategori
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tblbayar">
                                	<form method="POST" action="index.php?m=contents&p=listdatakategori">
                                        <div class="row">
                                	<div class="col-xs-9">
                                            &nbsp;
                                        </div> 
                                	<div class="col-lg-3 form-group input-group">
                                            <input type="text" name="cari" placeholder="ketikkan sesuatu..." class="form-control" />
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit" name="submit">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Kategori</th>
                                            <th>Nama Kategori</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$cari ='';
									if(isset($_POST['submit'])){
									  $cari = $_POST['cari'];
									}
									
										$i = 1;
										$tampil = $koneksi->prepare("SELECT id_kategori, nama_kategori FROM tbl_kategori WHERE id_kategori like '%$cari%' or  nama_kategori like '%$cari%' ");
										$tampil->execute();
										$tampil->store_result();
										$tampil->bind_result($id_kategori,$nama_kategori);
										while($tampil->fetch())
										{
									?>
										<tr>
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $id_kategori;?></td>
                                            <td><?php echo $nama_kategori;?></td>
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
</form>
        </div>