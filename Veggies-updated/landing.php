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
                <li class="ul_li_right"><a href="index.html"><button class="login_button login_position">Log Out</button></a></li>

    


            </ul>


        </nav>


<div class = "bigole">
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
date_default_timezone_set('America/New_York');
$ret = $_SESSION['row'];
$myusername = $ret["Username"] ;
$sql= "SELECT * FROM plants WHERE Username ='$myusername'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      
    
    ?>
    

    <?php

    $currdate = date("Y-m-d");

    $setdate = $row['Date'];

      if ($currdate==$setdate) {

        $setdate= date('d-m-Y', strtotime($setdate. ' + 90 days'));
        echo $setdate
        
        $some = "UPDATE plants SET Date = '2021-04-19' WHERE id = '$row[id]'";

        if($conn->query($some))
{

}
else
{ 
    echo "Not Updating";
}



        ?>

<table>

<tr>


<td><input type = "checkbox" name = "check"></td>

<td><?php echo $row['pName']?> </td>

<td><?php echo $row['pAmnt']?> </td>

<td><?php echo $row['Freq']?> </td>

<td><?php echo $row['Date']?> </td>

<td><?php echo $row['addit']?> </td>




</tr>

</table>

  
<?php

      }

      else {
        break;
      }
    echo "<br>";


    ?>
    
    
    
    <?php
    }
  } else {
    echo "There is no existing plant data";
  }

?>


</div>

<div class = "minfo">

<table>

<tr>


<td><input type = "checkbox" name = "check"></td>

<td><?php echo $row['pName']?> </td>

<td><?php echo $row['pAmnt']?> </td>

<td><?php echo $row['Freq']?> </td>

<td><?php echo $row['Date']?> </td>

<td><?php echo $row['addit']?> </td>



</tr>

</table>

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