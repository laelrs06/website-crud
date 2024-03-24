<?php
session_start();
include '../koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from kategori where id='$id'");

$result = [];


while($d = mysqli_fetch_assoc($data))
{
	$result[] = $d;
}

$result= $result[0];



?>
<!DOCTYPE html>
	<html>
	<head>
		<title>kategori</title>
		<link rel="stylesheet" type="text/css" href="../css/style3.css">
	</head>
	<body>
	 	<?php
		include '../koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from kategori where id='$id'");
		while($d = mysqli_fetch_array($data)){
			?>
			<div class="kotak_login">
	     	<center><h3>EDIT DATA KATEGORI</h3></center>
			<form method="post" action="update.php">
				
				<label></label>
				<input type="hidden" name="id" class="form_login" placeholder="" 
                value="<?php echo $d['id']; ?>">
	 
				<label>KATEGORI</label>
				<input type="text" name="kategori" class="form_login" placeholder="" 
                value="<?php echo $d['kategori']; ?>">
	            
	 
				<input type="submit" name="submit" class="tombol_login" value="SIMPAN">
	 	
				<br/>
				<br/>
				<center>
					<a class="link" href="../dashboard/halaman_kasir.php">KEMBALI</a>
				</center>
			</form></div>
			<?php 
		}
		?>
	</body>
	</html>