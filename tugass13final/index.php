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
    $value = $_GET['value'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Universitas Udayana</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/indexstyle.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/cpanel.css">
    </head>
    <body>
        <div class="sidenav navbar-dark bg-dark">
            <div class="navbar-header text-center">
                <a class="navbar-brand" style="width: 100%;" href="#">Ver 1.0</a>
                <div class="profile-pic">
                    <img src="img/logo.png"/>
                </div>
                <p class="navbar-text">Anda Masuk sebagai<br/><b><?php echo $_SESSION['level'] ?></b></p>
            </div>
            <hr/>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a <?php echo ($value=='profil') ? "class='btn btn-block nav-link active'" : "class='btn btn-block nav-link'"; ?> style="text-align: left; padding-left: 20px; padding-right: 20px;" href="index.php?value=profil"><i class="fa fa-user"></i> Profil Anda</a>
                </li>
                <li class="nav-item">
                    <a <?php echo ($value=='daftar_mahasiswa') ? "class='btn btn-block nav-link active'" : "class='btn btn-block nav-link'"; ?> style="text-align: left; padding-left: 20px; padding-right: 20px;" href="index.php?value=daftar_mahasiswa"><i class="fa fa-database"></i> Daftar Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a <?php echo ($value=='daftar_dosen') ? "class='btn btn-block nav-link active'" : "class='btn btn-block nav-link'"; ?> style="text-align: left; padding-left: 20px; padding-right: 20px;" href="index.php?value=daftar_dosen"><i class="fa fa-database"></i> Daftar Dosen</a>
                </li>
                <li class="nav-item">
                    <a <?php echo ($value=='kelas') ? "class='btn btn-block nav-link active'" : "class='btn btn-block nav-link'"; ?> style="text-align: left; padding-left: 20px; padding-right: 20px;" href="index.php?value=kelas"><i class="fa fa-book"></i> Kelas</a>
                </li>
            </ul>
            <hr/>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="btn btn-block nav-link" style="text-align: left; padding-left: 20px; padding-right: 20px;" href="#"><i class=" fa fa-compass"></i> Halaman Utama</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-block nav-link" style="color:red; text-align: left; padding-left: 20px; padding-right: 20px;" href="php/logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                </li>
            </ul>
        </div>
        <div class="main">      
            <?php if($value=='profil'){
                include('layout/profil.php');
            } elseif($value=='daftar_mahasiswa'){
                include('layout/daftar_mahasiswa.php');
            } elseif($value=='daftar_dosen'){
                include('layout/daftar_dosen.php');
            } elseif($value=='kelas'){
                include('layout/kelas.php');
            }
            ?>
        </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>