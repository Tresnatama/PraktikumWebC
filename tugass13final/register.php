<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Register - Tugas 13 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/loginstyle.css">
    </head>
    <body>
        <div class="container">
            <div id="logobox">
                <img src="img/logo.png" alt="">
            </div>
            <p><b>REGISTRASI MAHASISWA</b></p>
            <form action="php/prosesregister.php" method="POST">
                <table>
                    <tr>
                        <td class="labeltd">NIM</td>
                        <td><input type="text" class="form-login" name="nim" required placeholder="Masukkan NIM"></td>
                    </tr>
                    <tr>
                        <td class="labeltd">Nama</td>
                        <td><input type="name" required class="form-login" name="nama" placeholder="Masukkan Nama"></td>
                    </tr>
                    <tr>
                        <td class="labeltd">E-mail</td>
                        <td><input type="email" required class="form-login" name="email" placeholder="Masukkan E-mail"></td>
                    </tr>
                    <tr>
                        <td class="labeltd">Password</td>
                        <td><input type="password" required class="form-login" name="password" placeholder="Masukkan Password"></td>
                    </tr>
                </table>
                <button type="submit" class="button-submit" name="register">Daftar</button>
                <p><b>Sudah punya akun? <a class="abutton" href="login.php">Login</a> sekarang!</b></p>
            </form>
        </div>
  </body>
</html>