<?php
    // Check whether session created (is user logged in?)
    // If not, re-direct to main index page.
    session_start();
    if(!isset($_SESSION['fname']))
    {
        // Not logged in, re-direct to the login page
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'index.php';
        header("Location: https://lunches-official-rsgc-kelly-c.c9users.io/lunches/login.php");
        exit;
    }
    // Show list of courses on home page 
    // Connect to database
    $host = "209.236.71.62";
    $user = "mrgogor3_RRUSR";
    $pass = "fries278\mango";
    $db = "mrgogor3_RR";
    $port = 3306;
    
    // Establish the connection
    // (note username and password here is the *database* username and password, not for a user of this website)
    $connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());
    
    // And now perform simple query – make sure it's working
    $query = "SELECT fname, lname , pw FROM user;";
    
    $result = mysqli_query($connection, $query);
    
?>
<?php

    $host = "209.236.71.62";
    $user = "mrgogor3_RRUSR";
    $pass = "fries278\mango";
    $db = "mrgogor3_RR";
    $port = 3306;
    
    // Establish the connection
    // (note username and password here is the *database* username and password, not for a user of this website)
$connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());

if(isset($_GET['id'])){
    $query = "SELECT name, timeToWalk, address, description, imageName, menu FROM restaurant WHERE id = " . $_GET['id'] . ";";
} else {
    $query = "SELECT name, timeToWalk, address, description, imageName, menu FROM restaurant WHERE id = 1;";
}
//  get result
$result = mysqli_query($connection, $query);
// print_r($result);
// die();
// fetch a specific row
$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
    <head>
        <title>RSGC Lunches</title>
        
            <script>
            function $(id){
	        return document.getElementById(id);}
	        
            function thanks(){
                alert("Thank you for submitting a rating, it has been added to the database.");
                $("submitButton").innerHTML = "<p></p>"
                $("5").innerHTML = "<p></p>"
            }
            
            function radio(x){
                var x = this.x;
                parseFloat(this.x);
                
                if(x-1 != 0){
                    $(x).innerHTML = x+"<input type='radio' name='"+x+ "' id='"+x+ "' checked />"
                }
            }
            </script>
            
    <link rel = "stylesheet" href= "index.css">
    
    </head>
 
<h1>
<center>
<table height="70px">
    <tr>
        <td class=""><a href="Index.php" style="color:white;text-decoration:none;">RSGC Lunch Routes</a></td>
        <td><button class="Button1" style="width:5em;font-size:15pt;background-color:#065da5;">Search</button></td>
        <td><input type="text" value="" class="search" id="RestaurantSearch" style="height:2em;width:40em;"></td>
        <td><button class="Button1" style="font-size:15pt;background-color:#7FBCEF:">Sign-Out</button></td>
        <td style="font-size:24pt">| <?php echo $_SESSION['fname']; ?></td>
    </tr>
</table>
</center>
</h1>    
    <div class="pageCenter">
      
      <table style="width:100%;margin-top:3em;">
          <tr>
              <td style="width:30%;height:50%;border-radius:10px;">
              <img class="rProfileImage" style="border-radius:10px;" src="Profile_Images/<?php echo $row['imageName']; ?>"></td>
              <td style="background-color:white;padding:3em;position:relative;z-index:1;border-radius:10px;" rowspan="3">
            <h2>Description</h2>
            
            <p>
               <?php echo $row['description']; ?> 
               <br>
                <br>
               <a href="<?php echo $row['menu']; ?>" value="Menu">
                   <b>Menu</b></a>
            </p>
        
            </td>
        <tr style="background-color:white;">
        </style>
        </style>
            <td style="background-color:#065da5;color:white;font-size:2em;">
                <center>
                <b id="rName"> <?php echo $row['name']; ?></b>  
                </center>
            </td>
        </tr>
          </tr>
              <td style="background-color:#2E91E3;color:white;padding:1.5em;">
                  <b>Rating</b>
                 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                     1<input type="radio" name="1" id="1" onclick = "radio(1)"/>
                     2<input type="radio" name="2" id="2" onclick = "radio(2)"/>
                     3<input type="radio" name="3" id="3" onclick = "radio(3)"/>
                     4<input type="radio" name="4" id="4" onclick = "radio(4)"/>
                     5<input type="radio" name="5" id="5" onclick = "radio(5)"/>
                     <input type="submit" name="submit" value="submit" onclick = "thanks()" id="submitButton"/>
                 </form>

                <p id=""><?php echo $row['address']; ?></p>
                <b id=""><?php echo $row['timeToWalk']; ?></b>
              </td>
          <tr>
          </tr>
      </table>
      
    <div>

    
    <p><a href = "mailto:ckelly@rsgc.on.ca?Subject=Hello" style="text-decoration:none;color:black;">Contact Us</a></p>
    
    <!--closing tag for momba... header that wraps the entire page-->
    </div> 
        </div>
    <img src="Images/Footer.png" style="margin-bottom:-20px;margin-top:-400px;margin-left:-8px;width:101.23%;vertical-align:bottom;z-index:-1;position:relative;">
    </body>
</html>