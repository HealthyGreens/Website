<html>
<body>


<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname = "veggies";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
die("Connection failed: " .$conn->connect_error);
}



$FirstName=$_POST["FirstName"];
$LastName=$_POST["LastName"];
$Email=$_POST["Email"];
$Username=$_POST["Username"];
$Password=$_POST["Password"];

$sql = "INSERT INTO users(FirstName, LastName, Email, Username, Password) VALUES ('$FirstName','$LastName','$Email','$Username','$Password')";

if($conn->query($sql) === TRUE) {
echo "Sign up successful!";
header("location:login.html");
}
else{
echo "Error: " .$sql. "<br>" .$conn->error;
}

$conn->close();
?>

</body>
</html>
