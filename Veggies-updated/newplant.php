<html>
    <head>


        <!--This is for the header and the picture on the tab up top-->
        <link rel="shortcut icon" href="littlelogo.png" type="image/x-icon">
        <title>Home</title>
        <link href="newplant.css" rel = "stylesheet" type = "text/css">

    </head>


    <body>


        <nav>


            <ul class="ul_li">

                <div class="dropdown">
                    <button class="dropbtn">New Plant</button>
                    <div class="dropdown-content">
                        <a href="landing.php">Plants</a>
                      <a href="editplant.php">Edit Plant</a>
                    </div>
                  </div>
                <li class="ul_li_a"><a href="blog.html">Blog</a></li>

    


            </ul>


        </nav>

                        <!--This section is going to be the signup form-->

                        <form class="box" action="newplant.php" method="post" >
                            <h1 class="h1_signup">Healthy Greens | New Plant</h1>
                            
                            <input type="text" name = "pName" placeholder="Plant Name">

                            <input type="number" name = "pAmnt" placeholder="Water Amount (oz)">
                            
                            <input type="number" name = "Freq" placeholder = "Watering Freq">

                            <input type="textarea" name = "addit" placeholder= "Comments" >

                            <input type="submit" value="Enter" id="boxbutton">
        
    
                        </form>
                        
                        


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


           <?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname = "veggies";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error) {
die("Connection failed: " .$conn->connect_error);
}

session_start();
$ret = $_SESSION['row'];

$Username=$ret["Username"];
$pName=$_POST["pName"];
$pAmnt=$_POST["pAmnt"];
$Freq=$_POST["Freq"];
$addit=$_POST["addit"];


$sql = "INSERT INTO plants( Username ,pName, pAmnt, Freq, addit) VALUES ('$Username','$pName','$pAmnt','$Freq','$addit')";

if($conn->query($sql) === TRUE) {
echo "New plant entered!";
header("location:newplant.php");
}
else{
echo "Error: " .$sql. "<br>" .$conn->error;
}

$conn->close();
?>



    </body>

</html>