<?php 
	require_once '../../.././config/connection.php';
		$name  = addslashes(trim($_POST["name"]));
		
	   	if($name == ""){
	   		echo "<script>
	   		alert('silahkan isi data dengan benar');
	   		document.location='../../index.php?module=categories&act=formAdd'
	   		</script>";
	   	}else{
    		$query = $DBCONNECTION->prepare("INSERT INTO kategori (`id_kategori`,`nama`)VALUES(NULL,'$name')");
    		if($query->execute()){
				header('location:../../index.php?module=kategori&notification=3');
    		}
	   	}
 ?>