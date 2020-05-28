<?php
  include_once("php/koneksi.php");
    $id_user=$_SESSION['id_user'];
    $akses = $_SESSION['id_akses'];
    if ($akses == '1') {
      $querykos = "
        SELECT * FROM kos INNER JOIN user WHERE kos.id_pemilik = user.id_user";  
    }else{
      $querykos = "
        SELECT * FROM kos INNER JOIN user WHERE kos.id_pemilik = user.id_user AND user.id_user=$id_user
        ";
    }
    $result = mysqli_query($koneksi,$querykos);
?>
<table class="table table-striped">
  KOS
    <thead>
      <tr>
          <th scope="col">ID</th>
          <th scope="col">Nama Kos</th>
          <th scope="col">Alamat</th>

      </tr>
    </thead>
  <tbody>
    <?php  
        while($kos = mysqli_fetch_array($result)) {  
          echo "<tr>";
          echo "<th scope='row'>".$kos['id_kos']."</th>";
          echo "<td>".$kos['nama_kos']."</td>";
          echo "<td>".$kos['alamat_kos']."</td>";
          echo "<td><a class='editfasilitas' class='nav-link' data-toggle='modal' href='#fasilitasModal' data-fasilitas=".$kos['id_kos'].">Fasilitas</a></td>";
          echo "<td><a class='edit' class='nav-link' data-toggle='modal' href='#kosModal' data-kos=".$kos['id_kos'].">Detail</a></td>";
          echo "<tr>";
          }

      ?>
    </tbody>
</table>
<?php
  if ($akses!='1') {
    ?>
      <a class="btn btn-primary" href="#tkosModal" role="button" data-toggle='modal' data-user=<?php echo $_SESSION['id_user'] ?>>Tambah Kos</a>
    <?php  
  }
?>
<div class="modal fade" id="tkosModal" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="kosModalTitle">Tambah KOS</h5>
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


<div class="modal fade" id="kosModal" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="kosModalTitle">Detail KOS</h5>
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

<div class="modal fade" id="fasilitasModal" tabindex="-1" role="dialog" aria-hidden="false">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="kosModalTitle">Detail Fasilitas KOS</h5>
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
        $('#kosModal').on('show.bs.modal', function (e) {
            var kosid = $(e.relatedTarget).data('kos');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'php/detailkos.php',
                data :  'kosid='+ kosid,
                success : function(data){
                $('.container-detail').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
    $(document).ready(function(){
        $('#fasilitasModal').on('show.bs.modal', function (e) {
            var fasilitasid = $(e.relatedTarget).data('fasilitas');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'php/detailfasilitas.php',
                data :  'fasilitasid='+ fasilitasid,
                success : function(data){
                $('.container-detail').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
    $(document).ready(function(){
        $('#tkosModal').on('show.bs.modal', function (e) {
            var iduser = $(e.relatedTarget).data('user');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'php/tambahkos.php',
                data : 'iduser='+ iduser,
                success : function(data){
                $('.container-detail').html(data);
                }
            });
         });
    });
</script>
<script src="js/bootstrap.min.js"></script>