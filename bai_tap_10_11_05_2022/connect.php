<?php
$username = "user_demo";
$password = "123456";
$server   = "localhost";
$dbname   = "demo";

$connect = new mysqli($server, $username, $password, $dbname);

if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}
?>