<?php

$dbServername = '151.106.117.51';
$dbUsername = 'u812120069_lgucalabanga';
$dbPasswrod = 'E@syas1234';

$dbName = 'u812120069_lgucalabanga';

//  MYSQL CONNECTION
$conn = mysqli_connect($dbServername, $dbUsername, $dbPasswrod, $dbName);

// CHECK CONNECTION
if ($conn->connect_error) {
    die("Connection Failed". $conn->connect_error);
}