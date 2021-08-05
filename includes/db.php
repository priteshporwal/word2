<?php

$servername = "remotemysql.com";
$username = "gOCoJvtV9v";
$password = "ZQrKOBvWR0";
$dbname = 'gOCoJvtV9v';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}