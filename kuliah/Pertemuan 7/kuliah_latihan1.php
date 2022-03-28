<?php
//SUPERGLOBALS
//Variabel milik PHP yang bisa kita gunakan
// bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET["nama"] = "Rizky";
// $_GET["email"] = "rizky.213040097@mail.unpas.ac.id";

// var_dump($_GET);
// var_dump($_POST);
if(isset($_GET["nama"])) {
    $nama = $_GET["nama"];
}   else {
    $nama = 'Tidak Diketahui';
}
?>

<h1>Halo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=iki">Iki</a>
</li>
    <li>
        <a href="kuliah_latihan1.php?nama=uzan=uzan">uzan</a>
    </li>
<ul>