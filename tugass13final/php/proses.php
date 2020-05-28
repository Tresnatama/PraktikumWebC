<?php
session_start();
include 'koneksi.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if($email == NULL || $password == NULL){
        echo"<script>alert('Anda belum mengisi form!');document.location.href='../login.php'</script>";
    }
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $row['level'];
            header('Location: ../index.php?value=profil');
        }
    }else{
        echo"<script>alert('Username atau password salah!');document.location.href='../login.php'</script>";
    }
    
}
?>