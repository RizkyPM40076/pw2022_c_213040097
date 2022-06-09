<?php
    error_reporting(0); 
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM admin WHERE admin_id =  1");
    $a = mysqli_fetch_object($kontak);

    $produk = mysqli_query($conn, "SELECT* FROM product WHERE product_id = '".$_GET['id']."' ");
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
    </head>
    <body>
        <!--header-->
        <header>
            <div class="container">
                <h1><a href="produk.php">ShopNow</a></h1>
                <ul>
                    <li><a href="produk.php">Produk</a></li>
                </ul>
            </div>
        </header>  

        <!-- search -->
        <div class="search">
            <div class="container">
                <form action="produk.php">
                    <input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
                    <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                    <input type="submit" name="cari" value="Cari Produk">
                </form>
            </div>
        </div>
        <!--Detail-->
        <div class="section">
            <div class="container">
                <h3>Detail Produk</h3>
                <div class="box">
                    <div class="col-2">
                        <img src="produk/<?php echo $p->product_image?>" width="100%    ">
                    </div>
                    <div class="col-2">
                        <h3><?php echo $p->product_name     ?></h3>
                        <h4>Rp, <?php echo number_format($p->product_price) ?></h4>
                        <p>Deskripsi :<br>
                            <?php echo $p->product_description ?>
                        </p>
                        <p><a href="https://www.instagram.com">Contac Me</a></p>
                    </div>
                </div>
            </div>
        </div>        

        <!--footer-->
        <div class="footer">
            <div class="container">
                <h4>Alamat</h4>
                <p><?php echo $a->admin_address ?></p>

                <h4>Emailt</h4>
                <p><?php echo $a->admin_email ?></p> 

                <h4>Telpon</h4>
                <p><?php echo $a->admin_telp ?></p> 
                <small>© 2020 ShopNow</small>
            </div>
        </div>
    </body>
</html>