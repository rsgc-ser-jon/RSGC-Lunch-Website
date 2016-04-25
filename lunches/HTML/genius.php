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
        <td><button class="Button1" style="font-size:15pt;background-color:#7FBCEF:">Sign-Out</button></td>
        <td style="font-size:24pt">| <?php echo $_SESSION['fname']; ?></td>
    </tr>
</table>
</center>
</h1>    
<div class="pageCenter">
    <h2 class = "gSearch" style="margin-bottom:-15px">Genius Search</h2>
    <br>
    <p><em>Select your preferences and we will find restaurants that match your 
    needs</em></p>
   
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <table style="border:1px solid black;border-radius:5px 5px 5px 5px;width:100%;">
        <tr>
            <th>
                Type: <select name = "category" class="Button1" style="font-size:15pt;background-color:#065da5;">
                        <option name= "nP">No Preference</option>
                        <option name= "Burger">Burger</option>
                        <option name= "Bar Food">Bar Food</option>
                        <option name= "Poutine">Poutine</option>
                        <option name= "Pizza">Pizza</option>
                        <option name= "Mexican">Mexican</option>
                        <option name= "Crepes">Crepes</option>
                        <option name= "Schnitzel">Schnitzel</option>
                        <option name= "Japanese">Japanese</option>
                        <option name= "Shwarama">Schwarma</option>
                        <option name= "Ice Cream">Ice Cream</option>
                        <option name= "Breakfast">Breakfast</option>
                    </select> 
            </th>
            <th>
                Time: <select name= "TTW"class="Button1" style="font-size:15pt;background-color:#065da5;">
                        <option name= "nP">No Preference</option>
                        <option name= "5">5</option>
                        <option name= "10">10</option>
                        <option name= "15">15</option>
                    </select>
            </th>
        </tr>
    </table>
    <br>
    <br>
    <center><input type="submit" class="Button1" style="font-size:15pt;width:5em" name = "Search"></center>
    </form>
    
    <?php 
    
    $provided_category = htmlspecialchars($_POST['category']);
    $provided_TTW = htmlspecialchars($_POST['TTW']);
    // Connect to database
    $host = "209.236.71.62";
    $user = "mrgogor3_RRUSR";
    $pass = "fries278\mango";
    $db = "mrgogor3_RR";
    $port = 3306;
    
    // Establish the connection
    // (note username and password here is the *database* username and password, not for a user of this website)
    $connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());
    
    if($provided_category  == "No Preference" && $provided_TTW == "No Preference"){
       $query = "SELECT name, address, timeToWalk FROM restaurant"; 
    }
    
    else if($provided_TTW == "No Preference" && $provided_category != "No Preference"){
        $query = "SELECT name, address, timeToWalk FROM restaurant WHERE category = ('" . $provided_category . "');";
    } else if($provided_category == "No Preference" && $provided_TTW != "No Preference"){
        $query = "SELECT name, address, timeToWalk FROM restaurant WHERE timeToWalk = ('" . $provided_TTW . " min walk');";
    } else {
      $query = "SELECT name, address, timeToWalk FROM restaurant WHERE category = ('" . $provided_category . "') AND timeToWalk =('" . $provided_TTW . " min walk');";
    }

    
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
                '><a style='color:black;text-decoration:none;' href= 'profile.php?id=",$num,"'>",  $row["name"],"</a></th>";
                
        echo "<td style= 'width: 25%;
                text-align: center;
                '>", $row["address"], "</td>";
        echo "<td style= 'width: 25%;
                '>", $row["timeToWalk"], "</td>";
        echo "</tr>";
        $num +=1;
    }
    echo "</table>";
    
    
    
    
    
    
    ?>
    
    <br><br><br><br><br><br><br><br>
    <p><a href = "mailto:ckelly@rsgc.on.ca?Subject=Hello" style="text-decoration:none;color:black;">Contact Us</a></p>
    
    <!--closing tag for momba... header that wraps the entire page-->
    </div> 
    </body>
</html>