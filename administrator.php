<?php
	session_start();
	if(!empty($_SESSION["username_petugas"])){
		header("Location: petugas/index.php");
	}
	elseif(!empty($_SESSION["username_admin"]))
	{
		header("Location: admin/index.php");
	}
?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Administrator | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
	<div class="text-center">
	<br/>
	   <div class="row">
         <div class="col-lg-12">
                <div class="col-lg-3">
				 &nbsp;
				</div>
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <h2 class="text-primary"><b>Halaman Login</b></h2>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills">
							    <li class="active"><a href="#petugas" data-toggle="tab">PETUGAS</a>
                                </li>
								<li><a href="#admin" data-toggle="tab">ADMIN</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="petugas">
                                    <h3 class="text-muted">Login ke halaman petugas</h3>
                                    <div class="tab-content">
									<div class="tab-pane active">
									<div class="col-lg-12">
										<form action="proses-login-petugas.php" method="post" class="form-horizontal">
											<div class="form-group">
											<p class="text-center text-primary">
												Masukkan username dan password
											</p>
											</div>
											
											<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-user"></i></span>
												<input type="text" name="username" placeholder="Username" class="form-control" required autocomplete="new"/>
											</div>
											</div>
											
											<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-lock"></i></span>
												<input type="password" name="password" placeholder="Password" class="form-control" required autocomplete="new-password"/>
											</div>
											</div>
											
											<div class="form-group">
												<button class="btn btn-md btn-block btn-success" name="LoginPetugas" type="submit"><i class="icon-signin"></i> 
												<b>LOGIN</b>
												</button>
												<button class="btn text-muted btn-md btn-block btn-danger" type="reset"><i class="icon-undo"></i> 
												<b>BATAL</b>
												</button>
											</div>
										</form>
									</div>
									</div>
									</div>
                                </div>
								
								<div class="tab-pane fade" id="admin">
                                    <h3 class="text-muted">Login ke halaman admin</h3>
                                    <div class="tab-content">
									<div class="tab-pane active">
									<div class="col-lg-12">
										<form action="proses-login-admin.php" method="post" class="form-horizontal">
											<div class="form-group">
											<p class="text-center text-primary">
												Masukkan username dan password
											</p>
											</div>
											
											<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-user"></i></span>
												<input type="text" name="username" placeholder="Username" class="form-control" required autocomplete="new"/>
											</div>
											</div>
											
											<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon"><i class="icon-lock"></i></span>
												<input type="password" name="password" placeholder="Password" class="form-control" required autocomplete="new-password"/>
											</div>
											</div>
											
											<div class="form-group">
												<button class="btn btn-md btn-block btn-success" name="LoginAdmin" type="submit"><i class="icon-signin"></i> 
												<b>LOGIN</b>
												</button>
												<button class="btn text-muted btn-md btn-block btn-danger" type="reset"><i class="icon-undo"></i> 
												<b>BATAL</b>
												</button>
											</div>
										</form>
									</div>
									</div>
									</div>
                                </div>
								
								
                            </div>
                        </div>
                    </div>
                </div>
				
				<div class="col-lg-3">							
					<div class="table-responsive">
						<h5>Informasi Login</h5>
						<table class="table table-hover bordered">
							<tr>
								<td colspan="3" class="text-primary"><b>Admin</b></td>
							</tr>
							<tr>
								<td>Username</td>
								<td>:</td>
								<td class="text-success">admin</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td class="text-success">admin</td>
							</tr>
							<tr>
								<td colspan="3" class="text-primary"><b>Petugas</b></td>
							</tr>
							<tr>
								<td>Username</td>
								<td>:</td>
								<td class="text-success">petugas</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td class="text-success">petugas</td>
							</tr>
						</table>
					</div>
				</div>
				
             </div>
		</div>
	</div>
	</div>
	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
