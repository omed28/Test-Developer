<?php
// mengaktifkan session php
session_start();
function anti_injection($data){
  $filter = mysqli_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tb_admin where username='$username' and password='$password' AND blokir = 'N'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

// ubah data menjadi array
$r=mysqli_fetch_array($data);

if($cek > 0){
  $_SESSION[id_user]          = $r[id_user];
  $_SESSION[username]         = $r[username];
  $_SESSION[nama]         	  = $r[nama];
  $_SESSION[login]            = 1;
  $_SESSION[status]           = $r[status];

  mysqli_query("UPDATE tb_admin SET last_login=NOW() WHERE username='$username'");

  header("location:index.php");

} else{

  header("location:login.php?notif=1");

}
?>
