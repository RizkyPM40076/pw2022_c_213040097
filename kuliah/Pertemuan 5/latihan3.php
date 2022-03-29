<?php
$mahasiswa = [
    ["Rizky Priya Mandiri", "213040097", "Teknik Informatika", "rizky.213040097@mail.unpas.ac.id"],
    ["Hafiz", "213040083", [1,2,3], "Hafiz.213040083@mail.unpas.ac.id", "Teknik Informatika"],
    ["Rizky", "213040096", "Teknik Mesin", "rizky.213040096@mail.unpas.ac.id"],

];

?>
<!DOCTYPE html>
<html>
<head>
  <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP : <?= $mhs[1]; ?></li>
    <li>Jurusan : <?= $mhs[2]; ?></li>
    <li>E-mail : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


<!-- Sebelum array multi dimensi -->
<!-- cara 1 (manual)-->
<ul>
    <li>Rizky Priya Mandiri</li>
    <li>213040097</li>
    <li>Teknik Informatika</li>
    <li>rizky.213040097@mail.unpas.ac.id</li>
</ul>

<!-- cara 2 -->
<ul>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li><?= $mhs; ?></li>
    <?php endforeach; ?>
</ul>

<!-- cara 3 -->
<ul>
    <li><?= $mahasiswa[0]; ?></li>
    <li><?= $mahasiswa[1]; ?></li>
    <li><?= $mahasiswa[2]; ?></li>
    <li><?= $mahasiswa[3]; ?></li>
</ul>

</body>
</html>