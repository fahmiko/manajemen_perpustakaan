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
                    <li>HOME</li>
                    <li>BOOKS</li>
                    <li>LOAN</li>
                    <li>HELP</li>
                    <li>LOGIN</li>
                </ul>
            </center>           
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