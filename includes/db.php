<?php

$servername = "remotemysql.com";
$username = "gOCoJvtV9v";
$password = "ZQrKOBvWR0";
$dbname = 'xkcd_comic_db';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}