<!DOCTYPE html>
<html>
    <head>
        <tittle>POST</title>
    </head>
    <body>
        <?php if( isset($_POST["submit"]) ) : ?>
            <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
        <?php endif; ?>
        
        <form action="latihan4.php" method="post">
            masukan nama :
            <input type="text" name="nama">
            <br>
            <button type="submit">Kirim!</button>
        </form>
    </body>
</html>