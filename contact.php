<?php
    include "koneksi.php";
    // Ambil data dari form
    $firsname = $_POST['fname'];
    $lastname= $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Masukkan data ke dalam tabel database
    $query_sql = "INSERT INTO tbl_contact (first_name, last_name, email, message)
    VALUES ('$firsname', '$lastname', '$email', '$message')";

    if ($conn->query($query_sql)) {
        header ("location: index.html");
    } else {
        echo "Pesan Gagal dibuat" .$query_sql .$conn->error;
    }
?>