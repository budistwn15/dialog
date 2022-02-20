<div class="box-form">
	<div class="header"></div>
	<form action="module/trailer/addTrailer.php" method="POST" enctype="multipart/form-data">
	<div class="form-group" style="margin-top: 0px;">
		<label>Film</label>
		<br>
        <select name="film">
            <option selected disabled>[ Pilih Film ]</option>
            <?php 
                $query = $DBCONNECTION->prepare("SELECT * FROM `film`");
                $query->execute();
                while($data = $query->fetch(PDO::FETCH_LAZY)){
                    echo "<option value=".$data['id_film'].">".$data["judul"]."</option>";
                }
            ?>
        </select>
	</div>
    <div class="form-group" style="margin-top: 0px;">
		<label>File</label>
		<br>
       <input type="file" name="trailer">
	</div>
	<br>
	<div class="form-group">
		<button type="submit" class="btn-save">Simpan</button>
	</div>
	</form>
	<div class="footer"></div>
</div>