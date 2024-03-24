<!DOCTYPE html>
<html lang="en">
<head>
    <title>produk</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/style3.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            <a href="../admin/admin.php">
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
      <div class="main-top">
        <p>Selamat datang di Kategori KOTUSA</p>
      </div>
      <div class="main-body">
        <center>
        <h1>DATA PRODUK</h1>
      </center>
       <div class="job_card">
                <div class="">
                    <div class="img">
                        <i class=""></i>
                    </div>


                    <a href="tambah.php" class="icon-button">
                        <i class="fas fa-plus"> TAMBAH DATA</i>
                    </a>

                    <a href="../dashboard.php/halaman_kasir.php" class="icon-button">
                        <i class="fas fa-backward"> BACK</i>
                    </a>
                    <br/>
                    <br/>
                    <table class="table1">
                        <tr>
                            <th>NO</th>
                          <!--   <th>ID PRODUK</th> -->
                            <th>KATEGORI</th>
                            <th>MERK</th>
                            <th>HARGA</th>
                            <th>STOK</th>
                            <th>GAMBAR</th>
                            <th colspan="2">OPSI</th>
                        </tr>
                        <?php
                        include '../koneksi.php';

                        $batas = 5;
                        $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
                        $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
                        $previous = $halaman - 1;
                        $next = $halaman + 1;
                        $no = 1;

                        $query = "SELECT produk.*, kategori.kategori
                            FROM produk
                            INNER JOIN kategori ON produk.fid_kategori = kategori.id
                            ORDER BY produk.id ASC LIMIT $halaman_awal, $batas";

                        $data = mysqli_query($koneksi, $query);

                        if (!$data) {
                            die("Query Error: " . mysqli_error($koneksi));
                        }

                        $data_page = mysqli_query($koneksi, "SELECT * from produk");
                        $jumlah_data = mysqli_num_rows($data_page);
                        $total_halaman = ceil($jumlah_data / $batas);

                        while ($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                               <!--  <td><?php echo $d['id']; ?></td> -->
                                <td><?php echo $d['kategori']; ?></td>
                                <td><?php echo $d['merk']; ?></td>
                                <td><?php echo $d['harga']; ?></td>
                                <td><?php echo $d['stok']; ?></td>
                                <td><img src="./gambar/<?php echo $d['gambar'];?>" alt="produk" width="70" height="60"></td>
                      
                                    <?php
                                    $queryEksemplar = "SELECT COUNT(*) AS eksemplar FROM detail_produk WHERE
                                        id = " . $d['id'];
                                    $resultEksemplar = mysqli_query($koneksi, $queryEksemplar);
                                    if (!$resultEksemplar) {
                                        die("Query Error: " . mysqli_error($koneksi));
                                    }
                                    $eksemplar = 0;
                                    if ($rowEksemplar = mysqli_fetch_assoc($resultEksemplar)) {
                                        $eksemplar = $rowEksemplar['eksemplar'];
                                    }
                                    ?>
                                    <!-- <nav aria-label="stock" style="height: 60px; width: 150px; background: white;"> -->
<!--                                         <ul class="pagination"> -->
                                            <!-- <li class="page-item"> -->
                                                <!-- <a class="page-link"
                                                   href="?f=produk&m=select&id=<?php echo $d['id']; ?>&updatestock=decrease"></a>
                                            </li> -->
                                            <!-- <li class="page-item"> -->
                                              <!--   <a class="page-link" href=""><?php echo $eksemplar; ?></a>
                                            </li> -->
                                            <!-- !-- <li class="page-item"> -->
                                          <!--       <a class="page-link"
                                                   href="?f=produk&m=select&id=<?php echo $d['id']; ?>&updatestock=increase">+</a>
                                            </li> 
 -->                                        </ul>
                                    </nav>
                                <td>
                                    <a href="edit.php?id=<?php echo $d['id']; ?>"
                                       onclick="return confirm('yakin mau edit ?');" class="btn btn-outline-success">
                                        <i class="fas fa-pen"></i>
                                        edit
                                    </a>
                                </td>
                                <td>
                                    <a href="hapus.php?id=<?php echo $d['id']; ?>"
                                       onclick="return confirm('yakin mau hapus ?');" class="btn btn-outline-danger">
                                        <i class="fas fa-eraser"></i>
                                        delete
                                    </a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" <?php if ($halaman > 1) {
                                echo "href='?halaman=$previous'";
                            } ?>>Previous</a>
                        </li>
                        <?php
                        for ($x = 1; $x <= $total_halaman; $x++) {
                            ?>
                            <li class="page-item"><a class="page-link"
                                                     href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
                            <?php
                        }
                        ?>
                        <li class="page-item">
                            <a class="page-link" <?php if ($halaman < $total_halaman) {
                                echo "href='?halaman=$next'";
                            } ?>>Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>