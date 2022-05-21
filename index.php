<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        table {
            width: 100%;
            }
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body>
    <!-- Content -->
    <header>
        <h3>Daftar Mahasiswa</h3>
    </header>
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
    <!-- Table Mahasiswa -->
    <table border="1">
    <button onclick="window.location.href='form_input.php'">Tambah Mahasiswa</button>
    <thead>
        <tr>
            <!-- Header Table -->
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Program Studi</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <!-- Query in PHP -->
        <?php
        $sql = "SELECT * FROM mahasiswa";
        $query = mysqli_query($db, $sql);

        while($mahasiswa = mysqli_fetch_array($query)){
            echo "<tr>";

            // Data Mahasiswa
            echo "<td>".$mahasiswa['nama']."</td>";
            echo "<td>".$mahasiswa['nim']."</td>";
            echo "<td>".$mahasiswa['jenis_kelamin']."</td>";
            echo "<td>".$mahasiswa['kelas']."</td>";
            echo "<td>".$mahasiswa['program_studi']."</td>";
            echo "<td>".$mahasiswa['angkatan']."</td>";

            echo "<td>";
            echo "<a href='form_edit.php?id=".$mahasiswa['id']."'>Edit</a>";
            echo " ... ";
            echo "<a href='hapus.php?id=".$mahasiswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <!-- End of Table -->
    
    <p>Total: <?php echo mysqli_num_rows($query) ?> Data Mahasiswa</p> 
    

    <!-- End of Content -->
    </body>
</html>