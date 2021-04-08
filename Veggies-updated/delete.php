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
$ret = $_SESSION['row'];
$myusername = $ret['Username'];
$sql = "DELETE FROM users WHERE Username ='$myusername'";

$result = $conn->query($sql);

header('Location: adminlanding.php');
exit();

?>