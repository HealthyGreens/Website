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

                      <a href="index.html"><button class="login_button login_position">Log Out</button></a>
            </ul>


        </nav>

        <table class = "second-table">
    <tr>

        <th class = "th-table">Username</th>
        <th class = "th-table">Plant Name</th>
        <th class = "th-table">Watering Amount</th>
        <th class = "th-table">Watering Frequency</th>
        <th class = "th-table">Comments</th>

</tr>
    </table>


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
$sql= "SELECT * FROM plants ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


?>


    <form action="adminplantupdate.php" method="post">
        <table>


            <tr>

            <td><input class = "hidden" type = "hidden" name = "id" placeholder = "id" value = <?php echo $row['id']; ?>></td>
                
            <td><?php echo $row['Username']; ?></td>

            <td><input type = "text" name = "pName" placeholder = "Plant Name" value = <?php echo $row['pName']; ?>></td>

            <td><input type = "number" name = "pAmnt" placeholder = "Amount" value = <?php echo $row['pAmnt']; ?>></td>

            <td><input type = "number" name = "Freq" placeholder = "Freq" value = <?php echo $row['Freq']; ?>></td>

            <td><?php echo $row['addit']; ?></td>

            <td><input class = "update" type = "submit" value= "Update"></td>

                <?php
                echo "<td><a href=admindeleteplant.php?id=".$row['id']." class=btn btn-danger>Delete</a></td>";
                ?>

                <td>
 

                    </form>

                </td>

            </tr>

    

    </table>

<?php
  } 
}else {
    echo "There is no existing plants";
  }

?>



</div>

        <!--This section is for the footer and some random links we choose-->
        <footer>


<!--This is the table section of the footer-->


   <br><br><br>
   <table border="0">
    <tr><th>Documentation</th><th>Partners</th><th><a href = "faq.html">FAQ</a></th></tr>
    <tr><td>Source code</td><td>Ian</td><td></td></tr>
    <tr><td>Images</td><td>Kaden</td><td></td></tr>
    <tr><td></td></td><td>Jason</td><td></td></tr>
    <tr><td></td></td><td>Geno</td><td></td></tr>
   </table>
   

   <!--This is the sign up so far-->


   <nav class="footer_nav">
       <ul>
        <li class="ul_li_left" style="margin-left: 200px;">Healthy Greens</li>
        
       </ul>
   </nav>
</footer>




    </body>

</html>