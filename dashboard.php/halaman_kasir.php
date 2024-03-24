<!DOCTYPE html>
<html lang="en">
<head>
  <title>KOTUSA</title>
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <style> 
  /*  import google fonts */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
*{
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration: none;
  list-style: none;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  background: rgb(233, 233, 233);
}
.container{
  display: flex;
  width: 1200px;
  margin: auto;
}
nav{
  position: sticky;
  top: 0;
  left: 0;
  bottom: 0;
  width: 300px;
  height: 120vh;
  background: #fff;
}
.navbar{
  width: 100%;
  margin: 0 auto;
}

.logo{
  margin: 2rem 0 1rem 0;

  padding-bottom: 3rem;
  display: flex;
  align-items: center;
}
.logo img{
  width: 100px;
  height: 100px;
  border-radius: 100%;
}
.logo h1{
  margin-left: 1rem;
  text-transform: uppercase;
}

ul{
  margin: 0 auto;
}
li{
  padding-bottom: 2rem;

}
li a{
  font-size: 12px;
  color: rgb(85, 83, 83);
}
.nav-item{

}
nav i{
  width: 50px;
  font-size: 18px;
  text-align: center;

}

.logout{
  position: absolute;
  bottom: 20px;
}

/* Main Section */
.main{
  width: 100%;
}
.main-top{
  width: 100%;
  background: #fff;
  padding: 10px;
  text-align: center;
  font-size: 18px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: rgb(43, 43, 43);
}
.main-body{
  padding: 10px 10px 10px 20px;
}
h1{
  margin: 20px 10px;
}
.search_bar{
  display: flex;
  padding: 10px;
  justify-content: space-between;
}
.search_bar input{
  width: 50%;
  padding: 10px;
  border: 1px solid rgb(190, 190, 190);
}
.search_bar input:focus{
  border: 1px solid blueviolet;
}
.search_bar select{
  border: 1px solid rgb(190, 190, 190);
  padding: 10px;
  margin-left: 2rem;
}
.search_bar .filter{
  width: 300px;
}

.tags_bar{
  width: 55%;
  display: flex;
  padding: 10px;
  justify-content: space-between;
}
.tag{
  background: #fff;
  padding: 10px 15px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  font-size: 13px;
  cursor: pointer;
}
.tag i{
  margin-right: 0.7rem;
}
.row{
  display: flex;
  padding: 10px;
  margin-top: 1.3rem;
  justify-content: space-between;
}
.row p{
  color: rgb(54, 54, 54);
  font-size: 15px;
}
.row p span{
  color: blueviolet;
}
.job_card{
  width: 100%;
  padding: 15px;
  cursor: pointer;
  display: flex;
  border-radius: 10px;
  background: #fff;
  margin-bottom: 15px;
  justify-content: space-between;
  border: 2px solid rgb(190, 190, 190);
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
}
.job_details{
  display: flex;
}
.job_details .img{
  display: flex;
  justify-content: center;
  align-items: center;
}
.job_details .img i{
  width: 70px;
  font-size: 3rem;
  margin-left: 1rem;
  padding: 10px;
  color: rgb(82, 22, 138);
  background: rgb(216, 205, 226);
}
.job_details .text{
  margin-left: 2.3rem;
}
.job_details .text span{
  color: rgb(116, 112, 112);
}
.job_salary{
  text-align: right;
  color: rgb(54, 54, 54);
}
.job_card:active{
  border: 2px solid blueviolet;
  transition: 0.4s;
}
.table tr th{
    background: #4D2DB7;
    color: #fff;
    font-weight: normal;
    /background-color: red;/
}
 
.table, th, td {
    padding: 8px 20px;
    text-align: center;
    /background: blue;/
}
 
.table tr:hover {
    background-color: #f2f2f2;
    /background-color: blue;/
}
 
.table tr:nth-child(even) {
    /background-color: #f2f2f2;/
    /background-color: red;/
}
.icon-button {
    border: none;
    background: none;
    cursor: pointer;
    padding: 0;
    font-size: inherit;
    text-decoration: none; /* Remove underline from the link */
    color: #333; /* Set link color */
}

/* Style for the icon inside the button */
.icon-button i {
    margin-right: 5px;
}

