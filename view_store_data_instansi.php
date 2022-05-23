<section>
	<div class="row">
		<div class="col-md-12">
	      <!-- general form elements disabled -->
	      <div class="box box-info">
	        <div class="box-header">
	          <h3 class="box-title">Tambah Instansi</h3>
	        </div><!-- /.box-header -->
	        <div class="box-body">
	          <form role="form" method="post" action="act_store_data_instansi.php">
	            <!-- text input -->
	            <input type="hidden" name="type" value="tambah">
				<input type="hidden" name="session" value="<?php echo $_SESSION['username'] ?>">
	            <div class="form-group">
	              <label>Nama Instansi</label>
	              <input type="text" class="form-control" name="nama_instansi" placeholder="Nama" value="" autocomplete="off" required="required"/>
	            </div>
	            <div class="form-group">
	              <label>Deskripsi Instansi</label>
	              <input type="text" class="form-control" name="deskripsi_instansi" placeholder="Deskripsi" value="" autocomplete="off" required="required"/>
	            </div>
	            <div class="form-group">
	              <label>Alamat Instansi</label>
	              <textarea class="form-control" rows="3" name="alamat_instansi" placeholder="Alamat"></textarea>
	            </div>
	            <div class="form-group">
	              <label>Telepon</label>
	              <input type="text" class="form-control" name="telp_instansi" placeholder="Telepon" value="" autocomplete="off"/>
	            </div>
	            

	            <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> Simpan</button>
	            <button type="reset" class="btn btn-warning"> <i class="fa fa-trash"></i> Reset</button>
	            <a href="./?page=data_instansi" class="btn btn-danger"> <i class="fa fa-times"></i> Batal</a>
	          </form>
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!--/.col (right) -->
	</div>
</section>