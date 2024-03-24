<?php
session_start();

// koneksi database
include '../koneksi.php';
 
if (isset($_POST['submit'])) {
	// menangkap data yang di kirim dari form
	$id = $_POST['id_admin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];


	$result = mysqli_query($koneksi,"SELECT id_admin FROM admin WHERE id_admin = '$id'");
	$user = [];

	while ($d = mysqli_fetch_assoc($result)) {
		$user[] = $d;
	}

	$user_id = $user[0]['id_admin'];

	// menginput data ke database
	mysqli_query($koneksi,"insert into admin values('$id','$username','$password','$level')");
}
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
 
?>