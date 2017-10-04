<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/custom/custom.css">
	<script src="<?php echo base_url() ?>assets/foundation/js/vendor/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="body-bg">
	<main>
		<div class="container">
			<div class="row" style="margin-top: 50px">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-offset-4 col-md-4 col-xs-offset-1 col-xs-10">
						<?php
							if($this->session->flashdata('sukses')) {
								echo '<div class="alert alert-danger alert-dismissible" role="alert" style="font-size: 12px"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$this->session->flashdata('sukses').'</div>';
							}
						?>
							<div class="panel panel-default">
								<div class="panel-body">
									<form action="<?php echo base_url('cpanel/auth') ?>" method="post">
										<div class="row">
											<div class="col-xs-12 col-md-12 text-center">
												<p>LOGIN PANEL</p>
												<hr>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-2 col-md-2 text-center" style="padding-top: 5px">
												<i class="fa fa-user" aria-hidden="true"></i>
											</div>
											<div class="col-xs-10 col-md-10">
												<input type="text" class="form-control" name="username" placeholder="Username" required />
											</div>
										</div><br>
										<div class="row">
											<div class="col-xs-2 col-md-2 text-center" style="padding-top: 5px">
												<i class="fa fa-key" aria-hidden="true"></i>
											</div>
											<div class="col-xs-10 col-md-10">
												<input type="password" class="form-control" name="password" placeholder="Password" required />
											</div>
										</div><br>
										<div class="row">
											<div class="col-xs-2 col-md-2"></div>
											<div class="col-xs-10 col-md-10">
												<button type="submit" class="btn btn-primary">Submit</button>
											</div>
										</div
									</form>
								</div>
							</div>
							<p class="text-center" style="color: grey; font-size: 12px">Copyleft 2017. Open Source Software</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>