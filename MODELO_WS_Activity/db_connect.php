<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'burger_shop';

$conn = mysqli_connect($host, $username, $password);

if (!$conn) {
    die('Database connection failed: ' . mysqli_connect_error());
}

$createDb = "CREATE DATABASE IF NOT EXISTS `$database`";
if (!mysqli_query($conn, $createDb)) {
    die('Could not create database: ' . mysqli_error($conn));
}

if (!mysqli_select_db($conn, $database)) {
    die('Could not select database: ' . mysqli_error($conn));
}

$tableSql = "
    CREATE TABLE IF NOT EXISTS burger (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        price DECIMAL(10,2) NOT NULL
    )
";

if (!mysqli_query($conn, $tableSql)) {
    die('Could not create table: ' . mysqli_error($conn));
}

$checkRows = mysqli_query($conn, "SELECT COUNT(*) AS total FROM burger");
$rowCount = mysqli_fetch_assoc($checkRows);

if ($rowCount['total'] == 0) {
    $insertSql = "
        INSERT INTO burger (name, price) VALUES
        ('cheese burger', 120.00),
        ('beef burger', 150.00),
        ('chicken burger', 130.00)
    ";

    mysqli_query($conn, $insertSql);
}
?>