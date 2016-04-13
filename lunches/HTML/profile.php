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
    $query = "SELECT name, walkingdistance, timeToWalk, address, description, imageName, menu FROM restaurant WHERE id = " . $_GET['id'] . ";";
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
        
            </script>
            
    <link rel = "stylesheet" href= "index.css">
    
    </head>
 
<h1>
<center>
<table height="70px">
    <tr>
        <td class="">RSGC Lunch Routes</td>
        <td><button class="Button1" style="width:5em;font-size:15pt;background-color:#065da5;">Search</button></td>
        <td><input type="text" value="" class="search" id="RestaurantSearch" style="height:2em;width:40em;"></td>
        <td><button class="Button1" style="font-size:15pt;background-color:#7FBCEF:">Sign-Out</button></td>
        <td style="font-size:24pt">| Billy Bob</td>
    </tr>
</table>
</center>
</h1>    
    <div class="pageCenter">
      
      <table style="width:100%;margin-top:3em;">
          <tr>
              <td style="width:30%;height:50%;border-radius:10px;"><img class="rProfileImage" style="border-radius:10px;" src="Images/aziz.png"></td>
              <td style="background-color:white;padding:3em;position:relative;z-index:1;border-radius:10px;" rowspan="3">
            
            <h2>Description</h2>
            
            <p>
                
            </p>
        <?php echo $row['description']; ?>
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
                     1<input type="radio" name="star"/>
                     2<input type="radio" name="star"/>
                     3<input type="radio" name="star"/>
                     4<input type="radio" name="star"/>
                     5<input type="radio" name="star"/>
                     <input type="button" name="star" value="submit"/>
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