<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname = "veggies";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}

session_start();
$sql= "SELECT * FROM users ";
$result = $conn->query($sql);
$sql = "UPDATE FROM users WHERE Email ='$myEmail'";

header('Location: adminlanding.php');
?>