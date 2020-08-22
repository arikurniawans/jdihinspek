<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel JDIH</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/simple-datatables/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/datepicker/datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
</head>
<body>
<div id="app">
    <!-- sidebar -->
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <img src="<?php echo base_url(); ?>assets/images/avatar/avatar-user.svg" alt="" srcset="">
                <div class="backup-user-info">
                    <p class="name-user"><?php echo $this->session->userdata('nama_lengkap'); ?></p>
                    <div class="user-status">
                        <span class="circle"></span>&nbsp;
                        <span class="user-level"><?php echo $this->session->userdata('role'); ?></span>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class='sidebar-title'>Main Menu</li>

                    <li class="sidebar-item">
                        <a href="<?php echo base_url(); ?>dashboard" class='sidebar-link'>
                            <i data-feather="home" width="20"></i> 
                            <span>Dashboard</span>
                        </a>

                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i> 
                            <span>Produk Hukum</span>
                        </a>

                        <ul class="submenu ">
                            <li>
                                <a href="<?php echo base_url(); ?>produkhukum">Daftar produk Hukum</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>produkhukum/addprodukhukum">Add produk Hukum</a>
                            </li>
                        </ul>
                    </li>
                    <?php if($this->session->userdata('role') == "admin"){ ?>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="users" width="20"></i> 
                            <span>Pengaturan User</span>
                        </a>
                        <ul class="submenu ">

                            <li>
                                <a href="<?php echo base_url(); ?>users">Daftar User</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(); ?>users/addusers">Add User</a>
                            </li>

                        </ul>
                    </li>
                    <?php } ?>


                    <li class="sidebar-item">
                        <a href="<?php echo base_url(); ?>users/profilusers" class='sidebar-link'>
                            <i data-feather="user" width="20"></i> 
                            <span>Profile Saya</span>
                        </a>

                    </li>

                    <li class="sidebar-item  ">
                        <a href="" data-toggle="modal" data-target="#border-less-logout" class='sidebar-link'>
                            <i data-feather="log-out" width="20"></i> 
                            <span>Logout</span>
                        </a>
                    </li>

                </ul>

            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <!-- end sidebar -->
    <div id="main">
      
    <!-- top nav -->
    <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <button class="btn navbar-toggler" type="button" data-toggle="collapse"    data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">

                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <div class="avatar mr-1">
                                <img src="<?php echo base_url(); ?>assets/images/avatar/avatar-user.svg" alt="" srcset="">
                            </div>
                            <div class="user-txt">Hi, <?php echo $this->session->userdata('nama_lengkap'); ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?php echo base_url(); ?>users/profilusers">
                                <i data-feather="user"></i> Profile Saya
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#border-less-logout">
                                <i data-feather="log-out"></i> Logout
                            </a>
                        </div>
                    </li>
                    
                   

                </ul>
            </div>
        </nav>
    <!-- end top nav -->
      