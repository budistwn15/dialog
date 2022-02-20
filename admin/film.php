<div class="film">
	
	<div style="clear:both;"></div>
	<?php require_once 'template/alert.php'; ?>
	<?php
		$act = $_GET["act"];
		switch ($act) {
			case 'delete':
				require_once 'module/film/deletefilm.php';
				break;
			case 'edit':
				require_once 'module/film/formEditfilm.php';
				break;
			case 'formAdd':
				require_once 'module/film/formAddfilm.php';
				break;
			default:
					require_once 'module/film/getfilm.php';
			break;
		}
	 ?>
</div>
