<?php
   // Date
   // Untuk menampilkan tanggal dengan format tertentu
   echo date("l, d-m-y");

   echo <"hr">;
   // time
   // UNIX Timestamp / EPOCH time
   // detik yang sudah berlalu sejak 1 januari 1970
   //echo time()
   echo date("d M Y", time()+60*60*24*100);


   echo "<hr>";
   // mktime
   // membuat sendiri detik
   // mktime (0,0,0,0,0,0)
   // jam, menit, detik, bulan, tanggal, tahun
   echo date("l", mktime(0,0,0,8,25,1985));
   
   
   echo "<hr>";
   
   //strtotime
   echo date("l", strtotime("25 aug 1985"));
   // String
    // strlen()
    // strcmp()
    // explode()
    // htmlspacialchars()

    // Utility
    // var_dump()
    // isset()
    // empty()
    // die()
    // sleep()

?>