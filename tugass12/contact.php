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
    <title> Universitas Udayana - Contact Me </title>
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
                <li><a href="about.php">Tentang Udayana</a></li>
                <li><a href="profile.php">Profil Pengajar</a></li>
                <li class="active"><a href="contact.php">Kontak</a></li>
                <li><a style="color: red;" href="php/logout.php">Logout</a></li>
            </ul>
        </div>
        <!-- CONTENT -->
        <div id="content">
            <h1 class="h1content">Kontak Kami</h1>
            <div class="daftar-pengajar">
                <div class="pengajar">
                    <p class="namapengajar">I Nyoman Yusha Tresnatama Giri</p>
                    <img src="img/yusha.png" alt="">
                    <nav class="biodata">
                        <ul>
                            <li>Pekerjaan</li>
                            <li>Pendidikan Terakhir</li>
                            <li>NIM</li>
                            <li>Fakultas</li>
                            <li>Jurusan</li>
                            <li>Email</li>
                            <li><br/></li>
                            <li>No. HP</li>
                        </ul>
                        <ul>
                            <li>HTML and CSS enthusiast</li>
                            <li>SMK Jurusan RPL</li>
                            <li>1708561044</li>
                            <li>MIPA</li>
                            <li>Teknik Informatika</li>
                            <li>chiefwinterlake</li>
                            <li>[@]gmail.com</li>
                            <li>082247825532</li>
                        </ul>
                    </nav>
                </div>
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