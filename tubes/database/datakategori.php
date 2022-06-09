<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>document.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=width=devide-width, initial-scale=1">
        <title>ShopNow</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <!--header-->
        <header>
            <div class="container">
                <h1><a href="dashboard.php">ShopNow</a></h1>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="datakategori.php">Data Kategori</a></li>
                    <li><a href="dataproduk.php">Data produk</a></li>
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
            </div>
        </header>  
        
        <!--content -->
        <div class="section">
            <div class="container">
                <h3>Kategori</h3>
                <p><a href="tambahkategori.php">Tambah Data</p>
                <div class="box">
                    <table border="1" cellspacing="0" class="table">
                        <thead>
                            <tr>
                                <th width="50px">NO</th>
                                <th>Kategori</th>
                                <th width="150px    ">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $kategori = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
                            if(mysqli_num_rows($kategori) > 0){
                            while($row = mysqli_fetch_array($kategori)){
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['category_name']?></td>
                                <td>
                                    <a href="editkategori.php?id=<?php echo $row['category_id'] ?>">Edit</a> || <a href="proseshapus.php?idk=<?php echo $row ['category_id'] ?>" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                                </td>
                            </tr>
                            <?php }}else{ ?>
                                <tr>
                                    <td colspan="3">Data tidak ada</td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    

        <!--footer-->
        <footer>
            <div class="container">
                <small>©2022</small> 
            </div>
        </footer>
    </body>
</html>