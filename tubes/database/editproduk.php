<?php
    session_start();
    include 'db.php';   
    if($_SESSION['status_login'] != true){
        echo '<script>document.location="login.php"</script>';
    }

    $produk = mysqli_query($conn, "SELECT * FROM product WHERE product_id = '".$_GET['id']."' ");
    if(mysqli_num_rows($produk  ) == 0){
        echo '<script>document.location="dataproduk.php"</script>';
    }
    $p = mysqli_fetch_object($produk);
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
        <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
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
                <h3>Edit Produk</h3>
                <div class="box">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <select class="input-control" name="kategori" required  >
                            <option value="">--Pilih Produk--</option>
                            <?php
                                $kategori = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
                                while($r = mysqli_fetch_array($kategori)){
                            ?>
                            <option value="<?php echo $r['category_id'] ?>" <?php echo ($r['category_id']== $p->category_id)? 'selected':''; ?>><?php echo $r['category_name']?></option>
                            <?php } ?>
                        </select>
                        <input type="text" name="nama" class="input-control" placeholder="Nama Produk" value= "<?php echo $p->product_name ?>" required>
                        
                        <img src="produk/<?php echo $p->product_image ?>" width="100px">
                        <input type="hidden" name="foto" value="<?php echo $p->product_image ?>">
                        <input type="text" name="harga" class="input-control" placeholder="Harga" value= "<?php echo $p->product_price ?>" required>
                        <input type="file" name="gambar" class="input-control">
                        <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"><?php echo $p->product_description ?></textarea><br>    
                        <select class="input-control" name="status">
                            <option value="">--PILIH--</option>
                            <option value="1" <?php echo ($p->product_status == 1)? 'selected':''; ?>>Aktif</option>
                            <option value="0" <?php echo ($p->product_status == 0)? 'selected':''; ?>>Tidak aktif</option>
                        </select>  
                        <input type="submit" name="submit" value="Submit" class="btn">
                    </form>
                    <?php
                        if(isset($_POST['submit'])){

                            // tampungan Inputan form
                            $kategori = $_POST['kategori'];
                            $nama = $_POST['nama'];
                            $harga = $_POST['harga'];
                            $deskripsi = $_POST['deskripsi'];
                            $status = $_POST['status'];
                            $foto = $_POST['foto'];

                            // tampungan Data gambar
                            $filename = $_FILES['gambar']['name'];
                            $tmp_name = $_FILES['gambar']['tmp_name'];

                            $type1 = explode('.', $filename);
                            $type2 = $type1[1];

                            $newname = 'produk'.time().'.'.$type2;

                            // Tampungan data diziinkan
                            $tipe_diizinkan = array('jpg', 'jpeg', 'png');

                            // jika ganti gambar
                            if($filename != ''){

                                // validasi file
                                if(!in_array($type2, $tipe_diizinkan)){
                                    echo '<script>alert("Gagal Mengupload")</script>';
                                }else{
                                    unlink('./produk/'.$foto);
                                    move_uploaded_file($tmp_name, './produk/'.$newname);
                                    $namagambar = $newname;

                                }

                            }else{
                                // jika tidak diganti
                                $namagambar= $foto;

                            }
                            
                            // query untuk mengupdate data
                            $update = mysqli_query($conn, "UPDATE product SET 
                                                    category_id = '".$kategori."', 
                                                    product_name = '".$nama."',
                                                    product_price = '".$harga."',
                                                    product_description = '".$deskripsi."',
                                                    product_image = '".$namagambar."', 
                                                    product_status = '".$status."'
                                                    WHERE product_id = '".$p->product_id."' ");
                            if($update){
                                echo '<script>alert("Berhasil mengubah data")</script>';
                                echo '<script>document.location="dataproduk.php"</script>';
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
        <script>
            CKEDITOR.replace( 'deskripsi' );
        </script>
    </body>
</html>