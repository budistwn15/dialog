<div class="box-form">
	<?php 
		require_once '../config/connection.php';
		$id_film = $_GET["film_id"];
		$query = $DBCONNECTION->prepare("SELECT * FROM film WHERE id_film = '$id_film' ");
		$query->execute();
		while ($data = $query->fetch(PDO::FETCH_LAZY)) { ?>
		<div class="header"></div>
			<form action="module/film/editfilm.php" method="POST" enctype="multipart/form-data">
			<div class="form-group" style="margin-top: 0px;">
				<label>Judul</label>
				<br>
				<input type="hidden" name="id_film" value="<?= $data["id_film"]; ?>">
				<input type="text" name="judul" value="<?= $data["judul"]; ?>">
			</div>
			<div class="form-group" style="margin-top: 0px;">
				<label>Sutradara</label>
				<br>
				<input type="text" name="sutradara" value="<?= $data["sutradara"]; ?>">
			</div>
			<div class="form-group" style="margin-top: 0px;">
				<label>Kategori Film</label>
				<br>
				<select name="kategori">
					<option value="<?= $data["id_kategori"]; ?>">[ Pilih Kategori Film ]</option>
					<?php 
						$query2 = $DBCONNECTION->prepare("SELECT * FROM `kategori`");
						$query2->execute();
						while($data2 = $query2->fetch(PDO::FETCH_LAZY)){
							echo "<option value=".$data2[id_kategori].">".$data2['nama']."</option>";
						}
					?>
				</select>
			</div>
			<div class="form-group" style="margin-top: 0px;">
				<label>Tangal rilis</label>
				<br>
				<input type="date" name="tanggal_rilis" value="<?= $data["tgl_rilis"]; ?>">
			</div>
			<div class="form-group" style="margin-top: 0px;">
				<label>Tanggal tayang</label>
				<br>
				<input type="date" name="tanggal_tayang" value="<?= $data["tgl_tayang"]; ?>">
			</div>
			<div class="form-group" style="margin-top: 0px;">
				<label>Review film</label>
				<br>
				<textarea name="review"><?= $data["review"]; ?></textarea>
			</div>
			<br>
			<div class="form-group" style="margin-top: 0px;">
				<label>Gambar film</label>
				<br>
				<input type="file" name="gambarFilm">
			</div>
			<br>
			<div class="form-group">
				<button type="submit" class="btn-save">Simpan perubahan</button>
			</div>
			</form>
		<div class="footer"></div>			
	 <?php	}
	 ?>
</div>