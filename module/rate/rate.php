<?php 
    error_reporting(0);
    session_start();
    $id_pengunjung = $_SESSION["id_pengunjung"];
    $status = $_GET["status"];
    $id_film = $_GET["film_id"];
    require_once '../../config/connection.php';
    $cek = $DBCONNECTION->prepare("SELECT * FROM `rate` WHERE `id_pengunjung` = '$id_pengunjung' AND `id_film` = '$id_film'");
    $cek->execute();
    if($cek->rowCount() >= 1){
        while($data = $cek->fetch(PDO::FETCH_LAZY)){
            if($data["status"] >= 1){
                $updateRate = $DBCONNECTION->prepare("UPDATE `rate` SET `status` = '0' WHERE id_pengunjung = '$id_pengunjung' AND id_film = '$id_film'");
                if($updateRate->execute()){
                    echo "<script>alert('Feedback berhasil di ubah'); window.history.back();</script>";
                }
            }else{
                $updateRate = $DBCONNECTION->prepare("UPDATE `rate` SET `status` = '1' WHERE id_pengunjung = '$id_pengunjung' AND id_film = '$id_film'");
                if($updateRate->execute()){
                    echo "<script>alert('Feedback    di ubah'); window.history.back();</script>";
                }
            }
        }
    }else{
        $query = $DBCONNECTION->prepare("INSERT INTO `rate` (`id_rate`,`status`,`id_film`,`id_pengunjung`)VALUES(NULL,'$status','$id_film','$id_pengunjung')");
        if($query->execute()){
            echo "<script>alert('Terimakasih telah memberikan feedback'); window.history.back();</script>";
        }else{
            echo 'gagal';
            }
     }

?>