<?php
	include 'koneksi.php';
	
	$nama_instansi= $_POST['nama_instansi'];
	$deskripsi_instansi = $_POST['deskripsi_instansi'];
	$alamat_instansi = $_POST['alamat_instansi'];
	$telp_instansi = $_POST['telp_instansi'];
	$created_by = $_POST['session'];
	$modified_by = $_POST['session'];
	$type = $_POST['type'];
	
		if($type == 'tambah'){
        		$tambah     = 	mysqli_query($koneksi,"INSERT INTO tb_instansi (nama_instansi,deskripsi_instansi,alamat_instansi,telp_instansi,created_by,created_date)
        										   VALUES('$nama_instansi','$deskripsi_instansi','$alamat_instansi','$telp_instansi','$created_by',NOW())") ;
	
                echo "<script>alert('Data Berhasil ditambahkan'); window.location = 'index.php?page=view_data_instansi'</script>";
		
		} elseif($type == 'edit'){
				$tambah     = 	mysqli_query($koneksi,"UPDATE tb_instansi SET deskripsi_instansi = '$deskripsi_instansi', alamat_instansi = '$alamat_instansi',
														telp_instansi = '$telp_instansi', modified_by = '$modified_by', modified_date = NOW() WHERE id_instansi = '$_POST[id_instansi]' ") ;
												   
				echo "<script>alert('Data Berhasil diperbarui'); window.location = 'index.php?page=view_data_instansi'</script>";

        } 


?>
