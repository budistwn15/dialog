<?php 

		require_once '../../../config/connection.php';
		$id_film = $_POST["id_film"];
		$judul      = addslashes(trim($_POST["judul"]));
		$sutradara  = addslashes(trim($_POST["sutradara"]));
		$kategori   = $_POST["kategori"];
		$tanggal_rilis = $_POST["tanggal_rilis"];
		$tanggal_tayang = $_POST["tanggal_tayang"];
		$review_film = addslashes(trim($_POST["review"]));
		$ukuran_gambar = $_FILES["gambarFilm"]["size"];
		$nama_gambar = $_FILES["gambarFilm"]["name"];
		$lokasi_gambar = $_FILES["gambarFilm"]["tmp_name"];
		$type_gambar = $_FILES["gambarFilm"]["type"];
		$ekstensi_diperbolehkan = array("png","jpg","jpeg","gif");
		$x = explode('.',$nama_gambar);
	    $ekstensi = strtolower(end($x));
		$time = time();
		$url_upload ="../../../upload/pic_film/pic_film_".$time."_".$nama_gambar;
		$name_file ="pic_film_".$time."_".$nama_gambar;
		if(is_uploaded_file($lokasi_gambar)){
			if(in_array($ekstensi,$ekstensi_diperbolehkan) == true){
				if($ukuran_gambar <= 5000000){
					move_uploaded_file($lokasi_gambar,$url_upload);
					$query = $DBCONNECTION->prepare("UPDATE `film` SET `judul` = '$judul', `tgl_rilis` = '$tanggal_rilis', `tgl_tayang` = '$tanggal_tayang', `sutradara` = '$sutradara', `gambar` = '$name_file', `review` = '$review_film', `id_kategori` = '$kategori' WHERE `id_film` ='$id_film'");
					if($query->execute()){
						header('location:../../index.php?module=film&notification=1');				
					}else{
						echo "gagal edit";
					}
				}else{
					echo "<script>alert('file terlalu kegedean'); window.location ='../../index.php?module=film';</script>";				
				}
			}else{
				echo "<script>alert('Ekstensi file tidak di perboleh kan'); window.location ='../../index.php?module=film';</script>";
			}
		}else{
			$query = $DBCONNECTION->prepare("UPDATE `film` SET `judul` = '$judul', `tgl_rilis` = '$tanggal_rilis', `tgl_tayang` = '$tanggal_tayang', `sutradara` = '$sutradara', `review` = '$review_film',`id_kategori` = '$kategori' WHERE `id_film` ='$id_film'");
			if($query->execute()){
				header('location:../../index.php?module=film&notification=2');	
			}
		}
?>