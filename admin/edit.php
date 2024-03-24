<!DOCTYPE html>
<html>
<head>
    <title>edit</title>
        <style>
        table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            margin-top: 3rem;
            border: 3px

        }
        
        h3 {
            text-align: center;
        }

        .form-group {
            margin: 1rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        select, input {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #ced4da;
            background: #146a656e;
            border-radius: 0.25rem;
        }

        button {
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #ced4da;
            background: #25e9d3;
            border-radius: 0.25rem;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
    <center><h3>EDIT DATA KARYAWAN</h3></center>
    <?php
    include '../koneksi.php';
    $id_admin = $_GET['id_admin'];
    $data = mysqli_query($koneksi,"select * from admin where id_admin='$id_admin'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="POST" action="update.php">
            <!-- percobaan  -->
        <div class="kotak_login">
            <p class="tulisan_login">Tambah Data admin</p>
 
       <!--      <label>id admin</label>
            <input type="hidden" name="id_admin" class="form_login" placeholder="id atau email" value="<?php echo $d['id_admin']; ?>"> -->
 
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="username"  value="<?php echo $d['username']; ?>">

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="password"  value="<?php echo $d['password']; ?>">

            <div class="input-group">
                <label for="level">Level:</label>
                <select name="level" id="level" required>
                    <option value="kasir">Kasir</option>
                    <option value="pembeli">Pembeli</option>
                </select>
            </div>
                <!-- Add more options as needed -->
            
            <input type="submit" class="tombol_login" value="SIMPAN">
 
            <br/>
            <center>
                 <input type="submit" class="tombol_login" value="Kembali">
            </center>   
    </div>
    </form>
        <?php 
        }
         ?>
        
</body>
</html>