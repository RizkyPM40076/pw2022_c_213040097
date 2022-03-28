<?php 
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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  <div class="container">
      <h1>Daftar Mahasiswa</h1>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
        <tbody>
            <?php $no = 1; foreach ($mahasiswa as $mhs) :?>
            <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td>
                    <img src="img/<?php echo $mhs["gambar"];?>" height="100" width="100"
                    class="rounded-circle">
                </td>
                <td><?php echo $mhs ["nama"];?></td>
                <td>
                    <a href="" class="btn badge bg-warning">edit</a>
                    <a href="" class="btn badge bg-danger">delete</a>
                    <a href="kuliah_latihan3.php?nama=<?= $mhs["nama"];?>" class="btn badge bg-info">detail</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>

  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>