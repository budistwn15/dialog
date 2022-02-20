<?php
    if(isset($_GET['page'])) $page = $_GET['page'];
    else $page = "beranda";

    if(empty($page) or $page == "beranda") include("default.php");
        elseif($page == "ulasan") {
            require_once 'template/header.php';
            echo "<div id='main'>";
            include("module/film/ulasan.php");
            echo "</div>";
        }
        elseif($page == "detail_film") {
            require_once 'template/header.php';
            echo "<div id='main'>";
            include("module/film/detail_film.php");
            echo "</div>";
        }
    require_once 'template/footer.php'
?>
