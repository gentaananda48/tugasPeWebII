<?php
    try{
        $server = "localhost";
        $user = "root";
        $password = "";
        $nama_database = "universitas";

        $db = mysqli_connect($server, $user, $password, $nama_database);

        if( !$db ){
            die("Gagal terhubung dengan database: " . mysqli_connect_error());
        }
    }catch(Exception $e){
        echo $e;
    }
?>