<?php
$servername = "192.168.4.4";
$username = "2205551027";
$password = "2205551027";
$dbname = "db_2205551027";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
