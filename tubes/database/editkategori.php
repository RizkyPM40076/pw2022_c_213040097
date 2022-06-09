<?php
    session_start();
    include 'db.php';   
    if($_SESSION['status_login'] != true){
        echo '<script>document.location="login.php"</script>';
    }
    $kategori = mysqli_query($conn, "SELECT * FROM category WHERE category_id = '".$_GET['id']."' ");
    if(mysqli_num_rows($kategori) == 0){
        echo '<script>document.location="datakategori.php"</script>';
    }
    $k = mysqli_fetch_object($kategori);
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
                    <li><a href="dashboard.php">Data Kategori</a></li>
                    <li><a href="dashboard.php">Data produk</a></li>
                    <li><a href="logout.php">Keluar</a></li>
                </ul>
            </div>
        </header>  
        
        <!--content -->
        <div class="section">
            <div class="container">
                <h3>EDIT DATA</h3>
                <div class="box">
                    <form action="" method="POST">
                        <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value="<?php echo $k->category_name ?>" required>
                        <input type="submit" name="submit" value="Submit" class="btn">
                    </form>
                    <?php
                        if(isset($_POST['submit'])){

                            $nama = ucwords($_POST['nama']);
                            
                            $update = mysqli_query($conn, "UPDATE category SET
                                                    category_name= '".$nama."'
                                                    WHERE category_id='".$k->category_id."' ");

                            if($update){
                                echo '<script>alert("Berhasil")</script>';
                                echo '<script>document.location="datakategori.php"  </script>';
                            }else{
                                echo 'gagal '.mysqli_error($conn);
                            }
                        }
                    ?>
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