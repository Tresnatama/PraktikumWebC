<?php 
include 'function.php';

if( isset($_SESSION["login"])) {
    header("Location: mahasiswa.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/custom.css" />
<link rel="stylesheet" href="css/loginstyle.css"/>

<title>Register</title>
</head>

<body>
    <div class="container">
        <div id="logobox">
            <img src="img/logo.png" alt="">
        </div>
        <p><b>REGISTRASI MAHASISWA</b></p>
        <form id="registrationForm" method="POST" class="needs-validation" action="function.php?act=register" novalidate>
            <table>
                <tr>
                    <td class="labeltd">Nama Lengkap</td>
                    <td><input type="name" required class="form-login" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
                        <div class="valid-feedback">
                            Bagus!
                        </div>
                        <div class="invalid-feedback">
                            Nama tidak boleh kosong
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="labeltd">NIM</td>
                    <td><input type="text" class="form-login" id="nim" name="nim" required placeholder="Masukkan NIM">
                        <div class="valid-feedback">
                                Bagus!
                        </div>
                        <div class="invalid-feedback">
                            NIM tidak boleh kosong
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="labeltd">E-mail</td>
                    <td><input type="email" required class="form-login" id="email" name="email" placeholder="Masukkan E-mail">
                        <div class="valid-feedback">
                            Bagus!
                        </div>
                        <div class="invalid-feedback">
                            Email tidak valid
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="labeltd">Password</td>
                    <td><input type="password" required class="form-login" id="password" name="password" minlength="8" placeholder="Masukkan Password">
                        <div class="valid-feedback">
                            Bagus!
                        </div>
                        <div class="invalid-feedback">
                            Password min. 8 karakter
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="labeltd">Alamat</td>
                    <td><input type="text" required class="form-login" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                        <div class="valid-feedback">
                            Bagus!
                        </div>
                        <div class="invalid-feedback">
                            Alamat tidak boleh kosong
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="labeltd">Tanggal Lahir</td>
                    <td><input type="date" required class="form-login" id="tgl_lahir" name="tgl_lahir">
                        <div class="invalid-feedback">
                            Masukkan Tahun Lahir
                        </div>
                    </td>
                </tr>
            </table>
            <button type="submit" name="submitButton" class="button-submit" name="register">Daftar</button>
            <p><b>Sudah punya akun? <a class="abutton" href="login.php">Login</a> sekarang!</b></p>
            <p><b><a class="backbutton" href="index.php">Halaman Utama</a></b>
        </form>
    </div>

    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        (function() {
        'use strict';
        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
            }, false);
        });
        }, false);
        })();
    </script>
</body>
</html>