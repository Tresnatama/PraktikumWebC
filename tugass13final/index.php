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
    <title> Universitas Udayana - Tugas 12 </title>
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
                <li class="active"><a href="index.php">Beranda</a></li>
                <li><a href="about.php">Tentang Udayana</a></li>
                <li><a href="profile.php">Profil Pengajar</a></li>
                <li><a href="contact.php">Kontak</a></li>
                <li><a style="color: red;" href="php/logout.php">Logout</a></li>
            </ul>
        </div>
        <!-- CONTENT -->
        <div id="content">
            <h1 class="h1content">Selamat Datang <span <?php echo ($_SESSION['level']=='admin') ? "style='color: red'" : "style='color: green'"; ?> ><?= $_SESSION['nama'] ?></span> di Website Universitas Udayana<br/>
                <span class="sub-title"> (anda login sebagai : <b><?= $_SESSION['level'] ?></b>) </span>
            </h1>
            <p class="pcontent">Berhubung virus Covid-19 kini sudah menyebar di berbagai tempat di Bali, diharapkan segala civitas Universitas Udayana agar tetap beraktivitas di rumah masing-masing.</p>
            <h1 class="h1content">News</h1>
            <div class = "news">
                <img src="img/covid19.jpg" alt="">
                <p class="newshead">Covid-19 News</p>
                <p><a href="#">Baca Lebih Lanjut >></a></p>
            </div>
            <div class = "news">
                <img src="img/webex.jpg" alt="">
                <p class="newshead">Mari gunakan Webex</p>
                <p><a href="#">Baca Lebih Lanjut >></a></p>
            </div>
            
            <div class = "news">
                <img src="img/proposal.jpg" alt="">
                <p class="newshead">Pengumpulan Pro...</p>
                <p><a href="#">Baca Lebih Lanjut >></a></p>
            </div>
        </div>
        <!-- FOOTER -->
        <div id="clear"></div>
        <div id="footer">
            <p>Copyright © Yusha Tresnatama, All rights reserved.</p>
        </div>
        
    </div>
</body>
</html>