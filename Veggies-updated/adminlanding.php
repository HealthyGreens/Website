<html>
    <head>


        <!--This is for the header and the picture on the tab up top-->
        <link rel="shortcut icon" href="littlelogo.png" type="image/x-icon">
        <title>Admin Landing</title>
        <link href="adminlanding.css" rel = "stylesheet" type = "text/css">

    </head>


    <body class="body_two">


        <nav>


            <ul class="ul_li">

                      <li class = "ul li">User List</li>

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

        <table>

            <tr>

                <td><?php echo $row['FirstName']; ?></td>

                <td><?php echo $row['LastName']; ?></td>

                <td><?php echo $row['Email']; ?></td>

                <td><?php echo $row['Username']; ?></td>

                <td><?php echo $row['Password']; ?></td>

                <td><a href="edit.php?id=<?php echo $data['Username']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $data['Username']; ?>">Delete</a></td>

  <!--              <td>

                    <form action="delete.php" method="post">

                    <input type="text" name="delete_email" value="<?php echo $row['Email'];?>">

                    <button type='submit' name="delete_btn">Delete</button>

                    </form>

                </td>

            </tr>
    -->

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