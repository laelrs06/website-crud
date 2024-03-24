
<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$merk = $_POST['merk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

 
// update data ke database
mysqli_query($koneksi,"update produk set kategori='$kategori',merk='$merk', harga='$harga', stok='$stok' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../produk/produk.php");
 
?>