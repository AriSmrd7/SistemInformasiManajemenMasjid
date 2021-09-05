<?php include 'library/database.php'; 
?>
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>User </h1>
                    </div>
                </div>
                  <hr />
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tblbayar">
                                    
                                        <div class="row">
                                    <div class="col-xs-9">
                                        
                                            &nbsp;
                                        </div> 
                                        <form method="POST" action="index.php?m=contents&p=listdatauser">
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
                                            <th>ID User</th>
                                            <th>Nama User</th>
                                            <th>No HP</th>
                                            <th>Alamat</th>
                                            <th width="4%">Edit</th>
                                            <th width="6%">Delete</th>                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                    $cari ='';
                                    if(isset($_POST['submit'])){
                                      $cari = $_POST['cari'];
                                    }
										$i = 1;
										$tampil = $koneksi->prepare("SELECT id_user,nama_user,nohp_user,alamat_user FROM tbl_user WHERE id_user like '%$cari%' or  nama_user like '%$cari%' or nohp_user like '%$cari%' or alamat_user like '%$cari%'");
										$tampil->execute();
										$tampil->store_result();
										$tampil->bind_result($id_user,$nama,$nohp,$alamat);
										while($tampil->fetch())
										{
									?>
										<tr>
                                            <td><?php echo $i++;?></td>
                                            <td><?php echo $id_user;?></td>
                                            <td><?php echo $nama;?></td>
                                            <td><?php echo $nohp;?></td>
                                            <td><?php echo $alamat;?></td>
                                            <td><a href="edit_user.php?id_user=<?php echo $id_user; ?>" button class="btn btn-grad  btn-sm btn-primary" type="submit" onclick="return confirm('Apakah Anda Ingin Mengedit Data Ini?'); " >Edit</button></td>

                                            <td><a href="library/delete_user.php?id_user=<?php echo $id_user; ?>" button class="btn btn-grad  btn-sm btn-danger" type="submit" onclick="return confirm('Yakin Ingin Menghapus Data Ini?'); " >Delete</button></td>
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