/* Additional button styling */
.icon-button {
    padding: 10px 15px;
    border: 1px solid #ccc;
    background-color: #f5f5f5;
    border-radius: 5px;
    display: inline-flex;
    align-items: center;
    transition: background-color 0.3s, color 0.3s; /* Add smooth transitions */
}

/* Change button color on hover */
.icon-button:hover {
    background-color: #ddd;
    color: #000;
}

ul.pagination {
  /justify-content: center;/
  text-align:center;
  /background-color: red;/
}

li.page-item{
  /background-color: blue;/
  justify-content: center;
  padding: 10px 15px;
  margin: auto;
    border: 1px solid #ccc;
    background-color: #f5f5f5;
    border-radius: 5px;
    display: inline-flex;
    transition: background-color 0.3s, color 0.3s;
}
    
  </style>
</head>
<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="../image/logo_kotusa.jpg" alt="">
        </div>
        <ul>
          <li>
            <a href="halaman_kasir.php">
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
            <a href="../admin/admin.php">
          <i class="fas fa-globe"></i>
            <span class="nav-item">Admin</span>
          </a>
          </li>

          <li>
            <a href="../anggota/anggota.php">
          <i class="fas fa-user"></i>
            <span class="nav-item">Pembeli</span>
          </a>
          </li>

          <li>
            <a href="../admin/admin.php">
          <i class="fas fa-folder-open"></i>
            <span class="nav-item">Transaksi</span>
          </a>
          </li>

          <li>
            <a href="../laporan/laporan.php">
          <i class="fas fa-envelope"></i>
            <span class="nav-item">Laporan</span>
          </a>
          </li>

          <li>
            <a href="../kontak/kontak.php">
            <i class="fas fa-address-book"></i>
            <span class="nav-item">Kontak</span>
          </a>
          </li>
      
        </ul>
      </div>
    </nav>

    <section class="main">
      <div class="main-top">
        <p>Selamat datang di Koperasi Tujuh Satu!</p>
      </div>
      <div class="main-body">
        <center>
        <h1>KOTUSA</h1>
      </center>

        <!-- Update "Profil Toko" section -->
        <div class="job_card">
          <div class="job_details">
            <div class="img">
            <i class="fas fa-archway"></i>
            </div>
            <div class="text">
              <h2>KOTUSA MART</h2>

              <span>
                Villaest adalah sebuah vila mewah yang berlokasi di kawasan eksklusif Pulo Jahe, 
                sebuah tempat di mana ketenangan dan keindahan alam berkumpul dalam satu kesempurnaan. 
                Dibangun dengan cinta dan perhatian terhadap detail, Villaest adalah destinasi yang baru saja dibangun,
                 menawarkan pengalaman menginap yang luar biasa bagi wisatawan yang mencari ketenangan dan kenyamanan di tengah keindahan alam yang alami</span>
            </div>
          </div>
        </div>

        <!-- Update "Jenis Produk" section -->
        <div class="job_card">
          <div class="job_details">
            <div class="img">
              <i class="fas fa-clock"></i> <!-- Updated Icon for "Jenis Produk" -->
            </div>
            <div class="text">
              <h2>Operasional Hours</h2> <!-- Updated Title -->
              <span><p>Senin - Jumat: 7 AM - 4 PM</p>
              <p>Sabtu - Minggu: 6 AM - 10 PM</p></span> <!-- Updated Description -->
            </div>
          </div>
        </div>

        <div class="job_card">
          <div class="job_details">
            <div class="img">
            <i class="fas fa-gem"></i> <!-- Updated Icon for "Jenis Produk" -->
            </div>
            <div class="text">
              <h2>Key Features of Villaest</h2> <!-- Updated Title -->
              <span>
                <ui> 
                Villaest adalah destinasi unggul yang menawarkan kombinasi luar biasa antara lokasi yang strategis, kualitas superior, pemandangan alam yang menakjubkan, fasilitas mewah, aktivitas rekreasi, dan pelayanan yang istimewa. Tamu yang menginap di Villaest dapat merasakan kemewahan dan ketenangan dalam suasana yang sangat indah.
                </ui></span> <!-- Updated Description -->
            </div>
          </div>
        </div>

       
      </div>
    </section>
  </div>
</body>
</html>
