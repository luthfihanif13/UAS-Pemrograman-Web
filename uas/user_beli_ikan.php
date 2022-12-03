<?php
session_start();
require 'config.php';
if (isset($_GET['search'])) {
    $keyword = $_GET['search'];
    $result = mysqli_query($conn, "SELECT * FROM daftar_ikan where nama_ikan LIKE '%$keyword%'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM  daftar_ikan");
}
$daftar_ikan = [];
while ($row = mysqli_fetch_assoc($result)) {
    $daftar_ikan[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Ikan Luthfish</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="card.css">
    <link rel="stylesheet" href="footer.css">


</head>

<body>
    <section id="navbar">
        <div class="navbar">
            <div class="container">
                <div class="logo">
                    <h1 id="toko">Luthfish Market</h1>
                </div>
                <div class="label">
                    <!-- <label for="input"></label>
                    <input type="text" id="input" name="input" placeholder="Seacrh..">
                    <input type="submit" value="Search"> -->
                    <script>
                        // alert("Ini adalah website Praktikum Web")
                        let input = document.getElementById("input");
                        input.value = "Cari ikan anda disini!";

                        function ubahMode() {
                            const ubah = document.body
                            ubah.classList.toggle("dark");
                        }
                    </script>
                </div>
                <nav>
                    <ul>
                        <li>
                            <form action="main_content_user.php" method="GET">
                                <input type="search" id="input" name="search" placeholder="Seacrh..">
                                <button name="cari" type="submit">Cari</button>
                            </form>
                        </li>
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#hero">Tentang Toko</a></li>
                        <li><a href="#catalog">Daftar Ikan</a></li>
                        <li><a href="logout_user.php">Logout</a></li>
                        <!-- <li><input type="checkbox" onclick="ubahMode()"> -->
                        </li>
                    </ul>
                    <?php
                    // if ($_SESSION['priv'] == 'admin') { 
                    //         echo('<li><a href="halamanLogin.php" class="logout" id="sign">login</a></li>');
                    // } else if ($_SESSION['priv'] == 'user') { 
                    //     echo('<li><a href="logout.php" class="tbl-pink" id="sign">Sign In</a></li>');
                    // }
                    ?>

                </nav>
            </div>
        </div>
    </section>

    <section id="hero">
        <div class="hero">
            <div class="jumbotron">
                <center>
                    <img src="gambar/ikan.jpg" alt="" width="500px">
                </center>
                <h1>Luthfish Market</h1>
                <p align="center">Adalah sebuah website toko ikan yang dibuat dalam rangka <br>untuk memenuhi tugas Pemrograman Web.</p>
                <p id="p"></p>
                <script>
                    let el = document.getElementById('p').innerHTML = "Website ini dibangun berdasarkan UAS pemrograman web.";
                </script>
            </div>
        </div>
    </section>
    <section id="catalog">
        <main>
            <div id="list" class="container">
                <div class="info">
                    <center size>
                        Daftar Ikan
                    </center>
                </div>
                <div class="box">
                    <?php
                    $i = 1;
                    foreach ($daftar_ikan as $daf) :
                    ?>
                        <!-- foreach == Kemampuan array dalam menyimpan banyak data dalam satu
                        variabel akan sangat berguna untuk menyederhanakan dan menghemat penggunaan
                        variabel. -->
                        <div class="card">
                            <?php echo "<img src='gambar/$daf[gambar]'>"; ?>
                            <p><?php echo "$daf[nama_ikan]</a>"; ?></p>
                            <p><span class="harga"><?php echo $daf["harga"]; ?></span></p>
                        </div>
                    <?php $i++;
                    endforeach; ?>
                </div>
            </div>
        </main>
        <div class="belanja">
            <center><br><br>
                <a href="form_beli_user.php" class="tombol-keranjang animasi biru" title="Form pembelian">Keranjang</a>
            </center>
        </div>
    </section>
    <section class="footer">
        <footer class="footer-distributed">

            <div class="footer-left">
                <h3>Luthfi<span>Developer</span></h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    |
                    <a href="contact.html" target="_blank">About</a>
                    |
                    <a href="contact.html" target="_blank">Contact</a>
                    |
                    <a href="#">Blog</a>
                </p>

                <p class="footer-company-name">Copyright © 2022 <strong>Luthfish Market</strong> All rights reserved</p>
            </div>

            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Samarinda</span>
                        Indonesia</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+6289512345</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="#">Luthfishmarket@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>About Luthfish Market</span>
                    <strong>Ahmad Luthfi Hanif</strong> Adalah orang yang membuat website ini dengan pemahaman yang ia miliki
                    selama mengikuti kuliah & praktikum Pemrograman Web di semester 3, banyak ilmu baru yang ia dapat, dengan itu ia mengucapkan
                    terima kasih kepada Dosen,Aslab, & Teman-teman sekalian dalam kuliah di semester 3 ini.
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>