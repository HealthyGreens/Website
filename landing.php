<html>
    <head>


        <!--This is for the header and the picture on the tab up top-->
        <link rel="shortcut icon" href="littlelogo.png" type="image/x-icon">
        <title>Home</title>
        <link href="landing.css" rel = "stylesheet" type = "text/css">

    </head>


    <body class="body_two">


        <nav>


            <ul class="ul_li">

                <div class="dropdown">
                    <button class="dropbtn">Plants</button>
                    <div class="dropdown-content">
                      <a href="newplant.php">New Plant</a>
                      <a href="editplant.php">Edit Plant</a>
                    </div>
                  </div>
                <li class="ul_li_a"><a href="blog.html">Blog</a></li>

    


            </ul>


        </nav>



<div class = "info">


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
$sql= "SELECT * FROM plants WHERE Username ='$myusername'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
    
    ?>
    
    
    <table>

    <tr>

    <td><input type = "checkbox" name = "radio"></td>

    <td><?php echo $row['pName']?> </td>

    <td><?php echo $row['pAmnt']?> </td>

    <td><?php echo $row['Freq']?> </td>

    <td><?php echo $row['addit']?> </td>

    </tr>

    </table>
    
    
    
    <?php
    }
  } else {
    echo "There is no existing plant data";
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