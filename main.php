<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDOVVI</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="main.php">
                            <img src="img/indoo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="main.php">Dashboard</a></li>
                                <li><a href="">Lainnya<span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="tabel.php">Data Film</a></li>
                                        <li><a href="logout.php">Log Out</a></li>
                                    </ul>
                                
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    
                        <a href="logout.php"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/films/back1.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Super Hero</div>
                                <h2>Spiderman No Way Home</h2>
                                <p>Identitas asli dari pahlawan yang ramah ini terbongkar.</p>
                                <a href="tonton.php"><span>Tonton</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/films/10.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Super Hero</div>
                                <h2>Doctor Strange</h2>
                                <p>Perjalanan ke tempat yang tidak diketahui bersama Doctor Strange.</p>
                                <a href="#"><span>Tonton</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/films/back2.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Anime/SuperNatural</div>
                                <h2>Jujutsu Kaisen 0</h2>
                                <p>Yuta Okkotsu adalah seorang siswa SMA penyendiri yang mengalami masalah besar teman masa kecilnya.</p>
                                <a href="#"><span>Tonton</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Movie Terpopuler</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Liat Semua<span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/spider.jpeg">
                                        <div class="ep">1/1</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Action</li>
                                            <li>Super Power</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Spiderman No Way Home</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/doctor.jpeg">
                                        <div class="ep">1/1</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Action</li>
                                            <li>Super Power</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Doctor Strange: Multiverse Of Madness</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/batman.jpg">
                                        <div class="ep">1/1</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Action</li>
                                            <li>Super Power</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">The Batman</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/avatar.jpeg">
                                        <div class="ep">1/1</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Acton</li>
                                            <li>Sci-Fi</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Avatar 2</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/venom.jpeg">
                                        <div class="ep">1/1</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Action</li>
                                            <li>Super Power</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Venom 2</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/trending/inter.jpg">
                                        <div class="ep">1/1</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Sci-Fi</li>
                                            <li>Movie</li>
                                        </ul>
                                        <h5><a href="#">Intersellar</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Anime Terpopuler</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Liat Semua<span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/anime/naruto.jpg">
                                        <div class="ep">1/500</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Action</li>
                                            <li>Adventure</li>
                                            <li>Anime</li>
                                        </ul>
                                        <h5><a href="#">Naruto Shippuden</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/anime/one.jpg">
                                        <div class="ep">1/1044</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Action</li>
                                            <li>Adventure</li>
                                            <li>Anime</li>
                                        </ul>
                                        <h5><a href="#">One Piece</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/anime/bleach.jpg">
                                        <div class="ep">1/13</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Action</li>
                                            <li>Supernatural</li>
                                            <li>Anime</li>
                                        </ul>
                                        <h5><a href="#">Bleach Thousand Year Blood War 1</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/anime/jujutsu.jpeg">
                                        <div class="ep">1/24</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Action</li>
                                            <li>SuperNatural</li>
                                            <li>Anime</li>
                                        </ul>
                                        <h5><a href="#">Jujutsu Kaisen</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/anime/death.jpg">
                                        <div class="ep">1/23</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Mystery</li>
                                            <li>Psycology</li>
                                            <li>Anime</li>
                                        </ul>
                                        <h5><a href="#">Death Note</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/anime/conan.jpg">
                                        <div class="ep">1/1068</div>
                                        <div class="comment"><i class="fa fa-comments"></i> 500</div>
                                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Mystery</li>
                                            <li>Criminal</li>
                                            <li>Anime</li>
                                        </ul>
                                        <h5><a href="#">Dectective Conan</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="img/trending/spider.jpeg">
                                <div class="ep">1/1</div>
                                <div class="view"><i class="fa fa-eye"></i> 1200</div>
                                <h5><a href="#">Spiderman No Way Home</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="img/anime/conan.jpg">
                            <div class="ep">1/1068</div>
                            <div class="view"><i class="fa fa-eye"></i> 1200</div>
                            <h5><a href="#">Dectective Conan</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="img/films/9.jpg">
                        <div class="ep">1/1</div>
                        <div class="view"><i class="fa fa-eye"></i> 1200</div>
                        <h5><a href="#">Venom 2</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="img/films/16.jpg">
                    <div class="ep">1/500</div>
                    <div class="view"><i class="fa fa-eye"></i> 1200</div>
                    <h5><a href="#">Naruto Shippuden</a></h5>
                </div>
                <div class="product__sidebar__view__item set-bg mix day"
                data-setbg="img/films/17.jpg">
                <div class="ep">1/1044</div>
                <div class="view"><i class="fa fa-eye"></i> 1200</div>
                <h5><a href="#">One Piece</a></h5>
            </div>
        </div>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>Komentar Baru</h5>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Action</li>
                    <li>SuperNatural</li>
                    <li>Anime</li>
                </ul>
                <h5><a href="#">Bleach Thousand Year</a></h5>
                <span><i class="fa fa-eye"></i> 1200 Komentar</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Action</li>
                    <li>Adventure</li>
                    <li>Anime</li>
                </ul>
                <h5><a href="#">One Piece</a></h5>
                <span><i class="fa fa-eye"></i> 1200 Komentar</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Action</li>
                    <li>SuperPower</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Spiderman No Way Home</a></h5>
                <span><i class="fa fa-eye"></i> 1200 Komentar</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Action</li>
                    <li>Sci-Fi</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Intersellar</a></h5>
                <span><i class="fa fa-eye"></i> 1200 Komentar</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Action</li>
                    <li>Adventure</li>
                    <li>Anime</li>
                </ul>
                <h5><a href="#">Naruto</a></h5>
                <span><i class="fa fa-eye"></i> 1200 Komentar</span>
            </div>
        </div>
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Action</li>
                    <li>SuperNatural</li>
                    <li>Movie</li>
                </ul>
                <h5><a href="#">Doctor Strange</a></h5>
                <span><i class="fa fa-eye"></i> 1200 Komentar</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="./main.php">Dashboard</a></li>
                        <li><a href="tabel.php">Data Film</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
            </div>
            
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>