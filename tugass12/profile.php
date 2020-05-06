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
    <title> Universitas Udayana - Profile Pengajar </title>
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
                <li class="active"><a href="profile.php">Profil Pengajar</a></li>
                <li><a href="contact.php">Kontak</a></li>
                <li><a style="color: red;" href="php/logout.php">Logout</a></li>
            </ul>
        </div>
        <!-- CONTENT -->
        <div id="content">
            <h1 class="h1content">Profile Pengajar</h1>
            <form class="searchpengajar" action="#">
                <input type="text" placeholder="Cari Pengajar..." name="search">
                <button type="submit">Cari</button>
            </form>
            <hr/>
            <div class="daftar-pengajar">
                <div class="pengajar">
                    <p class="namapengajar">Agus Muliantara, S.Kom, M.Kom</p>
                    <img src="img/pengajar/gusmul.jpg" alt="">
                    <nav class="biodata">
                        <ul>
                            <li>Jabatan Terakhir</li>
                            <li>Pendidikan Terakhir</li>
                            <li>NIP</li>
                            <li>Fakultas</li>
                            <li>Jurusan</li>
                            <li>Email</li>
                        </ul>
                        <ul>
                            <li>LEKTOR</li>
                            <li>S2</li>
                            <li>198006162005011001</li>
                            <li>MIPA</li>
                            <li>Sarjana Teknik Informatika</li>
                            <li>muliantara[@]gmail.com</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <hr/>
            <div class="daftar-pengajar">
                <div class="pengajar">
                    <p class="namapengajar">I Dewa Made Bayu Atmaja Darmawan,S.Kom.,M.Cs.</p>
                    <img src="img/pengajar/bayu.jpg" alt="">
                    <nav class="biodata">
                        <ul>
                            <li>Jabatan Terakhir</li>
                            <li>Pendidikan Terakhir</li>
                            <li>NIP</li>
                            <li>Fakultas</li>
                            <li>Jurusan</li>
                            <li>Email</li>
                        </ul>
                        <ul>
                            <li>LEKTOR</li>
                            <li>S2</li>
                            <li>198901272012121001</li>
                            <li>MIPA</li>
                            <li>Sarjana Teknik Informatika</li>
                            <li>dwbayu[@]gmail.com</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <hr/>
            <div class="daftar-pengajar">
                <div class="pengajar">
                    <p class="namapengajar">I Komang Ari Mogi, S.Kom., M.Kom.</p>
                    <img src="img/pengajar/mogi.jpg" alt="">
                    <nav class="biodata">
                        <ul>
                            <li>Jabatan Terakhir</li>
                            <li>Pendidikan Terakhir</li>
                            <li>NIP</li>
                            <li>Fakultas</li>
                            <li>Jurusan</li>
                            <li>Email</li>
                        </ul>
                        <ul>
                            <li>ASISTEN AHLI</li>
                            <li>S2</li>
                            <li>198409242008011007</li>
                            <li>MIPA</li>
                            <li>Sarjana Teknik Informatika</li>
                            <li>arimogi[@]unud.ac.id</li>
                        </ul>
                    </nav>
                </div>
            </div>
            <hr/>
            <div><center><button class="tampil">Tampilkan Lebih Banyak</button></center></div>
            <br>
        </div>
        <!-- FOOTER -->
        <div id="clear"></div>
        <div id="footer">
            <p>Copyright © Yusha Tresnatama, All rights reserved.</p>
        </div>
        
    </div>
</body>
</html>