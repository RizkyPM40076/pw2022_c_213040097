<?php 
    $mahasiswa = [
        [
            "nama" => "Rizky Priya Mandiri", 
            "npm" => "213040097", 
            "email" => "rizky.213040097@mail.unpas.ac.id", 
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Muhammad Angga Kusuma", 
            "npm" => "213040074", 
            "email" => "angga.213040074@mail.unpas.ac.id", 
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Muhammad Rizki Haikal", 
            "npm" => "213040082",  
            "jurusan" => "Teknik Informatika",
            "email" => "rizki.213040082@mail.unpas.ac.id"
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
        <th scope="col">NPM</th>
        <th scope="col">Email</th>
        <th scope="col">Jurusan</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <img src="img/logo.png" height="58"
                    class="rounded-circle">
                </td>
                <td>Rizky Priya Mandiri</td>
                <td>213040097</td>
                <td>rizky.2130400974@mail.unpas.ac.id</td>
                <td>Teknik Informatika</td>
                <td>
                    <a href="" class="btn badge bg-warning">edit</a>
                    <a href="" class="btn badge bg-danger">delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <img src="img/gambar logo2.jpg" height="58"
                    class="rounded-circle">
                </td>
                <td>Muhammad Angga Kusuma</td>
                <td>213040074</td>
                <td>angga.213040074@mail.unpas.ac.id</td>
                <td>Teknik Informatika</td>
                <td>
                    <a href="" class="btn badge bg-warning">edit</a>
                    <a href="" class="btn badge bg-danger">delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>
                    <img src="img/gambar logo3.jpg" height="58"
                    class="rounded-circle">
                </td>
                <td>Muhammad Rizki Haikal</td>
                <td>213040082</td>
                <td>rizki.213040082@mail.unpas.ac.id</td>
                <td>Teknik Informatika</td>
                <td>
                    <a href="" class="btn badge bg-warning">edit</a>
                    <a href="" class="btn badge bg-danger">delete</a>
                </td>
            </tr>
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