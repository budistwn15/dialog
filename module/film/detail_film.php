<br>
<br>
<div class="col-md-12 detail-film">
    <?php
            $id_film = $_GET["film_id"];
            $query = $DBCONNECTION->prepare("SELECT * FROM `film` WHERE `id_film` = '$id_film'");
            $query->execute();
            while($data = $query->fetch(PDO::FETCH_LAZY)){ ?>
                <img src="upload/<?= $data["gambar"]; ?>" alt="">
                <?php
                    $rate = $DBCONNECTION->prepare("SELECT count(*) AS amountRate FROM rate  WHERE id_film = '$data[id_film]' and `status` = '1' ");
                    $rate->execute();
                    while($dataRate = $rate->fetch(PDO::FETCH_LAZY)){
                        if($dataRate["amountRate"] >= 5){
                            echo '
                            <ul class="rate">
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                </ul>
                            ';
                        }elseif($dataRate["amountRate"] >= 4){
                            echo '
                            <ul class="rate">
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                </ul>
                            ';
                        }elseif($dataRate["amountRate"] >= 3){
                            echo '
                            <ul class="rate">
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                </ul>
                            ';
                        }elseif($dataRate["amountRate"] >= 2){
                            echo '
                            <ul class="rate">
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                </ul>
                            ';  
                        }elseif($dataRate["amountRate"] >= 1){
                            echo '
                            <ul class="rate">
                                <li><i class="fa fa-star rate-is-active"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                </ul>
                            ';
                        }else{
                             echo '
                            <ul class="rate">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                </ul>
                            ';
                        }
                        }
                ?>
                <p>Review Film <b> <?= ucwords($data["judul"]); ?> </b></p>
                        <?php 
                            if(isset($_SESSION["id_pengunjung"])){
                                $cek = $DBCONNECTION->prepare("SELECT * FROM `rate` WHERE `id_pengunjung` = '$_SESSION[id_pengunjung]' AND `id_film` = '$data[id_film]'");
                                $cek->execute();
                                if($cek->rowCount() >= 1){
                                    while($dataCek = $cek->fetch(PDO::FETCH_LAZY)){
                                        if($dataCek["status"] >= 1){
                                          echo "<ul class='thumbs'>";
                                            echo "<li><i class='fa fa-thumbs-o-up fa-2x thumbs-is-active'></i></li>";
                                            echo "<li><a href='module/rate/rate.php?film_id=".$data['id_film']."&status=0'><i class='fa fa-thumbs-o-down fa-2x'></i></a></li>";
                                          echo "</ul>";
                                        }else{
                                            echo "<ul class='thumbs'>";
                                            echo "<li><a href='module/rate/rate.php?film_id=".$data['id_film']."&status=1'><i class='fa fa-thumbs-o-up fa-2x'></i></a></li>";
                                            echo "<li><i class='fa fa-thumbs-o-down fa-2x thumbs-is-active'></i></li>";                                    
                                          echo "</ul>"; 
                                        }
                                    }
                                }else{
                                    echo "<ul class='thumbs'>";
                                        echo "<li><a href='module/rate/rate.php?film_id=".$data['id_film']."&status=1'><i class='fa fa-thumbs-o-up fa-2x'></i></a></li>";
                                        echo "<li><a href='module/rate/rate.php?film_id=".$data['id_film']."&status=0'><i class='fa fa-thumbs-o-down fa-2x'></i></a></li>";
                                    echo "</ul>";
                                }
                                
                            }else{
                                echo "<ul class='thumbs'>";
                                    echo "<li><i class='fa fa-thumbs-o-up fa-2x'></i><li>";
                                    echo "<li><i class='fa fa-thumbs-o-down fa-2x'></i><li>";
                                echo "</ul>"; 
                            }
                        ?>
                <p>
                    Genre Film 
                    <b>
                        <?php
                                $kategori  = $DBCONNECTION->prepare("SELECT * FROM kategori WHERE id_kategori = '$data[id_kategori]'");
                                $kategori->execute();
                                while($dataKategori = $kategori->fetch(PDO::FETCH_LAZY)){
                                    echo $dataKategori["nama"];
                                }
                                
                        ?>
                    </b>
                </p>  
                <p>Sutradara <b> <?= ucwords($data["sutradara"]); ?> </b></p>                
                <p>Tanggal rilis : <?= $data["tgl_rilis"]; ?></p>
                <p>Sinopsis : <?= $data["review"]; ?></p>
                
    <?php        }
    ?>
</div>