<!DOCTYPE html>
<html>
    <head>
        <title>All Restaurants</title>
        <link rel = "stylesheet" href= "index.css">
    </head>
    
    <body>
        <!--Header for every page-->
        <h1>
        <center>
        <table height="70px">
            <tr>
                <td class="">RSGC Lunch Routes</td>
                <td><button class="Button1" style="width:5em;font-size:15pt;background-color:#065da5;">Search</button></td>
                <td><input type="text" value="" class="search" id="RestaurantSearch" style="height:2em;width:40em;"></td>
                <td><a href="Logout.php"><button class="Button1" style="font-size:15pt;background-color:#7FBCEF:">Sign-Out</button></a></td>
                <td style="font-size:20pt">| <?php echo $_SESSION['fname']; ?></td>
            </tr>
        </table>
        </center>
        </h1>  
        
        <div class="pageCenter">
        <center>   
        <h3>All Restaurants</h3>
        </center>
        <br> <br>
        <table style="width: 100%;
                    text-align: center;">
            <tr>
                <th>Restaurant</th>
                <th>Location</th>
                <th>Description</th>
            </tr>
        </table>
<?php
    //instantiate the required variables to connect to the db
    $host = "209.236.71.62";
    $user = "mrgogor3_RRUSR";
    $pass = "fries278\mango";
    $db = "mrgogor3_RR";
    $port = 3306;
    
    
    // Establish the connection
    // (note username and password here is the *database* username and password, not for a user of this website)
    $connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());
    
    // Run the query
    if (isset($_GET['id'])) {
        $query = "SELECT name, address, description FROM restaurant;";    
        $cid = $_GET['id'];
    } else {
        $query = "SELECT name, address, description FROM restaurant;";
        $cid = 1;
    }
    
    $result = mysqli_query($connection, $query);

    // Get the row from the database
    
    echo "<table style='margin-top: 5px; 
            text-align: center;
            padding: 5px; 
            padding-top: 2px;
            padding-bottom: 2px;
            border: 2px solid black;    
            width:auto;
            color: #000000;'>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<th style= 'width: 30%;
                border-style: solid;'>", $row["name"],"</td>";
        echo "<td style= 'width: 30%;
                border-style: solid;'>", $row["address"], "</td>";
        echo "<td style= 'width: 40%;
                border-style: solid;'>", $row["description"], "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>


       
        </div>
    </body>
</html>