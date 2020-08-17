<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Jaringan Dokumentasi dan Informasi Hukum | Kantor Inspektorat Provinsi Lampung</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/simple-datatables/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
</head>
<body>
	<div id="auth">

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-5">
									<p class="mt-5 d-none d-sm-block">
										<img src="<?php echo base_url(); ?>assets/images/avatar/login-ilustration.svg" class="img-fluid" alt="">
									</p>
								</div>
								<div class="col-lg-1 col-md-1 col-sm-1"></div>
								<div class="col-lg-6 col-md-6 col-sm-6 mt-5">
									<div class="mb-3 text-center-xs">
										<p class="d-sm-none d-md-none d-lg-none">
											<i data-feather="user" class="icon-login-user"></i>
										</p>
										<h3 class="login-txt">Log In</h3>
										<p>Selamat datang, Silahkan isi Username dan Password anda</p>
                                        <?php if ($this->session->flashdata('error')){echo '<div class="alert alert-danger alert-dismissible fade show">Login gagal, periksa kembali Username dan Password anda</div>'; } ?>
						                <?php if ($this->session->flashdata('error_status')){echo '<div class="alert alert-danger alert-dismissible fade show">Login gagal, periksa kembali Username dan Password anda</div>'; } ?>
									</div>
									<form action="<?php echo base_url(); ?>login/signin" method="post">

										<div class="form-group position-relative has-icon-left">
											<label for="username">Username</label>
											<div class="position-relative">
												<input type="text" class="form-control" id="username" name="username" placeholder="Username anda..">
												<div class="form-control-icon">
													<i data-feather="user"></i>
												</div>
											</div>
										</div>

										<div class="form-group position-relative has-icon-left">
											<div class="clearfix">
												<label for="password">Password</label>
											</div>
											<div class="position-relative">
												<input type="password" class="form-control" id="password" name="password" placeholder="Password anda..">
												<div class="form-control-icon">
													<i data-feather="lock"></i>
												</div>
											</div>
										</div>


										<div class="clearfix">
											<button class="btn btn-primary btn-save btn-lg float-right" type="submit">Login</button>
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
</body>
</html>

<script src="<?php echo base_url(); ?>assets/js/feather-icons/feather.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>