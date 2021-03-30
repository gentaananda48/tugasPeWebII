<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Produk</title>
</head>

<body>
    <header>
        <h3>List Produk</h3>
    </header>

   
        
  

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);

        while($produk = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$produk['nama_produk']."</td>";
            echo "<td>".$produk['keterangan']."</td>";
            echo "<td>".$produk['harga']."</td>";
            echo "<td>".$produk['jumlah']."</td>";

            echo "<td>";
            echo "<a href='form_edit.php?id=".$produk['id']."'>Edit</a>";
            echo " ... ";
            echo "<a href='hapus.php?id=".$produk['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Input produk baru berhasil!";
            } else {
                echo "Input produk gagal!";
            }
        ?>
         </p>
        <?php endif; ?> 
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <button onclick="window.location.href='form_input.php'">Tambah Produk</button>
    <input type="button" value="Kembali" onclick="history.back(-1)" />

    </body>
</html>