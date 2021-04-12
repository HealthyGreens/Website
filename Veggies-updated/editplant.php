<!DOCTYPE html>
<html>
    <head>


        <!--This is for the header and the picture on the tab up top-->
        <link rel="shortcut icon" href="littlelogo.png" type="image/x-icon">
        <title>Home</title>
        <link href="editplant.css" rel = "stylesheet" type = "text/css">

    </head>


    <body>


        <nav>


            <ul class="ul_li">

                <div class="dropdown">
                    <button class="dropbtn">Edit Plant</button>
                    <div class="dropdown-content">
                      <a href="landing.php">Plants</a>
                      <a href="newplant.php">New Plant</a>
                    </div>
                  </div>
                <li class="ul_li_a"><a href="blog.html">Blog</a></li>

    


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
$myusername = $ret["Username"];
$sql= "SELECT * FROM plants WHERE Username ='$myusername'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {


?>

    <form action="updateplant.php" method="post">
        <table>

            <tr>
                
            <td><input type="text" name = "pName" placeholder="Plant Name" value = <?php echo $row['pName']; ?>></td>

            <td><input type="number" name = "pAmnt" placeholder="Water Amount (oz)" value = <?php echo $row['pAmnt']; ?>></td>

            <td><input type="number" name = "Freq" placeholder = "Watering Freq" value = <?php echo $row['Freq']; ?>></td>

            <td><input type="textarea" name = "addit" placeholder= "Comments" value = <?php echo $row['addit']; ?>></td>

            <td><input type="hidden" name = "id" placeholder= "ID" value = <?php echo $row['id']; ?>></td>

            <td><input type = "submit" value= "Update"></td>

            <?php
            echo "<td><a href=deleteplant.php?id=".$row['id']." class=btn btn-danger>Delete</a></td>";
            ?>


            </tr>

    
    </table>

    </form>

<?php
  } 
}else {
    echo "There is no existing users";
  }

?>

                            


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