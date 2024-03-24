<?php
include '../koneksi.php';

// menggunakan objek $db dari kelas database
$db = new Database("localhost", "root", "", "kotusa");

$t_kategori = $db->getAll("SELECT * FROM kategori");

// pengecekan apakah form telah di submit 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // mendapatkan nilai dari form
        $merk = isset($_POST['merk']) ? $_POST['merk'] : null;
        $harga = isset($_POST['harga']) ? $_POST['harga'] : null;
        $stok = isset($_POST['stok']) ? $_POST['stok'] : null;
        $kategori_id = isset($_POST['kategori']) ? $_POST['kategori'] : null;
        $nama_file = isset($_FILES['gambar']['name']) ? $_FILES['gambar']['name'] : null;
        $source = isset($_FILES['gambar']['tmp_name']) ? $_FILES['gambar']['tmp_name'] : null;
        $folder = './gambar/';

        // pengecekan apakah nilai yang diperlukan sudah terisi dan tidak kosong
        if (empty($merk) || empty($harga) || empty($stok) || empty($kategori_id) || empty($nama_file) || empty($source)) {
            throw new Exception("Form harus diisi dengan lengkap.");
        }

        // pindahkan file yang diupload ke folder upload
        move_uploaded_file($source, $folder . $nama_file);

        // Insert data ke database
        $pdoConnection = $db->getPDOConnection();
        $stmt = $pdoConnection->prepare("INSERT INTO produk (merk, harga, stok, fid_kategori, gambar) VALUES (?,?,?,?,?)");
        $stmt->execute([$merk, $harga, $stok, $kategori_id, $nama_file]);

        // menampilkan pesan hasil
        if ($stmt->rowCount() > 0) {
            echo "Data berhasil ditambahkan";
            header("location:produk.php");
            exit(); // keluar dari skrip setelah melakukan redirect
        } else {
            echo "gagal menambah data";
        }
    } catch (Exception $e) {
        echo "error:" . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<style type="text/css">
.form-style-3{
    max-width: 450px;
    font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-3 label{
    display:block;
    margin-bottom: 10px;
}
.form-style-3 label > span{
    float: left;
    width: 100px;
    color: #F072A9;
    font-weight: bold;
    font-size: 13px;
    text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
    border-radius: 10px;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    margin: 0px 0px 10px 0px;
    border: 1px solid #E0FFFF;
    padding: 20px;
    background: #E0FFFF;
    box-shadow: inset 0px 0px 15px #FFE5E5;
    -moz-box-shadow: inset 0px 0px 15px #FFE5E5;
    -webkit-box-shadow: inset 0px 0px 15px #FFE5E5;
}
.form-style-3 fieldset legend{
    color: #FFA0C9;
    border-top: 1px solid #E0FFFF;
    border-left: 1px solid #E0FFFF;
    border-right: 1px solid #E0FFFF;
    border-radius: 5px 5px 0px 0px;
    -webkit-border-radius: 5px 5px 0px 0px;
    -moz-border-radius: 5px 5px 0px 0px;
    background: #E0FFFF;
    padding: 0px 8px 3px 8px;
    box-shadow: -0px -1px 2px #E0FFFF;
    -moz-box-shadow:-0px -1px 2px #E0FFFF;
    -webkit-box-shadow:-0px -1px 2px #E0FFFF;
    font-weight: normal;
    font-size: 12px;
}
.form-style-3 textarea{
    width:250px;
    height:100px;
}
.form-style-3 input[type=text],
.form-style-3 select, 
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
    background: #90EE90;
    border: 1px solid #E0FFFF;
    padding: 5px 15px 5px 15px;
    color: #FFCBE2;
    box-shadow: inset -1px -1px 3px #E0FFFF;
    -moz-box-shadow: inset -1px -1px 3px #E0FFFF;
    -webkit-box-shadow: inset -1px -1px 3px #E0FFFF;
    border-radius: 3px;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;    
    font-weight: bold;
}
.form-style-3 .required{
    color:green;
    font-weight:normal;
}
</style>
<link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>tambah produk</title>
</head>
<body style="background-color: #ffff">
    <!-- dari sini -->
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="../image/logo_kotusa.jpg" alt="">
        </div>
        <ul>
          <li>
            <a href="../dashboard.php/halaman_kasir.php">
            <i class="fas fa-home"></i>
            <span class="nav-item">Dashboard</span>
          </a>
          </li>

          <li>
            <a href="../kategori/kategori.php">
          <i class="fas fa-list"></i>
            <span class="nav-item">Kategori</span>
          </a>
          </li>

          <li>
            <a href="../produk/produk.php   ">
          <i class="fas fa-address-book"></i>
            <span class="nav-item">Produk</span>
          </a>
          </li>

          <li>
            <a href="admin/admin.php">
          <i class="fas fa-globe"></i>
            <span class="nav-item">Admin</span>
          </a>
          </li>

          <li>
            <a href="anggota/anggota.php">
          <i class="fas fa-user"></i>
            <span class="nav-item">Pembeli</span>
          </a>
          </li>

          <li>
            <a href="admin/admin.php">
          <i class="fas fa-folder-open"></i>
            <span class="nav-item">Transaksi</span>
          </a>
          </li>

          <li>
            <a href="laporan/laporan.php">
          <i class="fas fa-envelope"></i>
            <span class="nav-item">Laporan</span>
          </a>
          </li>

          <li>
            <a href="kontak/kontak.php">
            <i class="fas fa-address-book"></i>
            <span class="nav-item">Kontak</span>
          </a>
          </li>
        
          <li>
            <a href="logout/logoutvilla.php" class="logout">
            <i class="fas fa-sign-out-alt"></i>
            <span class="nav-item">Logout</span>
          </a>
          </li>
        </ul>
      </div>
    </nav>
    <section class="main">
      <div class="main-top" style="background: #ffff">
        <p>SELAMAT DATANG DI KOTUSA MART!</p>
      </div>
      <div class="main-body">
        <h1>KOTUSA MART</h1>
        <div class="job_card">
        <div class="job_details">
          
          <div class="text">
<div class="form-style-3">
<form action="" method="post" enctype="multipart/form-data">
<fieldset><legend><font color="black">Data Produk</legend>
 
  <label for="field1">
    <span><font color="black"> Kategori<span class="required">*</span></span></span>
    <select class="required" name="kategori">
        <option value="" disabled selected>Pilih...</option>
<?php
$result_kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
while ($kategori = mysqli_fetch_assoc($result_kategori)) {
    echo "<option value='" . $kategori['id'] . "'>" . $kategori['kategori'] . "</option>";
}
?>
    </select>
</label>
    <label for="field1">
      <span><font color="black"> merk<span class="required">*</span></span></span>
        <input type="text" class="input-field" name="merk" value="" /></label> 
    <label for="field1">
      <span><font color="black"> harga<span class="required">*</span></span></span>
        <input type="text" class="input-field" name="harga" value="" /></label>
    <label for="field1">
        <span><font color="black"> stok<span class="required">*</span></span></span>
          <input type="text" class="input-field" name="stok" value="" /></label>
    <label for="field1">
          <span><font color="black">gambar</span class="required">*</span></span></span>
            <input type="file" name="gambar" acce  pt="image/*"></label> 
      
  
  <label><span>&nbsp;</span><input type="submit" name="submit" value="Save" style="color: black;"/></label>

</fieldset>
</form>
</div></div></div></div></div></section></div>
</body>
</html>
