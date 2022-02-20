<div class="search-hal-container">
	<div id="content">
	    <?php
	        // if (isset($_SESSION['id_pengunjung'])) { ?>
	            <div class="row">
	                <div class="col-12 alert-container">
	                    <div class="alert alert-success">
	                        <i class="fas fa-check"></i>
	                        <p>Selamat datang,  <b><?php echo $_SESSION['nama']; ?></b></p>
	                    </div>
	                </div>
	            </div>
	    <?php
	        // }
	    ?>
	    <!-- search container -->
	    <div class="search-hal">
	        <form action="" method="get" class="cari">
	            <input type="text" name="cari" placeholder="Cari ulasan film..." required>
	            <button type="submit"><i class="fas fa-search"></i></button>
	        </form>
	        <div class="col-12 kategori">
	            <h2>Kategori Film</h2>
	            <?php
	                $query = $DBCONNECTION->prepare("SELECT * FROM kategori");
	                $query->execute();
	                while($data = $query->fetch(PDO::FETCH_LAZY)) {
	                		$nama = $data['nama'];
	                		$gambar = $data['gambar'];
	                	?>
	                    <div class="col-3 col-m-6 gambar-kategori">
	                    	<img src="upload/pic_kategori/<?php echo $gambar; ?>" width="100px" height="100px" alt="">
	                    </div>
	                <?php
	                    }
	                ?>
	        </div>
	    </div>
	</div>
</div>  

<div class="box-container">
    <div id="content">
        <h2>Ulasan Film</h2>
        <!-- box film -->   
        <div class="row">
        <?php
            $query  = $DBCONNECTION->prepare("SELECT * FROM film ORDER BY id_film ASC");
            $query->execute();
            while($data = $query->fetch(PDO::FETCH_LAZY)){
                $isi = substr($data['review'],0,100);
                ?>
            <div class="col-4 col-m-6 ulasan-container">
                <div class="ulasan">
                    <div class="thumbnail">
                        <a href="?module=detail_film&film_id=<?= $data["id_film"]; ?>">
                            <img src="upload/pic_film/<?= $data['gambar']; ?>" alt="">
                            <div class="overlay2">
                                <i class="fas fa-search"></i>
                            </div>
                        </a>
                    </div>
                    <div class="ulasan-body">
                        <h3><a href="?module=detail_film&film_id=<?= $data["id_film"]; ?>">
                            <?php
                                if (strlen($data['judul'])<=50) {
                                    echo $data['judul'];
                                }
                                else{
                                    $judul = substr($data['judul'],0,50);
                                    echo $judul." ..";
                                }
                            ?> 
                        </a></h3>
                        <span>
                            <?php
                                    $rate = $DBCONNECTION->prepare("SELECT count(*) AS amountRate FROM rate  WHERE id_film = '$data[id_film]' AND status = '1'");
                                    $rate->execute();
                                    while($dataRate = $rate->fetch(PDO::FETCH_LAZY)){
                                        if($dataRate["amountRate"] >= 5){
                                            echo '
                                            <ul class="rate">
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                             </ul>
                                            ';
                                        }elseif($dataRate["amountRate"] >= 4){
                                            echo '
                                            <ul class="rate">
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                             </ul>
                                            ';
                                        }elseif($dataRate["amountRate"] >= 3){
                                            echo '
                                            <ul class="rate">
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                             </ul>
                                            ';
                                        }elseif($dataRate["amountRate"] >= 2){
                                            echo '
                                            <ul class="rate">
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                             </ul>
                                            ';  
                                        }elseif($dataRate["amountRate"] >= 1){
                                            echo '
                                            <ul class="rate">
                                                <li><i class="fas fa-star rate-is-active"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                             </ul>
                                            ';
                                        }else{
                                            echo '
                                            <ul class="rate">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                             </ul>
                                            ';
                                        }
                                    }
                                ?>
                        </span>
                        <p><?php echo $isi; ?>...</p>
                        <div class="ulasan-footer">
                            <span><i class="far fa-clock"></i> Tgl</span>
                            <span><i class="far fa-comments"></i> Komentar</span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
            <div class="clear"></div>
        </div>
    </div>
</div>