<?php include("config.php");

    if(!isset($_GET['id'])){
        header('Location: index.php');
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $mahasiswa = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query)<1){
        die ("Data tidak ditemukan!");
    }
    
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit Mahasiswa</title>
    </head>
    <body>
        <h3>Edit Mahasiswa</h3>

        <form action="proses_edit.php" method="POST">
    <fieldset>
        <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>"/>      
      <label for="nama">Nama Mahasiswa: </label>
      <input type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $mahasiswa['nama'] ?>"><br> 
      <label for="nim">NIM: </label>
      <input type="text" name="nim" placeholder="Masukan NIM" value="<?php echo $mahasiswa['nim'] ?>"><br> 
      <label for="jenis_kelamin">Jenis Kelamin: </label>
      <select id="jenis_kelamin" name="jenis_kelamin">
        <option value="Laki-laki" <?php echo ($mahasiswa['jenis_kelamin'] == 'Laki-laki')?"selected":"" ?>>Laki-laki</option>
        <option value="Perempuan" <?php echo ($mahasiswa['jenis_kelamin'] == 'Perempuan')?"selected":"" ?>>Perempuan</option>
      </select><br> 
      <label for="kelas">Kelas: </label>
      <input type="text" name="kelas" placeholder="Masukan Kelas" value="<?php echo $mahasiswa['kelas'] ?>"><br> 
      <label for="program_studi">Program Studi: </label>
      <input type="text" name="program_studi" placeholder="Masukan Program Studi" value="<?php echo $mahasiswa['program_studi'] ?>"><br> 
      <label for="angkatan">Angkatan: </label>
      <input type="text" name="angkatan" placeholder="Masukan Angkatan" value="<?php echo $mahasiswa['angkatan'] ?>"><br> <br><br>

    <input type="submit" value="Simpan" name="simpan"> <input type="reset" value="Batal" name="batal">
    <br><br><br>
    <input type="button" value="Kembali" onclick="history.back(-1)" />
    </fieldset>
    </form>
    </body>
    </html>