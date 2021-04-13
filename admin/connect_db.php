<?php
$host = "localhost";
$user = "root";
$password = "";
$database="quanly_linhkien_db";
$con= mysqli_connect($host, $user, $password, $database);
//lệnh kiểm tra xem connect có thành công ko?
    if (mysqli_connect_errno()) {
    echo "Connection Fail: " . mysqli_connect_errno(); 
    exit;
} 
?>