
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
 
// update data ke database
mysqli_query($koneksi,"update produk set username='$username',password='$password', level='$level' where id_admin='$id_admin'");
 
// mengalihkan halaman kembali ke index.php
header("location:../admin/admin.php");
 
?>