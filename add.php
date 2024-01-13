<?php
$host = 'localhost';
$db   = 'cloudnts_Karoo';
$user = 'cloudnts_Karoo';
$pass = 'cloudnts_Karoo';
$charset = 'utf8mb4';

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$user_id = 5263923993;
$coin_to_add = 10101010;
$sql = "UPDATE users SET coin = coin + $coin_to_add WHERE from_id = $user_id";

if ($mysqli->query($sql) === TRUE) {
    echo "با موفقیت 20 تا coin به کاربر با شناسه $user_id اضافه شد";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
