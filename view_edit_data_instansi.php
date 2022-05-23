<?php
	$id_instansi = $_GET['id_instansi'];
    $query = "SELECT a.id_instansi,a.nama_instansi,a.deskripsi_instansi, a.alamat_instansi,a.telp_instansi FROM tb_instansi a WHERE a.id_instansi = $id_instansi ";
    $hasil = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($hasil);
?>

<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Edit Data <?php echo $data['nama_instansi']; ?></h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="act_store_data_instansi.php">
	            <!-- text input -->
	            <input type="hidden" name="type" value="edit">
				<input type="hidden" name="session" value="<?php echo $_SESSION['username'] ?>">
				<input type="hidden" name="id_instansi" value="<?php echo $data['id_instansi']; ?>">
	            <div class="form-group">
	              <label>Nama Instansi</label>
	              <input type="text" class="form-control" name="nama_instansi" value="<?php echo $data['nama_instansi']; ?>" readonly="readonly" />
	            </div>
	            <div class="form-group">
	              <label>Deskripsi Instansi</label>
	              <input type="text" class="form-control" name="deskripsi_instansi" value="<?php echo $data['deskripsi_instansi']; ?>"/>
	            </div>
	            <div class="form-group">
	              <label>Alamat Instansi</label>
	              <textarea class="form-control" rows="3" name="alamat_instansi" placeholder="Alamat"><?php echo $data['alamat_instansi']; ?></textarea>
	            </div>
	            <div class="form-group">
	              <label>Telepon</label>
	              <input type="text" class="form-control" name="telp_instansi" placeholder="Telepon" value="<?php echo $data['telp_instansi']; ?>"/>
	            </div>
	            

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="?page=data_instansi" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>