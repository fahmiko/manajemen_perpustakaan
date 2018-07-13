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
            Perpustakaan | <?=$this->session->userdata('level')?>
        </a>

        <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
            <i class="fa fa-bars"></i>
        </a>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="small ml-1 d-md-down-none"><?php echo $this->session->userdata('username') ?></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header">Account</div>

                    <a href="#" class="dropdown-item">
                        <i class="fa fa-wrench"></i> Settings
                    </a>

                    <a href="<?php echo site_url('admin/logout') ?>" class="dropdown-item">
                        <i class="fa fa-lock"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="main-container">
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-title">Navigation</li>
                    <li class="nav-item">
                        <a href="<?php echo site_url('admin') ?>" class="nav-link <?php echo ($this->uri->segment(1) == "admin") ? "active" : "" ?>">
                            <i class="icon icon-speedometer"></i> Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo site_url('buku') ?>" class="nav-link  <?php echo ($this->uri->segment(1) == "buku") ? "active" : "" ?>">
                            <i class="fa fa-book"></i> Buku 
                        </a>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle <?php echo ($this->uri->segment(1) == "member") ? "active" : "" ?> ">
                            <i class="fa fa-user"></i> Member <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="<?php echo site_url('member') ?>" class="nav-link">
                                    <i class="icon icon-people"></i> Daftar Member
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" data-toggle="modal" data-target="#modal-member"  class="nav-link">
                                    <i class="fa fa-plus"></i> Tambah Member
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle <?php echo ($this->uri->segment(1) == "pinjaman") ? "active" : "" ?>">
                            <i class="icon icon-graph"></i> Pinjaman <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="<?php echo site_url('pinjaman') ?>" class="nav-link">
                                    <i class="icon icon-wallet"></i> Daftar Pinjaman
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo site_url('pinjaman/tambah_pinjaman') ?>" class="nav-link">
                                    <i class="fa fa-plus"></i> Tambah Pinjaman
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo site_url('pinjaman/pengembalian') ?>" class="nav-link">
                                    <i class="fa fa-exchange-alt"></i> Pengembalian
                                </a>
                            </li>
                        </ul>
                    </li>

<!--                     <li class="nav-title">More</li>

                    <li class="nav-item nav-dropdown">
                        <a href="#" class="nav-link nav-dropdown-toggle">
                            <i class="fa fa-cogs"></i> Pengaturan <i class="fa fa-caret-left"></i>
                        </a>

                        <ul class="nav-dropdown-items">
                            <li class="nav-item">
                                <a href="login.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Login
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="register.html" class="nav-link">
                                    <i class="icon icon-umbrella"></i> Register
                                </a>
                            </li>
                        </ul>
                    </li> -->
                </ul>
            </nav>
        </div>
<!-- Modal tambah Member  -->
<div class="modal fade" id="modal-member" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php echo form_open_multipart('member/tambah_member', array('class' => 'needs-validation', 'novalidate' => '') ); ?>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                    </div>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" required="" minlength="5">
                    <div class="invalid-feedback">Isi Nama dulu</div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-address-card"></i></span>
                    </div>
                    <textarea class="form-control" name="alamat" placeholder="Alamat" required="" minlength="5"></textarea>
                    <div class="invalid-feedback">Isi Alamat dulu</div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-graduation-cap"></i></span>
                    </div>
                    <input type="text" name="instansi" class="form-control" placeholder="Instansi" required="" minlength="3">
                    <div class="invalid-feedback">Isi instansi dulu</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="submitBtn">Save changes</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>