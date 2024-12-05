<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa \ query data mahasiswa
$result mysqli_query($conn, "SELECT * FROM mahasiswa" mahasiswa);

// ambil data (fect) mahasiswa dari objek result
// mengembalikan array numerik 
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduamya
// mysqli_fetch_object()

// while( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs);
// }


?>
<!DOCTYPE html>
<html>
</heaad>
      <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

     <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>Gamar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
   </tr>

   <?php while( $row = mysqli_fetch_assoc($result) ) : ?> 
   </tr>
        <td>1</td>
        <td>
            <a href="">ubah</a> 
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?php"></td>
        <td>0874318964</td>
        <td>Rosalita</td>
        <td>rosalita@gmail.com</td>
        <td>rpl</td>
   </tr>
   <?php endwhile; ?>

   </table>
</html>