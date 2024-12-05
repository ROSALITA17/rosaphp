<?php
//$mahasiswa = [
// ["rosalita", "042272356", "rekayasa perangkat lunak", "rosalita05347821@gmail.com"],
// ["zahra", "052614835", "rekayasa perangkat lunak", "zahra@gmail.com]
//];

//array associative
//definisinya sama seperti array numerik, kecuali
//key-nya adalah string yang kita buat sendiri
$mahasiswa =[
    [
    "nama" => "rosalita,zahra",
    "nrp" => "042272356",
    "email" => "rosalita05347821@gmail.com,zahra@gmail.com",
    "jurusan" => "rekayasa perangkat lunak",
    "gambar" => "kucing.jpg.jpeg"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" contect="width=device-width, initial-scale=1.0">
        <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) :?>
        <ul>
            <li>
                <img src="img/kucing.jpg.jpeg">
                <li>nama:<? $mhs ["nama"] ;?></li>
                <li>NPR:<? $mhs ["nrp"] ;?></li>
                <li>jurusan:<? $mhs ["jurusan"] ;?></li>
                <li>email:<? $mhs ["email"] ;?></li>
    </ul>
    <?php endforeach; ?>

    </body>
    <html>