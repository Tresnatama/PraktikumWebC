<?php
  include_once("php/koneksi.php");
    $id=$_SESSION['id'];
    $nama=$_SESSION['nama'];
    $query = "
        SELECT * FROM user WHERE id = $id
        ";
    $result = mysqli_query($conn,$query);
    while($user=mysqli_fetch_array($result)){
       echo " <table id='tableprofil'>
            <tr>
                <td scope='col'>NIM</td>
                <td scope='col'>".$user['nim']."</td>
            </tr>
            <tr>
                <td scope='col'>Nama</td>
                <td scope='col'>".$user['nama']."</td>
            </tr>
            <tr>
                <td scope='col'>Email</td>
                <td scope='col'>".$user['email']."</td>
            </tr>
            <tr>
                <td scope='col'>Status</td>
                <td scope='col'>Aktif</td>
            </tr>
            <tr>
                <td scope='col'>Tipe Akun</td>
                <td scope='col'>".$user['level']."</td>
            </tr>
        </table> ";
  } 

?>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>