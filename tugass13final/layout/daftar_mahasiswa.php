<?php
	include_once("php/koneksi.php");
	$queryuser = "
        SELECT * 
        FROM user
        INNER JOIN akses
        ON user.id_akses = akses.id_akses
        ORDER BY id_user ASC
        ";
    $result = mysqli_query($koneksi,$queryuser);
?>
<table class="table table-striped">
	User
  	<thead>
	    <tr>
	      	<th scope="col">ID</th>
	      	<th scope="col">Nama Lengkap</th>
	      	<th scope="col">Username</th>
	      	<th scope="col">Email</th>
	      	<th scope="col">Akses</th>
	    </tr>
  	</thead>
	<tbody>
		<?php  
	   		while($user = mysqli_fetch_array($result)) {  
	   			echo "<tr>";
	   			echo "<th scope='row'>".$user['id_user']."</th>";
	   			echo "<td>".$user['nama_user']."</td>";
	   			echo "<td>".$user['username']."</td>";
	   			echo "<td>".$user['email']."</td>";
	   			echo "<td>".$user['nama_akses']."</td>";
                echo "<td><a class='edit' class='nav-link' data-toggle='modal' href='#loginModal' data-user=".$user['id_user'].">Detail</a></td>";
                echo "<tr>";
            }
	   	?>
  	</tbody>
</table>

<!-- <a href="" class="nav-link" data-toggle='modal' data-target='#loginModal'>Masuk</a> -->

<!-- href='layout/detail_user.php?id_user=$id_user' -->
<!-- echo "<td><a class='edit' class='nav-link' href='?aksi=e_user&id_user=$id_user' >Detail</a></td> -->