
<html>
    <head>


        <!--This is for the header and the picture on the tab up top-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <link rel="shortcut icon" href="littlelogo.png" type="image/x-icon">
        <title>Admin Landing</title>
        <link href="adminlanding.css" rel = "stylesheet" type = "text/css">

    </head>


    <body class="body_two">


        <nav>


            <ul class="ul_li">

                      <li class = "ul li"><a href="adminlanding.php">Users<a></li>

                      <li class = "ul li"><a href="adminplants.php">Plants<a></li>

            </ul>


        </nav>




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
?>

<?php
session_start();

$ret = $_SESSION['row'];
$myusername = $ret["Username"] ;
$sql= "SELECT * FROM users ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {





?>

    <form action="adminuserupdate.php" method="post">
        <table>

            <tr>
                
                <td><input type = "text" name = "FirstName" placeholder = "First Name" value = <?php echo $row['FirstName']; ?>></td>

                <td><input type = "text" name = "LastName" placeholder = "Last Name" value = <?php echo $row['LastName']; ?>></td>

                <td><input type = "text" name = "Email" placeholder = "Email" value = <?php echo $row['Email']; ?>></td>

                <td><?php echo $row['Username']; ?></td>

                <td><input type = "text" name = "Password" placeholder = "Password" value = <?php echo $row['Password']; ?>></td>

                <td><input type = "submit" value= "Update"></td>

                <?php
                echo "<td><a href=deleteuser.php?id=".$row['Email']." class=btn btn-danger>Delete</a></td>";
                ?>

                <td>
 

                    </form>

                </td>

            </tr>

    

    </table>

<?php
  } 
}else {
    echo "There is no existing users";
  }

?>



</div>

        <footer>


            <!--This is the table section of the footer-->
    
    
               <br><br><br>
               <table border="0">
                <tr><th>Documentation</th><th>Partners</th><th><a href = "faq.html">FAQ</a></th></tr>
                <tr><td>Source code</td><td>Ian</td><td>stuff</td></tr>
                <tr><td>Images</td><td>Kaden</td><td>stuff</td></tr>
                <tr><td>Uses</td><td>Jason</td><td>stuff</td></tr>
                <tr><td>Additional</td><td>Geno</td><td>stuff</td></tr>
               </table>
               <h1 class="h1_footer">Healthy Greens</h1>
               
           </footer>




    </body>

</html>