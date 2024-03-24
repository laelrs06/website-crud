       <?php
session_start();
 
// Terminate script execution after the redirect
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="../css/style3.css">
</head>
<body>

	<div class="kotak_login">
		<p class="tulisan_login">Tambah Data</p>
 
		<form method="POST" action="tambah_aksi.php">

			<label></label>
			<input type="hidden" name="id_admin" class="form_login" placeholder="">

			<label>USERNAME</label>
			<input type="text" name="username" class="form_login" placeholder="">
			<label>PASSWORD</label>
			<input type="password" name="password" class="form_login" placeholder="">

			<label for="level">LEVEL  :</label>
			<select name="level" id="level">
        <option value="pembeli">pembeli</option>
        <option value="kasir">kasir</option>
       
    </select>
			             
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





