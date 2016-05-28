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
    <link rel = "stylesheet" href= "index.css">
    </head>
    
    
    

    
    
<body>
      
  <h1>
<center>
<table height="70px">
    <tr>
         <td class=""><a href="Index.php" style="color:white;text-decoration:none;">RSGC Lunch Routes</a></td>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <td><input type="text" name="search" class="search" style="width:300px; font-family: 'Times New Roman', Times, serif;
        font-size:25px;"></td>
        <td><a href ="SearchBar.php"><button style="width:5em;font-size:15pt;background-color:#065da5;">Search</button></a></td>
        </form>
        <td><a href="Logout.php"><button class="Button1" style="font-size:15pt;background-color:#7FBCEF:">Sign-Out</button></a></td>
        <td style="font-size:20pt">| <?php echo $_SESSION['fname']; ?></td>
    </tr>
</table>
</center>
</h1>    
     <div class="pageCenter" style="margin-top:2em;">
         <br><br><br>
         <center>
                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <table style='margin-top: 5px; 
            text-align: center;
            padding-top: 2px;
            padding-bottom: 2px;
            width:auto;
            color: #000000;'>
                    <tr style='padding:7em;'>
                        <td style = "width: 50%;"><h3>Select a category:</h3></td>
                        <td style = "width: 25%;"><select name = "category" class="Button1" style="font-size:15pt;background-color:#065da5;">
                          <option name = "Bar Food">Bar Food</option><br>
                          <option name = "Breakfast">Breakfast</option><br>
                          <option name = "Burger">Burger</option><br>
                          <option name = "Chicken">Chicken</option><br>
                          <option name = "Crepes">Crepes</option><br>
                          <option name = "Ice Cream">Ice Cream</option><br>
                          <option name = "Japanese">Japanese</option><br>
                          <option name = "Mexican">Mexican</option><br>
                          <option name = "Pizza">Pizza</option><br>
                          <option name = "Poutine">Poutine</option><br>
                          <option name = "Sandwich">Sandwiches</option><br>
                          <option name = "Schnitzel">Schnitzel</option><br>
                          <option name = "Shawarma">Shawarma</option><br>
                      </select></td>
                      
                      <td style = "width: 25%; float: center;"><input type="submit" name="Search" class ="button1"></td>
                      </tr>
                     </table>
                     <br><br><br>
<?php

$provided_category = htmlspecialchars($_POST['category']);
// Connect to database
    $host = "209.236.71.62";
    $user = "mrgogor3_RRUSR";
    $pass = "fries278\mango";
    $db = "mrgogor3_RR";
    $port = 3306;
    
    $query = "SELECT id, name, address, timeToWalk FROM restaurant WHERE category = ('" . $provided_category . "');";
    
    $result = mysqli_query($connection, $query);
     
     
     echo "<table style='margin-top: 5px; 
            text-align: center;
            padding-top: 2px;
            padding-bottom: 2px;
            width:auto;
            color: #000000;'>";
    while($row = mysqli_fetch_assoc($result)) {
       
        echo "<tr style='padding:7em;'>";
        echo "<th style= 'width: 50%;
                '><a style='color:blue;text-decoration:none;' href= 'profile.php?id=",$row["id"],"'>",  $row["name"],"</a></th>";
                
        echo "<td style= 'width: 25%;
                text-align: center;
                '>", $row["address"], "</td>";
        echo "<td style= 'width: 25%;
                '>", $row["timeToWalk"], "</td>";
        echo "</tr>";
    }
    echo "</table>";

?>
        </center>
     </div>
     <br><br><br>
     <br><br><br>
     <br><br><br>
     <br><br><br>
 <img src="Images/Footer.png" style="margin-bottom:-20px;margin-top:-400px;margin-left:-8px;width:101.23%;vertical-align:bottom;z-index:-1;position:relative;">
</body>

</html>