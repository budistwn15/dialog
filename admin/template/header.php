<?php
	session_start();
	error_reporting(0);
	if(empty($_SESSION["login"] == true && $_SESSION["akses"] == "admin")){
		header('location:../login.php');
	}
	require_once '../config/connection.php';
	require_once '../function/function.php'
?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style-admin.css">
	<link rel="stylesheet" type="text/css" href="../assets/vendors/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<header>
		<a href="index.php" class="logo">D</a>
		<ul id="menuDropdown">
			<li><a href="index.php">Dashboard</a></li>
			<li><a href="?module=pengunjung">Pengunjung</a></li>
			<li><a href="?module=kategori">Kategori</a></li>
			<li><a href="?module=film">Film</a></li>
			<li><a href="?module=trailer">Trailer Film</a></li>
		</ul>
		<div class="nav-toggle" onclick="dropdown(this)">
			<div></div>
			<div></div>
			<div></div>
		</div>
	</header>
<?php
		if(empty($_GET["module"])){
			require_once "waves-landing.php";
		}else{
			require_once "nav-2.php";
		}
?>