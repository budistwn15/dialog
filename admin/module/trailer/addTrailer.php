<?php
    error_reporting(0);
    require_once '../../../config/connection.php';
    $film = $_POST["film"];
    $nama_video = $_FILES["trailer"]["name"];
    $lokasi_video = $_FILES["trailer"]["tmp_name"];
    $ukuran_video = $_FILES["trailerFilm"]["size"];
    $jenis_video = $_FILES["trailerFilm"]["type"];
    $ekstensi_diperbolehkan = array("mkv","mp4","mov");
    $x = explode('.',$nama_video);
    $ekstensi = strtolower(end($x));
    $time = time();
    $url_upload ="../../../upload/trailer/video_trailer_".$time."_".$nama_video;
    $name_file ="video_trailer_".$time."_".$nama_video;
    if(is_uploaded_file($lokasi_video)){
        if(in_array($ekstensi,$ekstensi_diperbolehkan) == true){
            if($ukuran_video <= 4000000){
                move_uploaded_file($lokasi_video,$url_upload);
				$query = $DBCONNECTION->prepare("INSERT INTO `trailer` (`id_trailer`, `video`, `id_film`) VALUES (NULL, '$name_file','$film')");
				if($query->execute()){
					header('location:../../index.php?module=trailer&notification=3');				
				}
            }else{
				echo "<script>alert('file terlalu kegedean'); window.location ='../../index.php?module=trailer';</script>";				
            }
        }else{
            echo "<script>alert('Ektensi file tidak di ijinkan');window.location='../../index.php?module=trailer'</script>";
        }
    }else{
        echo "<script>alert('Silah kan masukan video');window.location='../../index.php?module=trailer'</script>";
    }
?>