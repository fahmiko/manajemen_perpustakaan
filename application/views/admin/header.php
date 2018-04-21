<!DOCTYPE html>
<html>
<head>
	<title>Sistem Perpustakaan</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/style-navbar.css'?>">
</head>
<body>
<div id="wrapper" class="active">
  <div id="sidebar-wrapper">
    <ul id="sidebar_menu" class="sidebar-nav">
        <li class="sidebar-brand"><a id="menu-toggle" href="#">Panel Admin<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
    </ul>
    <ul class="sidebar-nav" id="sidebar">     
      <li><a href="<?php echo site_url('admin')?>">Home<span class="sub_icon glyphicon glyphicon-home"></span></a></li>
      <li><a href="<?php echo site_url('admin/buku')?>">Buku<span class="sub_icon glyphicon glyphicon-book"></span></a></li>
      <li><a href="#">Member<span class="sub_icon glyphicon glyphicon-user"></span></a></li>
      <li><a href="<?php echo site_url('admin/pinjaman')?>">Pinjaman<span class="sub_icon glyphicon glyphicon-asterisk"></span></a></li>
      <li><a href="<?php echo site_url('admin/logout')?>">Keluar<span class="sub_icon glyphicon glyphicon-log-out"></span></a></li>
    </ul>
  </div>    
<div id="page-content-wrapper">
<!-- Keep all page content within the page-content inset div! -->
<div class="page-content inset">
<div class="row">
<div class="col-md-12">