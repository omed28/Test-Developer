<?php
	include 'koneksi.php';
    $id_instansi     = $_GET['id_instansi'];
	$tambah = 	mysqli_query($koneksi,"DELETE FROM tb_instansi WHERE id_instansi = $id_instansi");
                              					
	header('location:index.php?page=view_data_instansi');
	
?>