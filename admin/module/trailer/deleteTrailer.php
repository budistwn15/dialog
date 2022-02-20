<?php 
	require_once '../config/connection.php';
	$id_trailer = $_GET["id_trailer"];

	$query = $DBCONNECTION->prepare("SELECT * FROM `trailer` WHERE `id_trailer` = '$id_trailer'");
	$query->execute();
	$data = $query->fetch(PDO::FETCH_LAZY);
	unlink('../upload/trailer/'.$data["video"]);
	$delQuery = $DBCONNECTION->prepare("DELETE FROM `trailer` WHERE `id_trailer` = '$id_trailer'");
	if($delQuery->execute()){
		header('location: index.php?module=trailer&notification=1');
	}
 ?>