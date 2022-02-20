<?php 
    session_start();
    require_once 'config/connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dialog</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script src="assets/js/page.js"></script>
</head>
<body>
    <!-- navbar -->
    <nav id="navbar" class="navbar-putih">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars" onclick="openNav()"></i>
        </span>
        <a href="index.php" class="logo"><img id="logo" src="assets/img/logo-hitam.png" alt=""></a>
        <ul class="main-nav" id="js-menu">
          <a href="#ulasan" class="nav-links">
            <li>Ulasan</li>
          </a>
          <a href="#tayang" class="nav-links">
            <li>Tayang Saat Ini</li>
          </a>
          <a href="#sinopsis" class="nav-links">
            <li>Sinopsis</li>
          </a>
          <a href="#request" class="nav-links">
            <li>Request Ulasan</li>
          </a>
        </ul>
        <?php
            if (empty($_SESSION['id_pengunjung'])) { ?>
                <ul class="menu-login">
                  <a href="#budaya" class="nav-links">
                    <li><i class="fas fa-sign-in-alt"></i> Login</li>
                  </a>
                  <a href="#wisata" class="nav-links">
                    <li><i class="fas fa-user"></i> Daftar</li>
                  </a>
                </ul>
        <?php
            }
        ?>
    </nav>

    <!-- side nav -->
    <div id="mySidenav" class="sidenav">
        <div class="sidenav-header">
            <h2>Menu</h2>
            <div class="clear"></div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
        <a href="#ulasan">Ulasan</a>
        <a href="#tayang">Tayang Saat Ini</a>
        <a href="#sinopsis">Sinopsis</a>
        <a href="#request">Request Ulasan</a>
    </div>

