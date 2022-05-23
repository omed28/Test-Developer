<?php
    $query = "SELECT a.id_anggota,a.id_instansi,a.nama_anggota,a.alamat_anggota,a.telp_anggota,b.nama_instansi,b.alamat_instansi,b.telp_instansi 
			  FROM tb_anggota a 
			  LEFT JOIN tb_instansi b ON b.id_instansi = a.id_instansi";
    $hasil = mysqli_query($koneksi, $query);
	$count = mysqli_num_rows($hasil);
?>
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Data Anggota ( Terdapat <?php echo $count ?> Data)</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
    <a href="?page=view_store_data_anggota" style="margin-bottom: 10px;" class="btn btn-md btn-primary"> <i class="fa fa-plus"></i> Tambah Data Anggota</a>
    <br>
		<table class="table table-bordered" id="tabel">
		<thead>
			 <tr>
		    <th>NO</th>
		    <th>NAMA ANGGOTA</th>
			<th>INSTANSI</th>
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
		    <td><?php echo $q['nama_anggota']?></td>
			<td><?php echo $q['nama_instansi']?></td>
			<td><?php echo $q['alamat_anggota']?></td>
		    <td><?php echo $q['telp_anggota']?></td>
		    <td>
		    	<a class="btn btn-success" href="?page=view_edit_data_anggota&id_anggota=<?php echo $q['id_anggota']; ?>">Edit</a>
		    	<a class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="act_delete_data_anggota.php?&id_anggota=<?php echo $q['id_anggota']; ?>">Hapus</a>
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