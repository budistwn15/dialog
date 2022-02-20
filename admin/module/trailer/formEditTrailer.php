
<div class="box-form">
	<?php 
		$id_trailer = $_GET["id_trailer"];
		$query = $DBCONNECTION->prepare("SELECT * FROM trailer WHERE id_trailer = '$id_trailer'");
		$query->execute();
		while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
				<div class="header"></div>
					<form action="module/trailer/editTrailer.php" method="POST" enctype="multipart/form-data">
					<div class="form-group" style="margin-top: 0px;">
						<label>Film</label>
						<br>
						<input type="hidden" value="<?=  $data["id_trailer"]; ?>" name="id_trailer">
				        <select name="film">
				            <option value="<?= $data["id_film"]; ?>">[ Pilih Film ]</option>
				            <?php 
				                $query2 = $DBCONNECTION->prepare("SELECT * FROM `film`");
				                $query2->execute();
				                while($data2 = $query2->fetch(PDO::FETCH_LAZY)){
				                    echo "<option value=".$data2['id_film'].">".$data2["judul"]."</option>";
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
						<button type="submit" class="btn-save">Simpan perubahan</button>
					</div>
					</form>
				<div class="footer"></div>
	<?php	}
	 ?>
	
</div>