<?php
session_start();

//koneksi database
include '../koneksi.php';
 
// menangkap data id yang di kirim dari url
$id= $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from produk where id='$id'");
 
// mengalihkan halaman kembali ke dashboard.php
header("location:produk.php");
 
?>