<?php
    include "koneksi.php";
    //Ambil data dari Form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Masukkan data ke dalam tabel database
    $query_sql = "INSERT INTO tbl_users (user_name, email, password)
                  VALUES ('$username', '$email', '$password')";

    if ($conn->query($query_sql)) {
        header ("location: login.html");
    }else {
        echo "Data Gagal dibuat" .$query_sql .$conn->error;
    }
?>