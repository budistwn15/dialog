<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dialog</title>
    <link rel="icon" href="assets/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav id="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars" onclick="openNav()"></i>
        </span>
        <a href="index.php" class="logo"><img id="logo" src="assets/img/logo-putih.png" alt=""></a>
        <ul class="main-nav" id="js-menu">
          <a href="#ulasan" class="nav-links">
            <li>Ulasan</li>
          </a>
          <a href="#tayang" class="nav-links">
            <li>Tayang Saat Ini</li>
          </a>
          <a href="#sinopsis" class="nav-links">
            <li>Sinopsis</li>
          </a>
          <a href="#request" class="nav-links">
            <li>Request Ulasan</li>
          </a>
        </ul>
        <ul class="menu-login">
          <a href="#budaya" class="nav-links">
            <li><i class="fas fa-sign-in-alt"></i> Login</li>
          </a>
          <a href="#wisata" class="nav-links">
            <li><i class="fas fa-user"></i> Daftar</li>
          </a>
        </ul>
   </nav>

    <!-- side nav -->
    <div id="mySidenav" class="sidenav">
        <div class="sidenav-header">
            <h2>Menu</h2>
            <div class="clear"></div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        </div>
        <a href="#ulasan">Ulasan</a>
        <a href="#tayang">Tayang Saat Ini</a>
        <a href="#sinopsis">Sinopsis</a>
        <a href="#request">Request Ulasan</a>
    </div>

    <!-- hero -->
    <div id="hero">
        <div class="hero-caption">
            <h1>Informasi Film Terbaru</h1>
            <p>Temukan informasi mengenai film terbaru dan berbagai ulasan menarik tentang film terbaik.
            Baca juga sinopsis film-film pilihan. Segera bergabung dengan kami <span>&#9786;</span></p>
            <a href="#" class="btn btn-primary">Gabung dengan Dialog</a>
        </div>
    </div>

    <!-- search container -->
    <div class="search-container">
        <div class="search-inner">
            <form action="" method="get">
                <div class="col-8 col-m-12 col-sm-12">
                    <input type="text" name="cari" placeholder="Cari ulasan film..." required>
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
                <div class="col-4 col-m-12 col-sm-12">
                    <div class="search-teks">
                        <span>Atau</span>
                        <a href="#" class="btn btn-primary">Request Ulasan Film</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 kategori">
                <h2>Kategori Film</h2>
                <div class="col-3 col-m-6">
                    <a href="#" class="kategori-link"><button>Action</button></a>
                </div>
                <div class="col-3 col-m-6">
                    <a href="#" class="kategori-link"><button>Action</button></a>
                </div>
                <div class="col-3 col-m-6">
                    <a href="#" class="kategori-link"><button>Action</button></a>
                </div>
                <div class="col-3 col-m-6">
                    <a href="#" class="kategori-link"><button>Action</button></a>
                </div>
            </div>
    </div>

    <!-- counter -->
    <div class="row">
        <div class="col-12 counter">
            <div class="col-4">
                <h2>999</h2>
                <h3>Film</h3>
            </div>
            <div class="col-4">
                <h2>999</h2>
                <h3>Film</h3>
            </div>
            <div class="col-4">
                <h2>999</h2>
                <h3>Film</h3>
            </div>
        </div>
    </div>

    <!-- container rekomendasi -->
    <div class="row">
        <div class="col-12 container1" id="ulasan">
            <h2>Rekomendasi Film</h2>
                <div class="col-3 col-m-6">
                    <div class="card">
                        <div class="wrapper">
                            <div class="header">
                                <div class="date">
                                    <span>12 Januari 2002</span>
                                </div>
                                <ul class="menu-content">
                                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="data">
                                <div class="content">
                                    <h3 class="title"><a href="#">lorem ipsum dolor sit amet</a></h3>
                                    <span class="sutradara">by Muhammad Anas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-3 col-m-6">
                    <div class="card">
                        <div class="wrapper">
                            <div class="header">
                                <div class="date">
                                    <span>12 Januari 2002</span>
                                </div>
                                <ul class="menu-content">
                                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="data">
                                <div class="content">
                                    <h3 class="title"><a href="#">lorem ipsum dolor sit amet</a></h3>
                                    <span class="sutradara">by Muhammad Anas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 col-m-6">
                    <div class="card">
                        <div class="wrapper">
                            <div class="header">
                                <div class="date">
                                    <span>12 Januari 2002</span>
                                </div>
                                <ul class="menu-content">
                                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="data">
                                <div class="content">
                                    <h3 class="title"><a href="#">lorem ipsum dolor sit amet</a></h3>
                                    <span class="sutradara">by Muhammad Anas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 col-m-6">
                    <div class="card">
                        <div class="wrapper">
                            <div class="header">
                                <div class="date">
                                    <span>12 Januari 2002</span>
                                </div>
                                <ul class="menu-content">
                                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="data">
                                <div class="content">
                                    <h3 class="title"><a href="#">lorem ipsum dolor sit amet</a></h3>
                                    <span class="sutradara">by Muhammad Anas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 col-m-6">
                    <div class="card">
                        <div class="wrapper">
                            <div class="header">
                                <div class="date">
                                    <span>12 Januari 2002</span>
                                </div>
                                <ul class="menu-content">
                                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="data">
                                <div class="content">
                                    <h3 class="title"><a href="#">lorem ipsum dolor sit amet</a></h3>
                                    <span class="sutradara">by Muhammad Anas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 col-m-6">
                    <div class="card">
                        <div class="wrapper">
                            <div class="header">
                                <div class="date">
                                    <span>12 Januari 2002</span>
                                </div>
                                <ul class="menu-content">
                                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="data">
                                <div class="content">
                                    <h3 class="title"><a href="#">lorem ipsum dolor sit amet</a></h3>
                                    <span class="sutradara">by Muhammad Anas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 col-m-6">
                    <div class="card">
                        <div class="wrapper">
                            <div class="header">
                                <div class="date">
                                    <span>12 Januari 2002</span>
                                </div>
                                <ul class="menu-content">
                                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="data">
                                <div class="content">
                                    <h3 class="title"><a href="#">lorem ipsum dolor sit amet</a></h3>
                                    <span class="sutradara">by Muhammad Anas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3 col-m-6">
                    <div class="card">
                        <div class="wrapper">
                            <div class="header">
                                <div class="date">
                                    <span>12 Januari 2002</span>
                                </div>
                                <ul class="menu-content">
                                  <li><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="data">
                                <div class="content">
                                    <h3 class="title"><a href="#">lorem ipsum dolor sit amet</a></h3>
                                    <span class="sutradara">by Muhammad Anas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <a href="?page=ulasan" class="btn btn-primary">Lihat Ulasan Lainnya</a>
        </div>
    </div>
    <div class="clear"></div>

    <!-- container sedang tayang -->
    <div class="row">
        <div class="container2" id="tayang">
            <h2>Film Yang Sedang Tayang</h2>
            <div class="rilis-container">
                <div class="col-7 rilis">
                    <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                      <div class="content-overlay"></div>
                      <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                      <div class="content-icon">
                        <i class="fas fa-play"></i>
                      </div>
                      <div class="content-details">
                        <h3 class="content-title">Judul Film</h3>
                        <p class="content-text">Rilis 12 Januari 2002</p>
                      </div>
                    </a>
                </div>
                <div class="col-4 rilis">
                    <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                      <div class="content-overlay"></div>
                      <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                      <div class="content-icon">
                        <i class="fas fa-play"></i>
                      </div>
                      <div class="content-details">
                        <h3 class="content-title">Judul Film</h3>
                        <p class="content-text">Rilis 12 Januari 2002</p>
                      </div>
                    </a>
                </div>
                <div class="col-4 rilis">
                    <a href="https://unsplash.com/photos/HkTMcmlMOUQ" target="_blank">
                      <div class="content-overlay"></div>
                      <img class="content-image" src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362">
                      <div class="content-icon">
                        <i class="fas fa-play"></i>
                      </div>
                      <div class="content-details">
                        <h3 class="content-title">Judul Film</h3>
                        <p class="content-text">Rilis 12 Januari 2002</p>
                      </div>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="container2-button">
                <a href="#" class="btn btn-default">Lihat Jadwal</a>
            </div>
        </div>
    </div>

    <!-- sinopsis -->
    <div class="row">
        <div class="col-12 container3" id="sinopsis">
            <h2>Sinopsis Film Pilihan</h2>
            <div class="sinopsis-container">
                <div class="col-3 col-m-6 col-sm-6">
                    <div class="sinopsis">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362" alt="">
                                <div class="overlay2">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="sinopsis-body">
                            <h3><a href="#">Judul Sinopsis</a></h3>
                            <span>12 Januari 2002</span>
                            <p>lorem ipsum dolor sit amet</p>
                            <div class="sinopsis-btn">
                                <a href="#" class="btn btn-primary">Lihat Sinopsis</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-m-6 col-sm-6">
                    <div class="sinopsis">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362" alt="">
                                <div class="overlay2">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="sinopsis-body">
                            <h3><a href="#">Judul Sinopsis</a></h3>
                            <span>12 Januari 2002</span>
                            <p>lorem ipsum dolor sit amet</p>
                            <div class="sinopsis-btn">
                                <a href="#" class="btn btn-primary">Lihat Sinopsis</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-m-6 col-sm-6">
                    <div class="sinopsis">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362" alt="">
                                <div class="overlay2">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="sinopsis-body">
                            <h3><a href="#">Judul Sinopsis</a></h3>
                            <span>12 Januari 2002</span>
                            <p>lorem ipsum dolor sit amet</p>
                            <div class="sinopsis-btn">
                                <a href="#" class="btn btn-primary">Lihat Sinopsis</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-m-6 col-sm-6">
                    <div class="sinopsis">
                        <div class="thumbnail">
                            <a href="#">
                                <img src="https://images.unsplash.com/photo-1433360405326-e50f909805b3?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&w=1080&fit=max&s=359e8e12304ffa04a38627a157fc3362" alt="">
                                <div class="overlay2">
                                    <i class="fas fa-search"></i>
                                </div>
                            </a>
                        </div>
                        <div class="sinopsis-body">
                            <h3><a href="#">Judul Sinopsis</a></h3>
                            <span>12 Januari 2002</span>
                            <p>lorem ipsum dolor sit amet</p>
                            <div class="sinopsis-btn">
                                <a href="#" class="btn btn-primary">Lihat Sinopsis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>

    <!-- request -->
    <div class="row">
        <div class="col-12 request" id="request">
            <h2>Film Favoritmu Belum Diulas? Request Sekarang!</h2>
            <form action="" method="post">
                <input type="text" class="req" placeholder="Judul film" required>
                <input type="submit" class="req-btn btn btn-primary" value="Request">
            </form>
        </div>
    </div>

    <!-- footer -->
    <div class="row">
        <div class="col-12 footer">
            <div class="col-4">
                <div class="tentang">
                    <img src="assets/img/logo-putih.png">
                    <p>Dialog adalah situs yang menyediakan berbagai macam informasi terbaru dan menarik tentang film-film populer. Kami menulis ulasan dan sinopsis film. Selain itu, kami juga menyediakan beberapa trailer singkat seputar film yang akan rilis dalam waktu dekat.</p>
                </div>
            </div>
            <div class="col-4">
                <div class="navigasi">
                    <h2>Navigasi</h2>
                    <ul>
                        <li><a href="#">Ulasan</a></li>
                        <li><a href="#">Jadwal Tayang</a></li>
                        <li><a href="#">Sinopsis</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <div class="tim">
                    <h2>Tim The Semicolon</h2>
                    <ol>
                        <li><b>Muhammad Anas</b> as Front-End Dev.</li>
                        <li><b>Budi Setiawan</b> as Back-End Dev.</li>
                        <li><b>Ahmad Haidar</b> as Back-End Dev.</li>
                    </ol>
                </div>
            </div>
            <div class="clear"></div>
            <hr>
            <div class="copyright">
                <p>Copyright 2018. <b>The Semicolon</b>. All rights reserved.</p>
            </div>
        </div>
    </div>

</body>
<script src="assets/js/default.js"></script>
</html>