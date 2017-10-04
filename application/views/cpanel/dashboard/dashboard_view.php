<?php
// Proteksi halaman
$this->lib_auth->cek_login();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Control Panel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/custom/custom.css">
	<script src="<?php echo base_url() ?>assets/foundation/js/vendor/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body class="bg-color">
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right">
		      	<li><a href="<?php echo base_url('cpanel/auth/logout') ?>">Logout</a></li>
		      </ul>
		    </div>
		    </div>
		</nav>
	</header>
</body>
</html>