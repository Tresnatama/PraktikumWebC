<?php
session_start();
include 'koneksi.php';
if(isset($_POST['register'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    if($email == NULL || $password == NULL){
        echo"<script>alert('Anda belum mengisi form!');document.location.href='../login.php'</script>";
    }
    $checkemail = "SELECT * FROM user WHERE email = '$email'";
    $resultemail = mysqli_query($conn,$checkemail);
    if(mysqli_num_rows($resultemail) > 0){
        echo "<script>alert('Email sudah digunakan!, Silahkan pakai Email lain'); window.location='../register.php';</script>";
    }
    $sql = "INSERT INTO user(nim, nama, email, password, level) VALUES('$nim','$nama','$email','$password','mahasiswa')";
    $result = mysqli_query($conn,$sql);
    if($result) {
        echo "<script>alert('Akun Berhasil Dibuat Silahkan Gunakan untuk Login!'); window.location='../login.php';</script>";
    }
}
?>