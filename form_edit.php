<?php include("config.php");

    if(!isset($_GET['id'])){
        header('Location: list_produk.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM produk WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $produk = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query)<1){
        die ("Data tidak ditemukan!");
    }
    
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit Produk</title>
    </head>
    <body>
        <h3>Edit Produk</h3>

        <form action="proses_edit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id" value="<?php echo $produk['id'] ?>"/>
      <label for="nama_produk">Nama Produk: </label>
      <input type="text" name="nama_produk" placeholder="Masukan nama produk" value="<?php echo $produk ['nama_produk'] ?>"><br>  
      <label for="keterangan">Keterangan: </label>
      <textarea name="keterangan" placeholder="Masukan keterangan"><?php echo $produk ['keterangan'] ?></textarea><br>
      <label for="harga">Harga: </label>
      <input type="number" name="harga" placeholder="Masukan harga" value="<?php echo $produk ['harga'] ?>"><br>
      <label for="jumlah">Jumlah: </label>
      <input type="number" name="jumlah" placeholder="Masukan jumlah" value="<?php echo $produk ['jumlah'] ?>"><br><br>

    <input type="submit" value="Simpan" name="simpan"> <input type="reset" value="Batal" name="batal">
    <br><br><br>
    <input type="button" value="Kembali" onclick="history.back(-1)" />
    </fieldset>
    </form>
    </body>
    </html>