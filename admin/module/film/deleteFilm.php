<?php
		require_once '../config/connection.php';
		$id_film = $_GET["film_id"];
		$deleteImage = $DBCONNECTION->prepare("SELECT * FROM `film` WHERE `id_film` = '$id_film'");
		$deleteImage->execute();
		$data = $deleteImage->fetch(PDO::FETCH_LAZY);
		$url = "../upload/pic_film/".$data["gambar"];
		unlink($url);
		$executeQuery  = $DBCONNECTION->prepare("DELETE FROM `film` WHERE `id_film` = '$id_film'");
		$executeQuery->execute();
		if($executeQuery){
			header('location:index.php?module=film&notification=1');
		}else{
			echo "Gagal di hapus";
		}

 ?>
