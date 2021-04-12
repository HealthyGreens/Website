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
$sql = "UPDATE users SET FirstName = '$_POST[FirstName]' , LastName = '$_POST[LastName]' , Password = '$_POST[Password]' WHERE Email = '$_POST[Email]'";

if($conn->query($sql))
{
    header('location:adminlanding.php');
}
else
{
    echo "Not Updating";
}


exit();

?>