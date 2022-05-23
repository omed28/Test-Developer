<?php
    $query = "SELECT a.id_instansi,a.nama_instansi,a.deskripsi_instansi, a.alamat_instansi,a.telp_instansi FROM tb_instansi a ";
    $hasil = mysqli_query($koneksi, $query);
	$count = mysqli_num_rows($hasil);
?>
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Data User ( Terdapat <?php echo $count ?> Data)</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    <a href="?page=view_store_data_instansi" style="margin-bottom: 10px;" class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> Tambah Data Instansi</a>
    <br>
		<table class="table table-bordered" id="tabel">
		<thead>
			 <tr>
		    <th>NO</th>
		    <th>NAMA INSTANSI</th>
			<th>DESKRIPSI</th>
			<th>ALAMAT</th>
		    <th>TELEPON</th>
		    <th>ACTION</th>
		  </tr>
		</thead>
		<tbody>
			<?php
		  $no=1;
		  while($q=mysqli_fetch_array($hasil)){
		  ?>
		  <tr>
		    <td><?php echo $no++; ?></td>          
		    <td><?php echo $q['nama_instansi']?></td>
			<td><?php echo $q['deskripsi_instansi']?></td>
			<td><?php echo $q['alamat_instansi']?></td>
		    <td><?php echo $q['telp_instansi']?></td>
		    <td>
		    	<a class="btn btn-success" href="?page=view_edit_data_instansi&id_instansi=<?php echo $q['id_instansi']; ?>">Edit</a>
		    	<a class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="act_delete_data_instansi.php?&id_instansi=<?php echo $q['id_instansi']; ?>">Hapus</a>
		    </td>
		  </tr>
		  <?php
		  }
		  ?>
		</tbody>
		</table>
	</div>
</div>

<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
 <script type="text/javascript">
	 $(document).ready(function() {
	 	$('#tabel').dataTable({
	          "bPaginate": true,
	          "bLengthChange": true,
	          "bFilter": true,
	          "bSort": true,
	          "bInfo": true,
	          "bAutoWidth": true
	    });
	 });
</script>