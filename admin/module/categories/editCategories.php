<?php 
	require_once '../../.././config/connection.php';
		$name  = addslashes(trim($_POST["name"]));
		$id_category  = $_POST["id_category"];
		
	   	if($name == ""){
	   		echo "<script>
	   		alert('silahkan isi data dengan benar');
	   		document.location='../../index.php?module=categories&act=edit&topic_id=".$id_topic."'
	   		</script>";
	   	}else{
    		$query = $DBCONNECTION->prepare("UPDATE kategori SET `nama` = '$name' WHERE id_kategori = '$id_category'");
    		if($query->execute()){
				header('location:../../index.php?module=kategori&notification=2');
    		}
	   	}
 ?>