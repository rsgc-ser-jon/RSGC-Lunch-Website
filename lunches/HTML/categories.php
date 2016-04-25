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
    
    // Iterate over the result set
    $output = "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<li>";
        $output .= "<a href=\"./course/?cid=" . urlencode($row['id']) . "\">" . $row['code'] . ": " . $row['name'] . "</a>";
        $output .= "</li>";
    }
    $output .= "</ul>";
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
    
    $selectedCategory = htmlspecialchars($_POST['category']);
    // And now perform simple query – make sure it's working
    $query = "SELECT category, FROM restaurant WHERE category=('" . $selectedCategory . "');";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>RSGC Lunches</title>
        
        
            <script> 
        
            </script>
    <link rel = "stylesheet" href= "index.css">
    </head>
    
    
    

    
    
<body>
      
  <h1>
  <center>
  <table height="70px">
    <tr>
        <td class=""><a href="Index.php" style="color:white;text-decoration:none;">RSGC Lunch Routes</a></td>
        <td><button class="Button1" style="width:5em;font-size:15pt;background-color:#065da5;">Search</button></td>
        <td><input type="text" value="" class="search" id="RestaurantSearch" style="height:2em;width:40em;"></td>
        <td><a href="Logout.php"><button class="Button1" style="font-size:15pt;background-color:#7FBCEF:">Sign-Out</button></a></td>
        <td style="font-size:20pt">| <?php echo $_SESSION['fname']; ?></td>
    </tr>
  </table>
  </center>
  </h1>  
     <div class="pageCenter" style="margin-top:2em;">
        <center>
          <table>
              <tr>
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                      
                    <input class="Button1" type="submit" name="Bar Food"  value="Bar Food"/>
                    <input class="Button1" type="submit" name="Breakfast"  value="Breakfast"/>
                    <input class="Button1" type="submit" name="Burger"  value="Burger"/>
                    <input class="Button1" type="submit" name="Chicken"  value="Chicken"/>
                    <input class="Button1" type="submit" name="Crepes"  value="Crepes"/>
                    <input class="Button1" type="submit" name="Ice Cream"  value="Ice Cream"/>
                    <input class="Button1" type="submit" name="Japanese"  value="Japanese"/>
                    </form>
              </tr>
        </table>
        <table>
              <tr>
                  <form>
                    <input class="Button1" type="submit" name="Mexican"  value="Mexican"/>
                    <input class="Button1" type="submit" name="Pizza"  value="Pizza"/>
                    <input class="Button1" type="submit" name="Poutine"  value="Poutine"/>
                    <input class="Button1" type="submit" name="Sandwich"  value="Sandwich"/>
                    <input class="Button1" type="submit" name="Schnitzel"  value="Schnitzel"/>
                    <input class="Button1" type="submit" name="Shawarma"  value="Shawarma"/>
                 </form>
              </tr>
          </table>
        </center>
     </div>
 <img src="Images/Footer.png" style="margin-bottom:-20px;margin-top:-400px;margin-left:-8px;width:101.23%;vertical-align:bottom;z-index:-1;position:relative;">
</body>

</html>