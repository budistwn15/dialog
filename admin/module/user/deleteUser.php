<?php
	require_once '../config/connection.php';
	$id_user = $_GET["user_id"];
	$deleteImage = $DBCONNECTION->prepare("SELECT * FROM `pengunjung` WHERE `id_user` = '$id_user'");
	$deleteImage->execute();
	$data = $deleteImage->fetch(PDO::FETCH_LAZY);
	$url = "../upload/pic_profile/".$data["foto"];
	unlink($url);
	$query[] = "DELETE  FROM `user` WHERE `id_user` = '$id_user'";
	$query[] = "DELETE  FROM `pengunjung` WHERE `id_user` = '$id_user'";
	foreach ($query as $value) {
		$executeQuery = $DBCONNECTION->prepare($value);
		$executeQuery->execute();
		if($executeQuery){
			header('location:index.php?module=pengunjung&notification=2');
		}else{
			echo "Gagal di hapus";
		}
	}

 ?>
