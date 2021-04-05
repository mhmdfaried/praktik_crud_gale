<?php
//konek database
$conn = mysqli_connect("localhost","root","","smkpesat");


function query($query){
    global $conn;
    $result = mysqli_query ($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}


function tambah ($data){
    global $conn;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // uploud gambar
    $gambar = uploud();
    if( !$gambat ) {
        return false;

    }

    
    $query = "INSERT INTO datasiswa
                VALUES
        ('','$nis','$nama','$email','$jurusan','$gambar')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uplou() {
    $namafile = $_FILES['gambar']['nama'];
    $ukuranfile = $_FILES['gambar']
}


function hapus ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM datasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}


function ubah ($data){
    global $conn;

    $id = $data["id"];
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    
    $query = "UPDATE datasiswa SET
            nis = '$nis',
            nama = '$nama',
            email = '$email',
            jurusan = '$jurusan',
            gambar = '$gambar'
        WHERE id = $id
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari ($keyword) {
    $query = "SELECT * FROM datasiswa
                 WHERE
            nama LIKE '%$keyword%' OR
            nis LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
    return query($query);
    
}

?>

