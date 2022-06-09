<?php
    session_start();
    include 'db.php';   
    if($_SESSION['status_login'] != true){
        echo '<script>document.location="login.php"</script>';
    }

    $query = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = '".$_SESSION['id']."'");
    $d = mysqli_fetch_object($query);
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
                <h3>Profil</h3>
                <div class="box">
                    <form action="" method="POST">
                        <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
                        <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>" required>
                        <input type="text" name="hp" placeholder="No Hp" class="input-control" value="<?php echo $d->admin_telp ?>" required>
                        <input type="email" name="email" placeholder="email" class="input-control" value="<?php echo $d->admin_email ?>" required>
                        <input type="text" name="alamat" placeholder="alamat" class="input-control"value="<?php echo $d->admin_address ?>" required>
                        <input type="submit" name="submit" value="Ubah Profil" class="btn">
                    </form>
                    <?php
                        if(isset($_POST['submit'])){

                            $nama = ucwords($_POST['nama']);
                            $user = $_POST['user'];
                            $hp = $_POST['hp'];
                            $email = $_POST['email'];
                            $alamat = ucwords($_POST['alamat'])         ;

                            $update = mysqli_query($conn, "UPDATE admin SET 
                                            admin_name = '".$nama."', 
                                            username = '".$user."',
                                            admin_telp = '".$hp."',
                                            admin_email = '".$email."',
                                            admin_address = '".$alamat."'
                                            WHERE admin_id = '".$d->admin_id."' ");
                            if($update){
                                echo '<script>alert("Ubah Data Berhasil!")</script>';
                                echo '<script>document.location="profil.php"</script>';
                            }else{
                                echo 'gagal '.mysqli_error($conn);
                            }
                        }
                    ?>
                </div>

                <h3>Ubah Password</h3>
                <div class="box">
                    <form action="" method="POST">
                        <input type="password" name="pass1" placeholder="New Password" class="input-control" value="<?php echo $d->admin_name ?>" required>
                        <input type="password" name="pass2" placeholder="Confirm" class="input-control" value="<?php echo $d->username ?>" required>
                        <input type="submit" name="change_password" value="Change Password" class="btn">
                    </form>
                    <?php
                        if(isset($_POST['change_password'])){

                            $pass1 = $_POST['pass1'];
                            $pass2 = $_POST['pass2'];

                            if($pass2 !=$pass1){
                                echo '<script>alert("Password Tidak Sesuai")</script>';
                            }else{
                                
                                $update_password= mysqli_query($conn, "UPDATE admin SET 
                                            password = '".MD5($pass1)."'
                                            WHERE admin_id = '".$d->admin_id."' ");
                                if($update_password){
                                    echo '<script>alert("Berhasil Mengubah!")</script>';
                                    echo '<script>document.location="profil.php"</script>';
                                }else{
                                    echo 'gagal '.mysqli_error($conn);
                                }
                                
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