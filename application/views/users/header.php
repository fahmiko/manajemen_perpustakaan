<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<link href="<?php echo base_url('assets/style.css'); ?>" rel="stylesheet" type="text/css"> 	
</head>
<body>
<header>
<div class="container">
	<div class="row">
		<div class="col-lg-6">
				<center><img class="img1" src="<?php echo base_url('assets/images/logo.png') ?>"></center>
		</div>
		<div class="col-lg-6">
			<center>
				<ul>
                    <li><a class="list" href="<?php echo base_url('Welcome') ?>"> HOME </a></li>
                    <li><a class="list" href="<?php echo base_url('Welcome/books') ?>">BOOKS</a></li>
                    <li><a class="list" href="<?php echo base_url('members/login') ?>">LOGIN MEMBER</a></li>
                    <li><a class="list" href="<?php echo base_url('admin/cek_login') ?>">LOGIN ADMIN</a></li>
				</ul>
			</center>			
		</div>
	</div>
</div>
</header>