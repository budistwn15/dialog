<div class="user">
	
	<div style="clear:both;"></div>
	<?php require_once 'template/alert.php'; ?>
	<?php
		$act = $_GET["act"];
		switch ($act) {
			case 'delete':
				require_once 'module/user/deleteUser.php';
				break;
			default:
					require_once 'module/user/getUser.php';
				break;
		}
	 ?>
</div>
