<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management Perpustakaan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/' ?>vendor/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/' ?>vendor/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/' ?>css/styles.css">
</head>
<body class="header-fixed">
<div class="page-wrapper">
    <nav class="navbar page-header">
        <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
            <i class="fa fa-bars"></i>
        </a>

        <a class="navbar-brand" href="#">
            <?=$this->session->userdata('usr_member')?> | <?=$this->session->userdata('type')?>
        </a>

        <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
            <i class="fa fa-bars"></i>
        </a>

        <ul class="navbar-nav ml-auto"></ul>
    </nav>

    <div class="main-container">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Menu</li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('members') ?>" class="nav-link <?php echo ($this->uri->segment(2) == null) ? "active" : "" ?>">
                            <i class="icon icon-speedometer"></i> Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('members/tambah_pinjaman') ?>" class="nav-link  <?php echo ($this->uri->segment(1) == "buku") ? "active" : "" ?>">
                            <i class="fa fa-book"></i> Pinjam Buku
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('members/pinjaman') ?>" class="nav-link  <?php echo ($this->uri->segment(2) == "pinjaman") ? "active" : "" ?>">
                            <i class="icon icon-graph"></i> Daftar Pinjaman
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('members/logout') ?>" class="nav-link">
                            <i class="fa fa-sign-out-alt"></i> Logout
                        </a>
                    </li>
                </ul>
            </nav>
        </div>