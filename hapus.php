<?php include("config.php");

    if(isset($_GET['id'])){
        try{
            $id = $_GET['id'];

            $sql = "DELETE FROM mahasiswa WHERE id=$id";
            $query = mysqli_query($db, $sql);

                if($query){
                    header('Location: index.php');
                }
                else{
                    die("Gagal menghapus!");
                }
            }catch(Exception $e){
                echo $e;
            }
    }

    else{
        die("Akses Rusak!");
    }
?>