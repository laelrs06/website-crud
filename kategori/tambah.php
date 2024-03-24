  <?php
session_start();
 
// Terminate script execution after the redirect
?>
<!DOCTYPE html>
<html>
<head>
	<title>kategori</title>
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>
<body>

	<div class="kotak_login">
		<p class="tulisan_login">Tambah Data</p>
 
		<form method="POST" action="tambah_aksi.php">

			<label></label>
			<input type="hidden" name="id" class="form_login" placeholder="">

			<label>KATEGORI</label>
			<input type="text" name="kategori" class="form_login" placeholder="">

			<input type="submit" name="submit" class="tombol_login" value="SIMPAN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="../dashboard.php/halaman_kasir.php">KEMBALI</a>
			</center>
		</form>
	</div>
</center>
</body>
</html>





