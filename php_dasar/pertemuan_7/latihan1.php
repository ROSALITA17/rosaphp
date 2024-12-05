<?php
// $_GET
$mahasiswa =[
    [
        "nama" => "zahra",
        "nrp" => "082315621",
        "email" => "zahra1234@gmail.com",
        "jurusan" => "rekayasa pperangkat lunak",
        "gambar" => "zahra.img"
    ],
    [
        "nama" => "rosalita",
        "nrp" => "0271434267"
        "email" => "rosalita1234@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "rosalita.img"
    ]
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>GET</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <ul> <?php foreach( $mahasiswa as $mhs ): ?>
        <li>
            <a href="latihan2.php?nama=<?=$mhs["nama"];?>%nrp=<?= $mhs["nrp"];?>&email=<?= $mhs["email"];?>&jurusan=<?= $mhs["jurusan"];?>"><?= $mh
</li>
<?php endforeach; ?>

</ul>

</body>
</html>