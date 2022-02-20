<?php
	if(!defined("INDEX") or die("---"));
	require_once 'template/header.php'; 

?>
	<div class="container">
		<?php
            $module = $_GET["module"];
            switch ($module) {
            	case 'pengunjung':
            			require_once 'user.php';
            		break;
            	case 'film':
            			require_once 'film.php';
            		break;
            	case 'kategori':
            			require_once 'categories.php';
            		break;
            	case 'trailer':
            			require_once 'trailer.php';
            		break;
            	case 'setting':
            			require_once 'setting.php';
            		break;
            	default:
            			require_once 'default.php';
            		break;
            }
		 ?>
</div>
<?php require_once 'template/footer.php'; ?>
