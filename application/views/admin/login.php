<?php
if($this->session->flashdata('msg') != null){
    echo "<script>
    alert('".$this->session->flashdata('msg')."')
    </script>";
}
?>
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Login Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?=base_url()?>assets/owner/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="<?=base_url()?>assets/owner/css/dashboard.css" rel="stylesheet" />
    <script src="<?=base_url()?>assets/owner/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="<?=base_url()?>assets/owner/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="<?=base_url()?>assets/owner/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="<?=base_url()?>assets/owner/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="<?=base_url()?>assets/owner/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="<?=base_url()?>assets/owner/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
              </div>
              <form class="card" action="<?=site_url()?>admin/cek_login" method="post">
                <div class="card-body p-6">
                  <div class="card-title">Login Admin Panel</div>
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control"placeholder="Username" required="">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                  </div>
                </div>
              <?=form_close();?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>