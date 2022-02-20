<div class="box-form">
	<?php 
		require_once '../config/connection.php';
		$id_category = $_GET["categories_id"];
		$query = $DBCONNECTION->prepare("SELECT * FROM kategori WHERE id_kategori = '$id_category' ");
		$query->execute();
		while ($data = $query->fetch(PDO::FETCH_LAZY)) { ?>

				<div class="header"></div>
				<form action="module/categories/editCategories.php" method="POST">
				<div class="form-group" style="margin-top: 0px;">
					<label>Name</label>
					<br>
					<input type="hidden" name="id_category" value="<?= $data["id_kategori"] ?>">
					<input type="text" name="name" value="<?= $data["nama"]; ?>">
				</div>
				<br>
				<div class="form-group">
					<button type="submit" class="btn-save">Simpan perubahan</button>
				</div>
				</form>
				<div class="footer"></div>

	 <?php	}
	 ?>
	<div class="footer"></div>
</div>