<?php
$username = "root"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "ban hang";      // Khai báo database

// Kết nối database 
$connect = mysqli_connect($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());
    exit();
}
?>