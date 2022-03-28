<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu , $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
    <tittle>Latihan Function</tittle>
</head>
<body>
    <h1><?= salam("Pagi", "Rizky"); ?></h1>
</body>
</html>