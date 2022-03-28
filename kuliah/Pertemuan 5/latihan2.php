<?php 
// array multidimensi
// array di dalam array

$mahasiswa = [
["Rizky", "213040097", "rizky.213040097@mail.unpas.ac.id", "Teknik Informatika"],
["Hafiz", "213040083", [1,2,3], "Hafiz.213040083@mail.unpas.ac.id", "Teknik Informatika"]
];
echo $mahasiswa[1][2][1]; // 2



?>