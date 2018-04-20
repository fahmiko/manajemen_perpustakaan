<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div>
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                    <?php echo form_open('Admin/cek_login', array('class' => 'needs-validation', 'novalidate' => '')) ?>
                            <fieldset>
                                <div class="input-group">
                                	<span class="input-group-addon" id="basic-addon1">
                                		<span class="glyphicon glyphicon-user"></span>
                                	</span>
                                    <input class="form-control" placeholder="Username" name="username" autofocus="">
                                </div>
                                <div class="input-group">
                                	<span class="input-group-addon" id="basic-addon1">
                                		<span class="glyphicon glyphicon-lock"></span>
                                	</span>
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div><br><br>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" id="submitBtn" value="Login" class="btn btn-sm btn-success">
                            </fieldset>
                            <?php if(validation_errors()){?>
							<div class="panel panel-danger" style="margin-top: 50px">
							      <div class="panel-heading">Login Error</div>
							      <div class="panel-body"><?php echo validation_errors() ?></div>
							</div>
							<?php } ?>
                    </div>
            </div>
    </div>
</div>
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