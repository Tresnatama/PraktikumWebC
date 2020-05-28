<?php
	include_once("php/koneksi.php");
	$id = $_SESSION['id_user'];
	$result = mysqli_query($koneksi, "SELECT t.id_transaksi, k.nama_kos, s.nama_user, t.tanggal_transaksi, t.tanggal_expired, st.status_transaksi, t.harga AS total_harga FROM transaksi t JOIN kos k JOIN user s JOIN status_transaksi st WHERE t.id_kos=k.id_kos AND t.id_user=s.id_user AND t.id_status_transaksi=st.id_status_transaksi AND k.id_pemilik=$id ORDER BY id_transaksi ASC");
?>
<table class="table table-striped">
	Transaksi               <a class="btn btn-danger my-4" href="order.php">
                                Sewa Kos - Admin Tools
                            </a>
  	<thead>
	    <tr>
	      	<th scope="col">ID transaksi</th>
	      	<th scope="col">Nama kos</th>
	      	<th scope="col">Penyewa</th>
	      	<th scope="col">Tanggal Transaksi</th>
	      	<th scope="col">Status Transaksi</th>
	    </tr>
  	</thead>
	<tbody>
		<?php  
	   		while($user = mysqli_fetch_array($result)) {  
	   			echo "<tr>";
	   			echo "<th scope='row'>".$user['id_transaksi']."</th>";
	   			echo "<td>".$user['nama_kos']."</td>";
	   			echo "<td>".$user['nama_user']."</td>";
	   			echo "<td>".$user['tanggal_transaksi']."</td>";
	   			echo "<td>".$user['status_transaksi']."</td>";
                echo "<td><a class='edit' class='nav-link' data-toggle='modal' href='#transaksiModal' data-transaksi=".$user['id_transaksi'].">Detail</a></td>";
                echo "<tr>";
            }
	   	?>
  	</tbody>
</table>
<div class="modal fade" id="transaksiModal" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="kosModalTitle">Detail Transaksi</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="container-detail"></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
    </div>
</div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#transaksiModal').on('show.bs.modal', function (e) {
            var transaksiid = $(e.relatedTarget).data('transaksi');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'php/detailtransaksi.php',
                data :  'transaksiid='+ transaksiid,
                success : function(data){
                $('.container-detail').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
</script>
<script src="js/bootstrap.min.js"></script>