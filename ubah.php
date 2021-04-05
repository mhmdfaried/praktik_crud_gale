<?php
require 'functions.php';

//ambil data di URL
$id = $_GET["id"];
//query data siswa berdasar id
$sw = query("SELECT * FROM datasiswa WHERE id = $id")[0];



//cek apakah tombol sudah ditekan atau belum
if ( isset($_POST ["submit"])){
    
    //cek data berhasil atau tidak
    if (ubah($_POST) > 0){
        echo "
            <script>
                alert('data berhasil diubah !');
                document.location.href = 'index.php';
            </script>
        ";
    }else {
        echo "
        <script>
            alert('data gagal diubah !');
            document.location.href = 'index.php';
        </script>
        ";
    }
    
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Ubah data siswa</title>
</head>
<body>
    <h1>Ubah data siswa</h1>

    <form action="" method="post">
    <input type="hidden" name = "id" value ="<?= $sw ["id"]; ?>">
        <ul>
        <li>
            <label for="nis"> NIS : </label>
            <input type="text" name= "nis" id="nis" required value = "<?= $sw ["nis"] ?> ">
            </li>
            <li>
            <label for="nama"> Nama : </label>
            <input type="text" name= "nama" id="nama" value = "<?= $sw ["nama"] ?> ">
            </li>
            <li>
            <label for="email"> Email : </label>
            <input type="text" name= "email" id="email" value = "<?= $sw ["email"] ?> ">
            </li>
            <li>
            <label for="jurusan"> Jurusan : </label>
            <input type="text" name= "jurusan" id="jurusan" value = "<?= $sw ["jurusan"] ?> ">
            </li>
            <li>
            <label for="gambar"> Gambar : </label>
            <input type="text" name= "gambar" id="gambar" value = "<?= $sw ["gambar"] ?>">
            </li>
            <li>
                <button type=="submit" name= "submit">Ubah Data!</button>
            </li>
        </ul>

    
    
    </form>
    
</body>
</html>