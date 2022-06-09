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
                <h3>Tambahkan Produk</h3>
                <div class="box">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <select class="input-control" name="kategori" required  >
                            <option value="">--Pilih Produk--</option>
                            <?php
                                $kategori = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
                                while($r = mysqli_fetch_array($kategori)){
                            ?>
                            <option value="<?php echo $r['category_id']?>"><?php echo $r['category_name']?></option>
                            <?php } ?>
                        </select>
                        <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
                        <input type="text" name="harga" class="input-control" placeholder="Harga" required>
                        <input type="file" name="gambar" class="input-control" required>
                        <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea><br>    
                        <select class="input-control" name="status">
                            <option value="">--PILIH--</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak aktif</option>
                        </select>  
                        <input type="submit" name="submit" value="Submit" class="btn">
                    </form>
                    <?php
                        if(isset($_POST['submit'])){

                            // print_r($_FILES['gambar']);
                            // menanmpung input dari form
                            $kategori = $_POST['kategori'];
                            $nama = $_POST['nama'];
                            $harga = $_POST['harga'];
                            $deskripsi = $_POST['deskripsi'];
                            $status = $_POST['status'];
                            // menampung upload an data file
                            $filename = $_FILES['gambar']['name'];
                            $tmp_name = $_FILES['gambar']['tmp_name'];

                            $type1 = explode('.', $filename);
                            $type2 = $type1[1];

                            $newname = 'produk'.time().'.'.$type2;

                            // menampung data format yang diizinkan
                            $tipe_diizinkan = array('jpg', 'jpeg', 'png');

                            // validasi format file
                                // jika tidak di izinkan
                            if(!in_array($type2, $tipe_diizinkan)){
                                echo '<script>alert("Gagal Mengupload")</script>';
                            }else{
                                // jika format file sesuai dengan array tipe di izinkan
                                // proses upload file sekaligus insert ke database
                                move_uploaded_file($tmp_name, './produk/'.$newname);

                                $insert = mysqli_query($conn, "INSERT INTO product VALUES (
                                            null, 
                                            '".$kategori."',
                                            '".$nama."',
                                            '".$harga."',
                                            '".$deskripsi."',
                                            '".$newname."',
                                            '".$status."',
                                            null
                                                ) ");

                                if($insert){
                                    echo '<script>alert("Berhasil Menyimpan")</script>';
                                    echo '<script>document.location="dataproduk.php"</script>';
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
        <script>
            CKEDITOR.replace( 'deskripsi' );
        </script>
    </body>
</html>