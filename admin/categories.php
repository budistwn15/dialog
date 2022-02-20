<div class="categories">
	
	<div style="clear:both;"></div>
	<?php require_once 'template/alert.php'; ?>
	<?php
		$act = $_GET["act"];
		switch ($act) {
			case 'delete':
				require_once 'module/categories/deleteCategories.php';
				break;
			case 'edit':
				require_once 'module/categories/formEditCategories.php';
				break;
			case 'formAdd':
				require_once 'module/categories/formAddCategories.php';
				break;
			default:
					require_once 'module/categories/getCategories.php';
			break;
		}
	 ?>
</div>
