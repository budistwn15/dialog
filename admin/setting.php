<div class="categories">

	<div style="clear: both;"></div>
	<?php require_once 'template/alert.php'; ?>
	<div class="box-form">
	<div class="header"></div>
	<?php
		$query = $DBCONNECTION->prepare("SELECT * FROM `user` WHERE level = 'admin'");
		$query->execute();
		while($data = $query->fetch(PDO::FETCH_LAZY)){?>
	<form action="module/setting/changePassword.php" method="POST">
		<div class="form-group">
			<label>Password lama</label>
			<br>
			<input type="password" name="oldPassword">
		</div>
		<div class="form-group">
			<label>Password baru</label>
			<br>
			<input type="password" name="newPassword">
		</div>

		<br>
		<div class="form-group">
			<button type="submit" class="btn-save">Simpan perubahan</button>
		</div>
	</form>
	<?php	}
	 ?>

	<div class="footer"></div>
</div>
</div>
