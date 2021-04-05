<?php
require 'functions.php';
$datasiswa = query ("SELECT * FROM datasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $datasiswa = cari($_POST["keyword"]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD GALE</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <a href="tambah.php" class = "btn btn-primary" > Tambah data siswa</a>
    <br><br>


    <form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukan keywoard pencarian.." autocomplate="off">
    <button type="submit" name="cari"> CARI ! </button>
    <br><br>

    </form>

    <table border = "1" cellpadding="10" cellspacing="0">
    <tr>
    <th>No</th>
    <th>Aksi</th>
    <th>Gambar</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
    
    <?php $i = 1; ?>
    <?php foreach ($datasiswa as $row) : ?>
    <tr>
    <td><?= $i ?></td>
    <td>
        <a href="ubah.php?id=<?= $row ["id"]; ?>" class = "btn btn-primary">Ubah</a> |
        <a href="hapus.php?id=<?= $row ["id"]; ?>" onclick="return confirm ('yakin ?')"; class = "btn btn-danger" >Hapus</a>
    </td>
    <td> <img src="img/<?= $row ["gambar"]; ?>" width="50" alt=""></td>
    <td><?= $row ["nis"]; ?></td>
    <td><?= $row ["nama"]; ?></td>
    <td><?= $row ["email"]; ?></td>
    <td><?= $row ["jurusan"]; ?></td>
    </tr>
    </thead>

    <?php $i++ ?>
    <?php endforeach; ?>
    </table>

    </tr>
</body>
</html>