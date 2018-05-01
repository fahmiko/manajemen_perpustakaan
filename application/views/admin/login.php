<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
                    <li><a class="list" href="<?php echo base_url('Welcome/loan') ?>">LOAN</a></li>
                    <li><a class="list" href="<?php echo base_url('Welcome/help') ?>">HELP</a></li>
                    <li><a class="list" href="<?php echo base_url('Welcome/login') ?>">LOGIN</a></li>
                </ul>
            </center>           
        </div>
    </div>
</div>
</header>
<div class="super2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
                <form method="POST" action="<?php echo base_url('Admin/cek_login')?>" class="space6 faceLog">
                    <center><h1  class="space3"><b>Login</b></h1></center>
                    Username : <input class="form-control" type="text" name="username"><br>
                    Password : <input class="form-control" type="password" name="password"><br>
                    <center><input type="submit" id="submitBtn" class="btn btn3 superup2" name="login" value="LOGIN" ></center>
                            <?php if(validation_errors()){?>
                            <center><div class="panel panel-danger" style="margin-top: 4%"></center>
                            <center><div class="panel-body"><?php echo validation_errors() ?></div></center>
                            </div>
                            <?php } ?>                    
                </form>             
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
    </div>
</div>

<footer>
    <p class="Copyright2" align="center">Copyright 2018 Libuno All rights reserved.</p> 
</footer>
</body>
</html>

<script type="text/javascript">
$(document).ready(function () {
    $("#submitBtn").click(function () {

        var form = $(".needs-validation")

        if (form[0].checkValidity() === false) {
            event.preventDefault()
            event.stopPropagation()
        }
        form.addClass('was-validated');
    })
})
</script>