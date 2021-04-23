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
$sql = "UPDATE plants SET pName = '$_POST[pName]' , pAmnt = '$_POST[pAmnt]' , Freq = '$_POST[Freq]' WHERE id = '$_POST[id]'";

if($conn->query($sql))
{
    header('location:adminplants.php');
}
else
{
    echo "Not Updating";
}


exit();

?>