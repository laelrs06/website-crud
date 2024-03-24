<?php
include '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=$id";
    $row = $db->getITEM($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit </title>
    <style>
        table {
            width: 30%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 3rem;
            color:#ced4da;
        }

        th, td {
            padding: 1px;
            border: 1px solid #756AB6;
            text-align: left;
        }

        h3 {
            text-align: center;
        }

        .form-group {
            margin: 1.5rem;

        }

        label {
            display: block;
            margin-bottom: 0rem;
            border: 12px;
            color: #3E3232;
        }

        select, input {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #ced4da;
            border-radius: 5rem;
            color: #BB9CC0;
        }


        .btn {
            background-color: #AC87C5;
            color: #fff;
            padding: 12px 20px;
            border: 1rem;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn {
            background-color: #AC87C5;
            color: #fff;
            padding: 10px 200px;
            border: 1rem;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h3>UPDATE PRODUK</h3>
    <table>
        <tr>
            <td>
                <?php
                $t_kategori = $db->getALL("SELECT * FROM kategori");
                ?>
                <div class="form-group">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select id="kategori" class="form-control" name="kategori">
                                <?php foreach ($t_kategori as $isi) : ?>
                                    <option reqired value="<?php echo $isi['id'] ?>"><?php echo $isi['kategori'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="merek">Merk</label>
                            <input type="text" id="merk" name="merk" required value="<?php echo $row['merk'] ?>" class=" form-control">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" id="harga" name="harga" required value="<?php echo $row['harga'] ?>" class=" form-control">
                        </div>

                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" id="stok" name="stok" required value="<?php echo $row['stok'] ?>" class=" form-control">
                        </div>
                        <center>
                        <button type="submit" name="simpan" value="simpan" class="btn btn-dark">Save</button> </center>
                        <br>

        <center><button type="submit" name="kembali" value="kembali" class="btn btn-dark" ><a href="produk.php"></a>Kembali</button>
        </center>
                    </form>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>

<?php
if (isset($_POST['simpan'])) {
    //Inisialisasi
    $kategori = $_POST['kategori'];
    $merk = $_POST['merk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    //update data
    $sql = "UPDATE produk SET fid_kategori='$kategori', merk='$merk', harga='$harga', stok='$stok' WHERE id=$id";
    $db->runSQL($sql);
    // Mengalihkan halaman kembali ke Tproduk.php
    header("location:produk.php");
}
?>