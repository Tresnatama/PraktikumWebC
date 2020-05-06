<!-- STARTING SESSION -->
<?php
    session_start();
    if(isset($_SESSION['level'])){
        if($_SESSION['level'] == NULL){
            header('Location: login.php');
        }
    }else{
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Universitas Udayana - Tentang </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body <?php echo ($_SESSION['level']=='admin') ? "style='background-color: #ffcdd2'" : "style='background-color: #c8e6c9'"; ?>>
    <div id="container">
        <!-- BANNER -->
        <div id="banner">
            <img src="img/udayana.jpg" alt="">
            <div id="bannertextbox">
                <p>Udayana University</p>
            </div>
        </div>
        <!-- SIDE BAR -->
        <div id="sidebar">
            <div id="logobox">
                <img src="img/logo.png" alt="">
            </div>
            <div id="popular">
                <p>Artikel Populer</p>
            </div> 
            <div id="popularlist">
                <ul>
                    <li><a href="#">Covid-19 News</a></li>
                    <li><a href="#">Mari gunakan Webex</a></li>
                    <li><a href="#">Pengumpulan Proposal TA Diundur</a></li>
                    <li><a href="#">Heboh! Mahasiswa ini sangat berprestasi!</a></li>
                    <li><a href="#">Kisah Yusha nim 1708561044</a></li>
                </ul>
            </div>
        </div>
        <!-- MENU UTAMA -->
        <div id="menu">
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li class="active"><a href="about.php">Tentang Udayana</a></li>
                <li><a href="profile.php">Profil Pengajar</a></li>
                <li><a href="contact.php">Kontak</a></li>
                <li><a style="color: red;" href="php/logout.php">Logout</a></li>
            </ul>
        </div>
        <!-- CONTENT -->
        <div id="content">
            <h1 class="h1content">Tentang Universitas Udayana</h1>
            <p class="pcontent">Cikal bakal Unud adalah Fakultas Sastra Udayana cabang Universitas Airlangga yang diresmikan oleh P. J. M. Presiden Republik Indonesia Ir. Soekarno, dibuka oleh J. M. Menteri P.P dan K. Prof. DR. Priyono pada tanggal 29 September 1958 sebagaimana tertulis pada Prasasti di Fakultas Sastra Jalan Nias Denpasar. 
            Universitas Udayana secara sah berdiri pada tanggal 17 Agustus 1962 dan merupakan perguruan tinggi negeri tertua di daerah Provinsi Bali. Sebelumnya, sejak tanggal 29 September 1958 di Bali sudah berdiri sebuah Fakultas yang bernama Fakultas Sastra Udayana sebagai cabang dari Universitas Airlangga Surabaya. Fakultas Sastra Udayana inilah yang merupakan embrio dari pada berdirinya Universitas Udayana. Berdasarkan Surat Keputusan Menteri PTIPNo.104/1962, tanggal 9 Agustus 1962, Universitas Udayana secara syah berdiri sejak tanggal 17 Agustus 1962. Tetapi oleh karena hari lahir Universitas Udayana jatuh bersamaan dengan hari Proklamasi Kemerdekaan RepublikIndonesia maka perayaan Hari Ulang Tahun Universitas Udayana dialihkan menjadi tanggal 29 September dengan mengambil tanggal peresmian Fakultas Sastra yang telah berdiri sejak tahun 1958.</p>
        </div>
        <!-- FOOTER -->
        <div id="clear"></div>
        <div id="footer">
            <p>Copyright © Yusha Tresnatama, All rights reserved.</p>
        </div>
        
    </div>
</body>
</html>