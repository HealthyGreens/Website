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
$sql = "DELETE FROM plants WHERE id = '$_GET[id]'";

if($conn->query($sql))
{
    header('Location: adminplants.php');
}
else
{ 
    echo "Not Deleted";
}





exit();

?>