<div class="topic">
	
	<div style="clear:both;"></div>
	<?php require_once 'template/alert.php'; ?>
	<?php
		$act = $_GET["act"];
		switch ($act) {
			case 'delete':
				require_once 'module/trailer/deleteTrailer.php';
                break;
            case 'formAdd':
				require_once 'module/trailer/formAddTrailer.php';
				break;
			case 'formEdit':
				require_once 'module/trailer/formEditTrailer.php';
			break;   
				default:
					require_once 'module/trailer/getTrailer.php';
				break;
		}
	 ?>
</div>


								
