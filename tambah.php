<?php
require 'functions.php';

//cek apakah tombol sudah ditekan atau belum
if ( isset($_POST ["submit"])){
    
    var_dump($_POST); die;

    //cek data berhasil atau tidak
    if (tambah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil ditambahkan !');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('data gagal ditambahkan !');
            document.location.href = 'index.php';
        </script>
        ";
    }
    
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Tambah data siswa</title>
</head>
<body>
    <a href="index.php" class = "btn btn-primary"> KEMBALI </a>
    
    <h1>Tambah data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <form action="" method="post">
        <ul>
            <li>
                <label for="nis"> NIS : </label>
                <input type="text" name= "nis" id="nis" placeholder="NIS ANDA" required>
            </li>
            <br>
            <li>
                <label for="nama"> Nama : </label>
                <input type="text" name= "nama" id="nama" placeholder="NAMA ANDA" >
            </li>
            <br>
            <li>
                <label for="email"> Email : </label>
                <input type="text" name= "email" id="email" placeholder="EMAIL ANDA">
            </li>
            <br>
            <li>
                <label for="jurusan"> Jurusan : </label>
                <input type="text" name= "jurusan" id="jurusan" placeholder="TKJ / RPL / MM">
            </li>
            <br>
            <li>
                <label for="gambar"> Gambar : </label>
                <input type="file" name= "gambar" id="gambar" placeholder="GAMBAR ANDA">
            </li>
            <br>
            <li>
                    <button type="submit" name= "submit">Tambah Data!</button>
            </li>
        </ul>

    
    
    </form>
    
</body>
</html>