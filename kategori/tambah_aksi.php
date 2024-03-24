<?php
// koneksi database
include '../koneksi.php';
 //menangkap data yang dikirim dari tambah.php
$kategori = $_POST['kategori'];

//menghindari penambahakan ketegori yang sudah ada
$query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori ='$kategori'");

if($query === false) {
// jika terjadi kesalahan dalam eksekusi query
	echo "Error: " . mysqli_error($koneksi);
} else {
	//jika query berhasil di eksekusi
	if(mysqli_num_rows($query) > 0) {
		//jika kategori sudah ada, langsung arahkan ke halaman kategori.php
		header("location:kategori.php");
		exit; // keluar dari skrip setelah pengalihan halaman
	} else {
		//jika kategori belum ada, tambahkan ke database
		$insert = mysqli_query($koneksi, "INSERT INTO kategori (kategori) VALUES ('$kategori')");

		if ($insert) {
			//redirect ke halaman kategori
			header("location:kategori.php");
			exit;//keluar dari skrip setelah pengalihan halaman

		} else {
			//jika terjadi kesalahan dalam eksekusi query INSERT
			echo "Gagal menambahkan kategori:". mysqli_error($koneksi);
		}
	}
}
?>