<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Login - Tugas 12 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/loginstyle.css">
    </head>
    <body>
        <div class="container">
            <div id="logobox">
                <img src="img/logo.png" alt="">
            </div>
            <form action="php/proses.php" method="POST">
                <table>
                    <tr>
                        <td class="labeltd">E-mail</td>
                        <td><input type="email" class="form-login" name="email" placeholder="Masukkan E-mail"></td>
                    </tr>
                    <tr>
                        <td class="labeltd">Password</td>
                        <td><input type="password" class="form-login" name="password" placeholder="Masukkan Password"></td>
                    </tr>
                </table>
                <button type="submit" class="button-submit" name="login">Masuk</button>
                <hr/>
                <div class="demo">
                    <p><b>Demo Account</b><br/>
                    (universitas_udayana.sql)</p>
                    <p><b><u>Admin</u></b><br/>
                    E-mail : admin@admin.com<br/>
                    Password : admin</p>
                    <p><b><u>Normal User</u></b><br/>
                    E-mail : mahasiswa@mahasiswa.com<br/>
                    Password : mahasiswa</p>
                </div>
            </form>
        </div>
  </body>
</html>