<?php include("config.php");

    if(isset($_POST['simpan'])){

        $id = $_POST['id'];
        $nama_produk = $_POST['nama_produk'];
        $keterangan = $_POST['keterangan'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];
        
        $sql= "UPDATE produk SET nama_produk='$nama_produk', keterangan='$keterangan', harga='$harga', jumlah='$jumlah' WHERE id=$id";
        $query = mysqli_query($db, $sql);

        if($query){
            header ('Location: list_produk.php');
        }
        else{
            die("Gagal menyimpan perubahan");
        }

    }
    else{
        die("Akses Rusak!");

    }

    ?>