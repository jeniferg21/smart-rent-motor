<?php
    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "db_smartrent_motor";

    $conn = mysqli_connect($localhost, $username, $password, $database);


if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>