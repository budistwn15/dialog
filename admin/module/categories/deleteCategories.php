<?php
	require_once '../config/connection.php';
	$id_category = $_GET["categories_id"];
	$query[] = "DELETE FROM `kategori` WHERE `id_kategori` = '$id_category'";
	$query[] = "DELETE FROM `film` WHERE `id_kategori` = '$id_category'";
	foreach ($query as $value) {
		$executeQuery  = $DBCONNECTION->prepare($value);
		$executeQuery->execute();
		if($executeQuery){
			header('location:index.php?module=kategori&notification=1');
		}else{
			echo "Gagal di hapus";
		}
	}

 ?>
