<div class="nav-2">
    <ul class="breadcumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard /</a></li>
        <li><a href="index.php?module=<?= $_GET['module']; ?>"  class="breadcumb-is-active"><?= ucfirst($_GET["module"]); ?></a></li>
    </ul>
    <?php 
            if($_GET["module"] != "pengunjung"){ ?>
                <a href="<?= '?module='.$_GET[module].'&act=formAdd'; ?>" class="btn-add-new">Data baru</a>
    <?php  
      }
    ?>
</div>