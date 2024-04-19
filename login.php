<?php
    include "koneksi.php";
    
    $email = $_POST["email"];
    $password = $_POST["password"];

    $quey_sql = "SELECT * FROM tbl_users
                WHERE email = '$email' AND password = '$password' ";

    if ($conn->query($quey_sql))  {
        header ("location: index.html");
    }else {
        echo "Login Gagal" .$conn->error;
    }
?>