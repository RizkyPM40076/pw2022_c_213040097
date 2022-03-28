<?php 
// Pertemuan 5 - Array
// Array adalah variabel yang bisa menampung / menyimpan banyak nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";


$bulan = "januari";
$bulan2 = "febuari";

$mahasiswa1 = "sandhika";

// membuat ARRAY

$hari = ["senin", "selasa", "rabu"]; //cara baru
$bulan = array("januari", "febuari", "maret"); //cara lama
$myArr = [10, "sandhika", true];


// mencetak ARRAY
// mencetak 1 elemen di dalam array
echo $hari[0];
echo "<br>";
echo $bulan[2];

echo "<hr>";

// mencetak dengan var_dump() atau print_r()
// khusus untuk debugging
var_dump ($hari);
print_r ($bulan);
echo "<br>";


echo "<hr>";


// mencetak semua isi array memggunakan looping
// for
// echo $hari[0];
// echo "<br>";
// echo $hari[1];
// echo "<br>";
// echo $hari[2];
// echo "<br>";
// echo $hari[3];
// echo "<br>";

for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo"<br>";
}

echo "<hr>";

// foreach 
foreach ($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<hr>";

foreach ($bulan as $key => $value) {
    echo "key: $key - Value; $value";
    echo "<br>";

}

echo "<hr>";


// memanimulasi elemen
// menambah elemen baru di ahir array
$hari[] = "kamis";
$hari[] = "jum'at";
print_r($hari);

?>