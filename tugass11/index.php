<?php
    require_once('php/koneksi.php');
    require_once('layout/Database.php');
    require_once('layout/Simak.php');
    $connection = new Database($host,$user,$pass,$database);
    $simak = new Simak($connection);
?>
<!doctype html>
<html lang="en">
    <head>
        <title> Universitas Udayana - Tugas 11 </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/fontawesome.js"></script>

    </head>
    <body>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <form action="" method="POST">
                        <tr>
                            <th style="vertical-align: middle;">Filter</th>
                            <th colspan="7">
                                <input style="margin-bottom:5px; width: 60%" type="text " name="q" placeholder="Cari">
                                <select style="margin-bottom:5px; width: 60%" name="column" >
                                    <option value="">Select Filter</option>
                                    <option value="nama">Nama</option>
                                    <option value="jk">Jenis Kelamin</option>
                                    <option value="tempat_lahir">Tempat Lahir</option>
                                    <option value="tanggal_lahir">Tanggal Lahir</option>
                                    <option value="alamat">Alamat</option>
                                    <option value="email">E-mail</option>
                                    <option value="fakultas">Fakultas</option>
                                </select>
                                <input style="margin:0px; width: 60%" type="submit" name="submit" id="" class="btn btn-success" value="cari">
                            </th>
                        </tr>
                        <tr>
                            <th style="vertical-align: middle;" scope="col" rowspan="2">No.</th>
                            <th style="vertical-align: middle;" scope="col">Nama</th>
                            <th style="vertical-align: middle;" scope="col">Jenis Kelamin</th>
                            <th style="vertical-align: middle;" scope="col">Tempat Lahir</th>
                            <th style="vertical-align: middle;" scope="col">Tanggal Lahir</th>
                            <th style="vertical-align: middle;" scope="col">Alamat</th>
                            <th style="vertical-align: middle;" scope="col">E-mail</th>
                            <th style="vertical-align: middle;" scope="col">Fakultas</th>
                        </tr>
                        <tr>
                            <th>
                                <input type="submit" style="margin-bottom: 5px;" class="btn btn-success" value="ASC" name="nama">
                                <span class="fa fa-sort-up inputspan"></span>
                                <input type="submit" class="btn btn-success" value="DESC" name="nama">
                                <span class="fa fa-sort-down inputspan"></span>
                            </th>
                            <th>
                                <input type="submit" style="margin-bottom: 5px;" class="btn btn-success" value="ASC" name="jk">
                                <span class="fa fa-sort-up inputspan"></span>
                                <input type="submit" class="btn btn-success" value="DESC" name="jk">
                                <span class="fa fa-sort-down inputspan"></span>
                            </th>
                            <th>
                                <input type="submit" style="margin-bottom: 5px;" class="btn btn-success" value="ASC" name="tempat_lahir">
                                <span class="fa fa-sort-up inputspan"></span>
                                <input type="submit" class="btn btn-success" value="DESC" name="tempat_lahir">
                                <span class="fa fa-sort-down inputspan"></span>
                            </th>
                            <th>
                                <input type="submit" style="margin-bottom: 5px;" class="btn btn-success" value="ASC" name="tanggal_lahir">
                                <span class="fa fa-sort-up inputspan"></span>
                                <input type="submit" class="btn btn-success" value="DESC" name="tanggal_lahir">
                                <span class="fa fa-sort-down inputspan"></span>
                            </th>
                            <th>
                                <input type="submit" style="margin-bottom: 5px;" class="btn btn-success" value="ASC" name="alamat">
                                <span class="fa fa-sort-up inputspan"></span>
                                <input type="submit" class="btn btn-success" value="DESC" name="alamat">
                                <span class="fa fa-sort-down inputspan"></span>
                            </th>
                            <th>
                                <input type="submit" style="margin-bottom: 5px;" class="btn btn-success" value="ASC" name="email">
                                <span class="fa fa-sort-up inputspan"></span>
                                <input type="submit" class="btn btn-success" value="DESC" name="email">
                                <span class="fa fa-sort-down inputspan"></span>
                            </th>
                            <th>
                                <input type="submit" style="margin-bottom: 5px;" class="btn btn-success" value="ASC" name="fakultas">
                                <span class="fa fa-sort-up inputspan"></span>
                                <input type="submit" class="btn btn-success" value="DESC" name="fakultas">
                                <span class="fa fa-sort-down inputspan"></span>
                            </th>
                        </tr>
                    </form>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $sort = "";
                        if(empty($sort)){
                            $tampil = $simak->tampil();
                        }
                        if (isset($_POST["nama"]) ){
                            $sort =  $_POST["nama"]; 
                            $tampil = $simak->tampilsort($sort,"nama");  
                        }
                        if (isset($_POST["jk"]) ){
                            $sort =  $_POST["jk"]; 
                            $tampil = $simak->tampilsort($sort,"jk"); 
                        }
                        if (isset($_POST["tempat_lahir"]) ){
                            $sort =  $_POST["tempat_lahir"]; 
                            $tampil = $simak->tampilsort($sort,"tempat_lahir"); 
                        }
                        if (isset($_POST["tanggal_lahir"]) ){
                            $sort =  $_POST["tanggal_lahir"]; 
                            $tampil = $simak->tampilsort($sort,"tanggal_lahir");   
                        }
                        if (isset($_POST["alamat"]) ){
                            $sort =  $_POST["alamat"]; 
                            $tampil = $simak->tampilsort($sort,"alamat");    
                        }
                        if (isset($_POST["email"]) ){
                            $sort =  $_POST["email"]; 
                            $tampil = $simak->tampilsort($sort,"email");    
                        }
                        if (isset($_POST["fakultas"]) ){
                            $sort =  $_POST["fakultas"]; 
                            $tampil = $simak->tampilsort($sort,"fakultas");    
                        }
                        if(isset($_POST['submit'])){
                            $q = $_POST['q'];
                            $column =  $_POST['column'];
                            if($q!="" AND $column!=""){
                                $tampil = $simak->filter($q,$column);
                            }
                        }
                    ?>
                    <?php while($data = $tampil->fetch_object()){ ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $data->nama; ?></td>
                            <td><?php echo $data->jk; ?></td>
                            <td><?php echo $data->tempat_lahir; ?></td>
                            <td><?php echo $data->tanggal_lahir; ?></td>
                            <td><?php echo $data->alamat; ?></td>
                            <td><?php echo $data->email; ?></td>
                            <td><?php echo $data->fakultas; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <script src="js/jquery-3.4.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>