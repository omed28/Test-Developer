<?php
	$id_anggota = $_GET['id_anggota'];
    $query = "SELECT a.id_anggota,a.id_instansi,a.nama_anggota, a.alamat_anggota,a.telp_anggota FROM tb_anggota a WHERE a.id_anggota = $id_anggota ";
    $hasil = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($hasil);
?>

<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Edit Data <?php echo $data['nama_anggota']; ?> <?php echo $data['id_instansi']; ?></h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="act_store_data_anggota.php">
	            <!-- text input -->
	            <input type="hidden" name="type" value="edit">
				<input type="hidden" name="session" value="<?php echo $_SESSION['username'] ?>">
				<input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota']; ?>">
	            <div class="form-group">
	              <label>Nama anggota</label>
	              <input type="text" class="form-control" name="nama_anggota" value="<?php echo $data['nama_anggota']; ?>" readonly="readonly" />
	            </div>
	            <div class="form-group">
	              <label>Deskripsi anggota</label>
	              <select name="id_instansi" id="id_instansi" class="form-control">
					  <?php
						$query = "SELECT a.id_instansi,a.nama_instansi FROM tb_instansi a  ORDER BY id_instansi";
						$hasil = mysqli_query($koneksi, $query);
						while ($row=mysqli_fetch_array($hasil))
							{
								if ($data['id_instansi']== $row['id_instansi']) {
									
									$select="selected";
								}else{
									$select="";
								}
								
								$id = $row['id_instansi'];
					  ?>   
						<option value="<?php echo $id ?>"  <?php echo $select ?> ><?php echo $row['nama_instansi'] ?></option>
						<?php } ?>
				 </select>
	            </div>
	            <div class="form-group">
	              <label>Alamat anggota</label>
	              <textarea class="form-control" rows="3" name="alamat_anggota" placeholder="Alamat"><?php echo $data['alamat_anggota']; ?></textarea>
	            </div>
	            <div class="form-group">
	              <label>Telepon</label>
	              <input type="text" class="form-control" name="telp_anggota" placeholder="Telepon" value="<?php echo $data['telp_anggota']; ?>"/>
	            </div>
	            

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="?page=data_anggota" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>