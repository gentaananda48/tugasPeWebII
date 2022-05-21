<?php include("config.php");

    if(isset($_POST['simpan'])){
    try{
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $kelas = $_POST['kelas'];
            $program_studi = $_POST['program_studi'];
            $angkatan = $_POST['angkatan'];
            
            $sql= "UPDATE mahasiswa 
            SET nama='$nama', nim='$nim', jenis_kelamin='$jenis_kelamin', kelas='$kelas', program_studi='$program_studi', angkatan='$angkatan' 
            WHERE id=$id";

            $query = mysqli_query($db, $sql);

            if($query){
                header ('Location: index.php?status=sukses merubah data ' . $nama);
            }
        }catch(Exception $e){
            echo $e;
        }
    }
    else{
        die("Akses Rusak!");

    }

  ?>