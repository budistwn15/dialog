<div class="box-form">
	<div class="header"></div>
	<form action="module/film/addfilm.php" method="POST" enctype="multipart/form-data">
	<div class="form-group" style="margin-top: 0px;">
		<label>Judul</label>
		<br>
		<input type="text" name="judul">
	</div>
	<div class="form-group" style="margin-top: 0px;">
		<label>Sutradara</label>
		<br>
		<input type="text" name="sutradara">
	</div>
	<div class="form-group" style="margin-top: 0px;">
		<label>Kategori Film</label>
		<br>
		<select name="kategori">
			<option selected disabled>[ Pilih Kategori Film ]</option>
			<?php 
				$query = $DBCONNECTION->prepare("SELECT * FROM `kategori`");
				$query->execute();
				while($data = $query->fetch(PDO::FETCH_LAZY)){
					echo "<option value=".$data[id_kategori].">".$data['nama']."</option>";
				}
			?>
		</select>
	</div>
	<div class="form-group" style="margin-top: 0px;">
		<label>Tangal rilis</label>
		<br>
		<input type="date" name="tanggal_rilis">
	</div>
	<div class="form-group" style="margin-top: 0px;">
		<label>Tangal tayang</label>
		<br>
		<input type="date" name="tanggal_tayang">
	</div>
	<div class="form-group" style="margin-top: 0px;">
		<label>Review film</label>
		<br>
		<textarea name="review" ></textarea>
	</div>
	<br>
	<div class="form-group" style="margin-top: 0px;">
		<label>Gambar film</label>
		<br>
		<input type="file" name="gambarFilm">
	</div>
	<br>
	<div class="form-group">
		<button type="submit" class="btn-save">Simpan</button>
	</div>
	</form>
	<div class="footer"></div>
</div>