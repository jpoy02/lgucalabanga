<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPasswrod = '1234';

$dbName = 'calabanga';

//  MYSQL CONNECTION
$conn = mysqli_connect($dbServername, $dbUsername, $dbPasswrod, $dbName);

// CHECK CONNECTION
if ($conn->connect_error) {
    die("Connection Failed". $conn->connect_error);
}
