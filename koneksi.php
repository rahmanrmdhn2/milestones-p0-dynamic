<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbusers";

    // Buat koneksi 
    $conn = new mysqli($servername,$username,$password,$dbname);

    // Cek koneksi 
    if($conn -> connect_error){
        die("koneksi gagal:" .$conn->connect_error);
    }
    echo "koneksi berhasil";
?>