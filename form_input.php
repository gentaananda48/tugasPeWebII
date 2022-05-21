<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h3>Tambah Mahasiswa</h3>
    <form action="proses_input.php" method="POST">
    <fieldset>

      <label for="nama">Nama Mahasiswa: </label>
      <input type="text" name="nama" placeholder="Masukan Nama" required><br> 
      <label for="nim">NIM: </label>
      <input type="text" name="nim" placeholder="Masukan NIM" required><br> 
      <label for="jenis_kelamin">Jenis Kelamin: </label>
      <select id="jenis_kelamin" name="jenis_kelamin">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select><br> 
      <label for="kelas">Kelas: </label>
      <input type="text" name="kelas" placeholder="Masukan Kelas" required><br> 
      <label for="program_studi">Program Studi: </label>
      <input type="text" name="program_studi" placeholder="Masukan Program Studi" required><br> 
      <label for="angkatan">Angkatan: </label>
      <input type="text" name="angkatan" placeholder="Masukan Angkatan" required><br> 
      
      <br><br>

    <input type="submit" value="Tambah" name="tambah"> <input type="reset" value="Batal" name="batal">
    <br> <br> <br>
    <input type="button" value="Kembali" onclick="history.back(-1)" />
    </fieldset>
</body>
</html>