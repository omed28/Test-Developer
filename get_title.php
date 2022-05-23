<?php 

if (isset($_GET['page'])) {
	switch ($_GET['page']) {
		case 'data_instansi':
			$title = "Data Instansi";
			break;
		case 'data_anggota':
			$title = "Data Anggota";
			break;
		case 'data_admin':
			$title = "Data Admin";
			break;
		
		default:
			$title = "Halaman Tidak Ditemukan";
			break;
	}
	echo $title;
}
else {
	echo "Halaman Utama";
}

 ?>