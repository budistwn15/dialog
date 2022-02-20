<?php 

		require_once '../../../config/connection.php';
		$judul      = addslashes($_POST["judul"]);
		$sutradara  = addslashes(trim($_POST["sutradara"]));
		$kategori   = $_POST["kategori"];
		$tanggal_rilis = $_POST["tanggal_rilis"];
		$tanggal_tayang = $_POST["tanggal_tayang"];
		$review_film =  addslashes(trim($_POST["review"]));
		$ukuran_gambar = $_FILES["gambarFilm"]["size"];
		$nama_gambar = $_FILES["gambarFilm"]["name"];
		$lokasi_gambar = $_FILES["gambarFilm"]["tmp_name"];
		$type_gambar = $_FILES["gambarFilm"]["type"];
		$ekstensi_diperbolehkan = array("png","jpg","jpeg","gif");
		$x = explode('.',$nama_gambar);
	    $ekstensi = strtolower(end($x));
		$date = date("Y-m-d");
		$url_upload ="../../../upload/pic_film/".$nama_gambar."_".$date;
		$name_file ="pic_film_".$time."_".$nama_gambar;
		if(is_uploaded_file($lokasi_gambar)){
			if(in_array($ekstensi,$ekstensi_diperbolehkan) == true){
				if($ukuran_gambar <= 5000000){
					move_uploaded_file($lokasi_gambar,$url_upload);
					$query = $DBCONNECTION->prepare("INSERT INTO `film` (`id_film`, `judul`, `tgl_rilis`, `tgl_tayang`, `sutradara`, `gambar`, `review`, `id_kategori`) VALUES (NULL, '$judul', '$tanggal_rilis', '$tanggal_tayang', '$sutradara', '$name_file', '$review_film', '$kategori')");
					if($query->execute()){
						header('location:../../index.php?module=film&notification=3');				
					}
				}else{
					echo "<script>alert('file terlalu kegedean'); window.location ='../../index.php?module=film';</script>";				
				}
			}else{
				echo "<script>alert('Ekstensi file tidak di perboleh kan'); window.location ='../../index.php?module=film';</script>";
			}
		}else{
			$query = $DBCONNECTION->prepare("INSERT INTO `film` (`id_film`, `judul`, `tgl_rilis`, `tgl_tayang`, `sutradara`, `gambar`, `review`, `id_kategori`) VALUES (NULL, '$judul', '$tanggal_rilis', '$tanggal_tayang', '$sutradara', '', '$review_film', '$kategori')");
			if($query->execute()){
				header('location:../../index.php?module=film&notification=3');	
			}
		}
		
?>