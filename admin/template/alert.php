<?php
  if(isset($_GET["notification"])){ ?>
    <div class="notification">
    <?php
      $notification = $_GET["notification"];
      switch ($notification) {
        case '1':
          echo "<p>Data berhasil di hapus .</p>";
          break;
        case '2':
          echo "<p>Data berhasil di ubah .</p>";
          break;
        case '3':
          echo "<p>Data berhasil di tambahkan  .</p>";
          break;
          
        default:
          break;
      }
    }
     ?>
 </div>
