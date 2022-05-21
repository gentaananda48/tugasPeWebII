<?php include("config.php");

if(isset($_POST['tambah'])){
    try{
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $kelas = $_POST['kelas'];
            $program_studi = $_POST['program_studi'];
            $angkatan = $_POST['angkatan'];

        $sql = "INSERT INTO mahasiswa (nama, nim, jenis_kelamin, kelas, program_studi, angkatan) 
        VALUE ('$nama', '$nim', '$jenis_kelamin', '$kelas', '$program_studi', '$angkatan')";
        $query = mysqli_query($db, $sql);

            if( $query ){
                header('Location: index.php?status=sukses');
            }
            else{
                header('Location: index.php?status=gagal');
            }
        }catch(Exception $e){
            echo $e;
        }
}

else{
    die("Akses rusak!");
}
?>