<?php
// Array Associative
// Array yang index-nya ber-asosiasi / berpasangan dengan angka

$mahasiswa = [
    ["Rizky Priya Mandiri", "213040097", "rizky.213040097@mail.unpas.ac.id", "Teknik Informatika"],
    ["Muhammad Angga Kusuma", "213040074", "anggi.213040074@mail.unpas.ac.id", "Teknik Informatika"],
    ["Muhammad Rizki Haikal", "213040082", "rizki.l.213040082@mail.unpas.ac.id", "Teknik Informatika"]
];

// var_dump($mahasiswa[1][3]);
?>

<?php foreach($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo $mhs[0]; ?></li>
    <li>NPM: <?php echo $mhs[1]; ?></li>
    <li>Email: <?php echo $mhs[2]; ?></li>
    <li>Jurusan: <?php echo $mhs[3]; ?></li>
</ul>
<?php } ?>