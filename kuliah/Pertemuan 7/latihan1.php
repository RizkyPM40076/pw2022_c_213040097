<?php
//GET
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
        <title>GET></title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>
        <ul>
        <?php foreach ( $mahasiswa as $mhs ) :?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
        </ul>    
    </body>
</html>
