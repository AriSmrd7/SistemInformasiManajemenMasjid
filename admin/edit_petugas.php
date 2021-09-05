<?php  
session_start();
 include_once "library/database.php";
 if(isset($_GET['id_petugas'])){

$tampil = $koneksi->prepare("SELECT id_petugas,no_ktp,nama,alamat,no_hp,username,password FROM tbl_petugas WHERE id_petugas='".$_GET['id_petugas']."' ");
$tampil->execute();
$tampil->store_result();
$tampil->bind_result($id_petugas,$no_ktp,$nama,$alamat,$no_hp,$username,$password);
    while($tampil->fetch())
                {
    
        ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>BCORE Admin Dashboard Template | Dashboard </title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/css/layout2.css" rel="stylesheet" />
       <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
       <link href="assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

    <!-- MAIN WRAPPER -->
    <div id="wrap" >
        

        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">
                    <a href="index.php" class="navbar-brand">
                        <b class="text-primary">SIMAS Al-Ikhlas</b>
                    </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">
                    <li class="divider"></li>
                            <li><a href="logout.php"><i class="icon-signout"></i> Logout </a>
                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>
            </nav>
        </div>
        <!-- END HEADER SECTION -->
        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="../assets/img/masjid.png" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $_SESSION["nama_admin"]; ?></h5>
                    <ul class="list-unstyled user-info">
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                        </li>
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">
                <?php include_once "menu.php"; ?>
            </ul>

        </div>
        <!--END MENU SECTION -->
        <!--PAGE CONTENT -->
        <div id="content">
             
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
                                    <h5>Ubah Data Petugas</h5>
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
                                    <form class="form-horizontal" action="library/update_petugas.php" method="POST" id="popup-validation">
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">ID Petugas</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="id_petugas" class="form-control chzn-select" tabindex="2" readonly="" value="<?php echo $id_petugas;?>"/>
                                                    
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nama Lengkap</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="nama" class="form-control chzn-select" tabindex="2" value="<?php echo $nama;?>"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">No KTP</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="no_ktp" class="form-control chzn-select" tabindex="2" value="<?php echo $no_ktp;?>"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4" >Alamat</label>
                                            <div class="col-lg-4">                                              
                                                    <textarea name="alamat" class="form-control" width="500"> <?php echo $alamat;?> </textarea>
                                                                                                  
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">No Hp</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="no_hp" class="form-control chzn-select" tabindex="2" value="<?php echo $no_hp;?>"/>
                                            </div>
                                        </div>

                                        <div style="text-align:center" class="form-actions no-margin-bottom"> 
                                            <button type="submit" class="btn btn-grad btn-success btn-lg ">
                                             <i class="icon-save"></i> Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                
            </div>

        </div>
        <!--END PAGE CONTENT -->

         <!-- RIGHT STRIP  SECTION -->
        <div id="right">
            
            <div class="well well-small">
                <button class="btn btn-primary btn-block"> Bantuan</button>
                <button class="btn btn-success btn-block"> Profil </button>
            </div>
        </div>
         <!-- END RIGHT STRIP  SECTION -->
    </div>
<?php
   }
   } 
   ?>
    <!--END MAIN WRAPPER -->

<!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#tblbayar').DataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
