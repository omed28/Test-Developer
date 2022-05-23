<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Anggota</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="act_store_data_anggota.php">
	            <!-- text input -->
	            <input type="hidden" name="type" value="tambah">
				<input type="hidden" name="session" value="<?php echo $_SESSION['username'] ?>">
	            <div class="form-group">
	              <label>Nama Anggota</label>
	              <input type="text" class="form-control" name="nama_anggota" placeholder="Nama" value="" autocomplete="off" required="required"/>
	            </div>
	            <div class="form-group">
	              <label>Nama Instansi</label>
	              <select id="id_instansi" name="id_instansi" class="form-control" required="required">
					<option value="">Pilih Instansi</option>
					<?php
						$query = "SELECT a.id_instansi,a.nama_instansi FROM tb_instansi a  ORDER BY id_instansi";
						$hasil = mysqli_query($koneksi, $query);
							while ($row = mysqli_fetch_array($hasil)) {
								$id = $row['id_instansi'];
					?>
							<option value="<?php echo $id ?>"><?php echo $row['nama_instansi'] ?></option>
					<?php } ?>
				</select>
	            </div>
	            <div class="form-group">
	              <label>Alamat Anggota</label>
	              <textarea class="form-control" rows="3" name="alamat_anggota" placeholder="Alamat"></textarea>
	            </div>
	            <div class="form-group">
	              <label>Telepon Anggota</label>
	              <input type="text" class="form-control" name="telp_anggota" placeholder="Telepon" value="" autocomplete="off"/>
	            </div>
	            

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="./?page=data_anggota" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>