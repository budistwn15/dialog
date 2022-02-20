<?php 
    require_once '../../../config/connection.php';
    $id_request = $_GET["request_id"];
    $query = $DBCONNECTION->prepare("DELETE FROM request_film WHERE id_request_film = '$id_request'");
    if($query->execute()){
        header('location: ../../index.php');
    }
?>