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
        <link rel="stylesheet" href="css/custom.css" />
        <link rel="stylesheet" href="css/loginstyle.css"/>
        <title>Login</title>
    </head>

    <body>
        <div class="container">
            <div id="logobox">
                <img src="img/logo.png" alt="">
            </div>
            <p><b>LOGIN</b></p>
            <form action="function.php?act=login" method="POST">
                <table>
                    <tr>
                        <td class="labeltd">Username</td>
                        <td><input type="text" class="form-login" name="username" placeholder="Masukkan Username (NIM/NIP)"></td>
                    </tr>
                    <tr>
                        <td class="labeltd">Password</td>
                        <td><input type="password" class="form-login" name="password" placeholder="Masukkan Password"></td>
                    </tr>
                </table>
                <button type="submit" class="button-submit" name="login_btn">Masuk</button>
                <p><b>Belum Punya Akun? <a class="abutton" href="register.php">Register</a> sekarang!</b>
                <p><b><a class="backbutton" href="index.php">Halaman Utama</a></b>
                <hr/>
                <div class="demo">
                    <p><b>Demo Account</b><br/>
                    (universitas_udayana.sql)</p>
                    <p><b><u>Admin</u></b><br/>
                    Username : 123456789<br/>
                    Password : admin123</p>
                    <p><b><u>Mahasiswa</u></b><br/>
                    Username : 1708561044<br/>
                    Password : mahasiswa123</p>
                    <p><b><u>Dosen</u></b><br/>
                    Username : 198006162005011001<br/>
                    Password : dosen123</p>
                </div>
            </form>
        </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
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