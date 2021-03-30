<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Produk</title>
</head>
<body>
    <h3>Tambah Produk</h3>
    <form action="proses_input.php" method="POST">
    <fieldset>
      <label for="nama_produk">Nama Produk: </label>
      <input type="text" name="nama_produk" placeholder="Masukan nama produk" required><br>  
      <label for="keterangan">Keterangan: </label>
      <textarea name="keterangan" placeholder="Masukan keterangan" required></textarea><br>
      <label for="harga">Harga: </label>
      <input type="number" name="harga" placeholder="Masukan harga" required><br>
      <label for="jumlah">Jumlah: </label>
      <input type="number" name="jumlah" placeholder="Masukan jumlah" required><br><br>

    <input type="submit" value="Tambah" name="tambah"> <input type="reset" value="Batal" name="batal">
    <br> <br> <br>
    <input type="button" value="Kembali" onclick="history.back(-1)" />
    </fieldset>
</body>
</html>