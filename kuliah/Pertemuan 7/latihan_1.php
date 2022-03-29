<?php
// $_GET
$mahasiswa = [
    [
        "nama" => "Rizky Priya Mandiri", 
        "npm" => "213040097", 
        "email" => "rizky.213040097@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "RizkyPM.jpg"
    ],
    [
        "nama" => "Muhammad Angga Kusuma", 
        "npm" => "213040074", 
        "email" => "angga.213040074@mail.unpas.ac.id", 
        "jurusan" => "Teknik Informatika",
        "gambar" => "SD.jpg"
    ],
    [
        "nama" => "Muhammad Rizki Haikal", 
        "npm" => "213040082",  
        "jurusan" => "Teknik Informatika",
        "email" => "rizki.213040082@mail.unpas.ac.id",
        "gambar" => "iki.jpeg"
    ]
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>GET</title>
    </head>
    <body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
            <li><?= $mhs["nama"]; ?></li>
            <li><?= $mhs["nrp"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
