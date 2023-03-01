<!DOCTYPE html>
<html lang="zxx">
<?php
$koneksi = new mysqli ("localhost","root","","movie");
if(isset($_GET['kode'])){
	$sql_cek = "SELECT * FROM tb_film WHERE id_film='".$_GET['kode']."'";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>
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
                        <a href="./index.html">
                            <img src="img/indoo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class=""><a href="main.php">Dashboard</a></li>
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
    <head>
	<title>INDOVVI</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
    <body>

    <div class="container">
        <div class="col-lg-8">
            <div class="page-header">
                <br>
</br>
                <h2>UBAH DATA FILM/ANIME</h2>
            </div>
            <br>
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>ID FILM</label>
                    <input type="text" name="id_film" class="form-control" value="<?php echo $data_cek['id_film']; ?>"
                    readonly/>
                </div>

                <div class="form-group">
                    <label>NAMA FILM</label>
                    <input type="text" name="nama_film" class="form-control" value="<?php echo $data_cek['nama_film']; ?>"
                    />
                </div>

                <div class="form-group">
                    <label>SINOPSIS</label>
                    <input type="text" name="sinopsis" class="form-control" value="<?php echo $data_cek['sinopsis']; ?>"
                    />
                </div>

                <div class="form-group">
                    <label>FOTO</label>
                    <br>
                    <img src="foto/<?php echo $data_cek['foto']; ?>" width="70px" />
                    <br>
                    <br>
                    <input type="file" name="foto">
                </div>
                <br>

                <div class="form-group">
                    <input type="submit" name="Simpan" value="Ubah Data" class="btn btn-primary">
                    <a href="tabel.php" class="btn btn-warning">Batal</a>
                </div>
            </form>
        </div>
    </div>
    </body>

    <?php	
    if (isset ($_POST['Simpan'])){

    $sumber = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];

    if(!empty($sumber)){
        $foto= $data_cek['foto'];
            if (file_exists("foto/$foto")){
            unlink("foto/$foto");}

        $sql_ubah = "UPDATE tb_film SET
            nama_film='".$_POST['nama_film']."',
            sinopsis='".$_POST['sinopsis']."',
            foto='".$nama_file."'		
            WHERE id_film='".$_POST['id_film']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
        $pindah = move_uploaded_file($sumber, 'foto/'.$nama_file);

    }elseif(empty($sumber)){
        $sql_ubah = "UPDATE tb_film SET
            nama_film='".$_POST['nama_film']."',
            sinopsis='".$_POST['sinopsis']."'	
            WHERE id_film='".$_POST['id_film']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>alert('Ubah Data Sukses')</script>";
            echo "<meta http-equiv='refresh' content='0; url=tabel.php'>";
        }else{
            echo "<script>alert('Ubah Data Gagal')</script>";
            echo "<meta http-equiv='refresh' content='0; url=tabel.php'>";
        }
        }
    ?>
    
    
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