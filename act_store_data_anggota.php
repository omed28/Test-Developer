<?php
	include 'koneksi.php';
	
	$nama_anggota= $_POST['nama_anggota'];
	$id_instansi = $_POST['id_instansi'];
	$alamat_anggota = $_POST['alamat_anggota'];
	$telp_anggota = $_POST['telp_anggota'];
	$created_by = $_POST['session'];
	$modified_by = $_POST['session'];
	$type = $_POST['type'];
	
		if($type == 'tambah'){
        		$tambah     = 	mysqli_query($koneksi,"INSERT INTO tb_anggota (id_instansi,nama_anggota,alamat_anggota,telp_anggota,created_by,created_date)
        										   VALUES('$id_instansi','$nama_anggota','$alamat_anggota','$telp_anggota','$created_by',NOW())") ;
	
                echo "<script>alert('Data Berhasil ditambahkan'); window.location = 'index.php?page=view_data_anggota'</script>";
		
		} elseif($type == 'edit'){
				$tambah     = 	mysqli_query($koneksi,"UPDATE tb_anggota SET id_instansi = '$id_instansi', alamat_anggota = '$alamat_anggota',
														telp_anggota = '$telp_anggota', modified_by = '$modified_by', modified_date = NOW() WHERE id_anggota = '$_POST[id_anggota]' ") ;
												   
				echo "<script>alert('Data Berhasil diperbarui'); window.location = 'index.php?page=view_data_anggota'</script>";

        } 


?>
