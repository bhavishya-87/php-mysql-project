<?php
$user = 'root';
$password = '';
$db = 'goals';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link,
   $host,
   $user,
   $password,
   $db,
   $port
);

if (!$success) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection successful!";
?>
