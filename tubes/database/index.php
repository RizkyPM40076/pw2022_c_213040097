<?php
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM admin WHERE admin_id =  1");
    $a = mysqli_fetch_object($kontak);
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
                <h1><a href="index  .php">ShopNow</a></h1>
                <ul>
                    <li><a href="produk.php">Produk</a></li>
                </ul>
            </div>
        </header>  

        <!-- search -->
        <div class="search">
            <div class="container">
                <form action="produk.php">
                    <input type="text" name="search" placeholder="Cari Produk">
                    <input type="submit" name="cari" value="Cari Produk">
                </form>
            </div>
        </div>
        <!--kategori-->
        <div class="section">
            <div class="container">
                <h3>Kategori</h3>
                <div class="box">
                    <?php
                        $kategori = mysqli_query($conn, "SELECT * FROM category ORDER BY category_id DESC");
                        if(mysqli_num_rows($kategori) > 0){
                            while($k = mysqli_fetch_array($kategori)){
                    ?>
                        <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                            <div class="col-5">
                             <img src="img/iconkategori.png" width="50px" style="margin-bottom:5px;">
                                <p><?php echo $k['category_name'] ?></  p>
                            </div>
                            </a>
                    <?php }} else{ ?>
                        <p>kategori tidak ada</p>
                    <?php }?>
                </div>
            </div>
        </div>

        <!--New Product-->
        <div class="section">
            <div class="container">
                <h3>Produk Terbaru<h3>
                <div class="box">
                    <?php
                        $produk = mysqli_query($conn, "SELECT * FROM product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
                        if(mysqli_num_rows($produk) >0 ){
                            while($p = mysqli_fetch_array($produk)){
                    ?>
                        <a href="detailproduk.php?id=<?php echo $p['product_id'] ?>">
                        <div class="col-4">
                            <img src="produk/<?php echo $p['product_image'] ?>">
                            <p class="nama"><?php echo substr($p['product_name'], 0, 30)?></p>
                            <p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
                        </div>
                    <?php }}else{ ?>
                        <p>Produk Kosong</p>
                    <?php } ?>
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
                <small>Copyright 2020 ShopNow</small>
            </div>
        </div>

        <script src="js/script.js"></script>
    </body>
</html>