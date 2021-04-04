<html>
<body>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname = "veggies";
$myusername = $_POST["Username"];
$mypassword= $_POST["Password"];
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM users WHERE Username = '$myusername' and
Password = '$mypassword'";
$result = $conn->query($sql);
if ($result->num_rows === 1) {
 session_start();
 $_SESSION['Username'] = $myusername;
 $row = $result->fetch_assoc();
unset($_SESSION['row']);



if (!isset($_SESSION['row'])) {
 $_SESSION['row'] = $row;
 header("location: landing.php");
}
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>

