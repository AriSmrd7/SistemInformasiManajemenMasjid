<?php
	session_destroy();
?>
           <div class="logo">
                <a href="#"><em>Masjid</em> Al-Ikhlas</a>
            </div>
			<br><br><br><br>
			<br><br><br>
			<div class="sidebar-wrapper">
            	<div class="login-panel panel panel-default">
					<div class="panel-heading">Silahkan Login</div>
					<div class="panel-body">
						<form role="form" method="post" action="">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="username" type="text" autofocus required autocomplete="off"/>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" required autocomplete="off"/>
								</div>
								<br>
								<div class="text-center">
									<button name="submit" type="submit" class="btn btn-md btn-primary"><i class="fa fa-sign-in"></i> Login</button>
									<button name="reset" type="reset" class="btn btn-md btn-danger"><i class="fa fa-refresh"></i> Reset</button>
								</div>
							</fieldset>
							<br>
							<div class="text-center">
								<span class="small">
									Belum punya akun? Daftar <a href="register.php">disini.</a>
								</span>
							</div>
						</form>
						<br>
						<b class="text-danger">Informasi Login Pengguna</b>
						<div class="row">
							<div class="table-responsive">
								<table class="table table-hover">
									<tr>
										<td>Username</td>
										<td>:</td>
										<td class="text-success">user</td>
									</tr>
									<tr>
										<td>Password</td>
										<td>:</td>
										<td class="text-success">user</td>
									</tr>
								</table>
							</div>
						</div>
						<b class="small text-danger">Untuk Login Admin Petugas <a href="administrator.php">Klik Disini</a></b>
					</div>
				</div>
			</div>

		