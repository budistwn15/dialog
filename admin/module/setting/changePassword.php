<?php
	require_once '../../../config/connection.php';
	$oldPassword     = md5($_POST["oldPassword"]);
	$newPassword     = md5($_POST["newPassword"]);
	$query = $DBCONNECTION->prepare("SELECT * FROM `user` WHERE `level` = 'admin'");
	$query->execute();
	while($data = $query->fetch(PDO::FETCH_LAZY)){
		if($oldPassword != $data["password"]){
			echo "<script>alert('password tidak sama'); document.location='../../index.php?module=setting'</script>";
		}else{
			$query = $DBCONNECTION->prepare("UPDATE `user` SET `password` = '$newPassword' WHERE `level` = 'admin'");
			if($query->execute()){
				echo "<script>document.location='../../index.php?module=setting&notification=2'</script>";
			}

		}
	}
