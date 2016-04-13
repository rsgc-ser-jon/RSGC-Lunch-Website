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
            function $(id){
	        return document.getElementById(id);}
            
            // DECLARE VARIABLES
            
            var Image = new Array("Images/GeorgesBurgerIndex.gif", "Images/heroBurgerIndex.gif", "Images/SomkesPIndex.gif")
            
            var Image_Length = Image.length -1;
            var Image_Num = 0;
            //var slideShow = document.getElementsByName(sShow).src
            
            function change_image(num){
                Image_Num = Image_Num + num;
                
                if(Image_Num > Image_Length){
                    Image_Num = 0;
                    }
                
                if(Image_Num < 0){
                    Image_Num = Image_Length;
                }
                
                $("sShow").src = Image[Image_Num];
                
                return false
            }
        
            
            </script>
    <link rel = "stylesheet" href= "index.css">
    
    </head>
    
    
    

    
    
    <body>
    
 
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
        <br>
        <!-- Search Button for Restaurants-->
        
        
        <br> <br>
        <!--These buttons below guide you to other pages to assist in restaurant searches -->
        <div>
<center>
        <table class = "header" style="width:70%;">
  <tr>
    <td><a class="Button1" style="padding:0.25em;">Categories</a></td>	
    <td><a href="genius.html" class="Button1" style="padding:0.25em;">Genius Search</a></td>	
    <td><a href="allRestaurants.php" class="Button1" style="padding:0.25em;">All Restaurants</a></td>
  </tr>
        </table>
</center>
        </div>
    <br> 
        <div>
        <!--Below shows people what is cooking on Chef Corey's menu at RSGC-->
        <p style= "text-align:center;font-weight:bold;font-size:20px;margin-bottom:-0.7em;">RSGC Lunch Menu</p> <br>
        <img src= "Images/rsgcLunchMenu.gif" alt = "RSGC Lunch Menu"
        class = "rsgc">
        
        </div>



    <br>
    <!--This is the most popular area on this page the popular menu, resutaurants info and stats 
    will be set in a table.  And when the next button is hit the innerhtml will be changed in the
    Javascript.  So the Table will have an ID and ect.-->
    <p style="text-align:center"><strong>Popular Among Students</strong></p>
    <!--contains the info as to what each restaurant has... restaurants stats.-->
    
    
    <fieldset>
    <table class= "infoTable">
        <tr>
            <td><button onclick = "change_image(-1)" class= "Button1">Previous</button></td>
            <td><img src="Images/GeorgesBurgerIndex.gif" id="sShow" class="sShow"></td>
            <td><button onclick = "change_image(1)" class= "Button1">Next</button></td>
        </tr>
    </table>
    </fieldset>
    
    
    
    
    <!--Coded area for making the restaurants Index's-->
    <!--<fieldset>-->
    <!--  <table id = "t1">-->
          
    <!--      <tr>-->
    <!--          <td rowspan="5"><button  class="Button1" onclick ="populartable()" id="prev">Previous</button></td>-->
              
    <!--          <td rowspan="5">-->
    <!--             <img id="img1" src= "Images/GeorgesBurger.jpg" alt="Smokes P" style = "height:50px; width:50px;">-->
    <!--          </td>-->
              
    <!--          <td>-->
    <!--              <p>George's Burger</p>-->
    <!--          </td>-->
              
    <!--          <td>Rating: 8.5/10</td>-->
              
    <!--          <td rowspan="5" ><button  class="Button1" onclick ="populartable()" id="next">Next</button></td>-->
    <!--      </tr>-->
          
          
    <!--      <tr>-->
    <!--          <td><em>Specialty:</em> Burgers</td>-->
    <!--          <td rowspan="3"> &nbsp; -->
    <!--      </tr>-->
    <!--      <tr>-->
    <!--          <td><em>About:</em> George's Burgers is more of a histortical burger place for students of RSGC. They <br>-->
    <!--          have amazing deals and it is close to the College. -->
    <!--          </td>-->
    <!--      </tr>-->
          
    <!--      <tr>-->
    <!--          <td><em>Location:</em>&nbsp;  The Intersection of Bathurst on Bloor.</td>-->
    <!--      </tr>-->
          
    <!--      <tr>-->
    <!--          <td><em>Time</em> <i>required to walk:</i>&nbsp; 5mins </td>-->
    <!--      </tr>-->
    <!--  </table>-->
    <!--</fieldset>-->
    
    <p><a href = "mailto:ckelly@rsgc.on.ca?Subject=Hello" style="text-decoration:none;color:black;">Contact Us</a></p>
    
    <!--closing tag for momba... header that wraps the entire page-->
    </div> 
    <img src="Images/Footer.png" style="margin-bottom:-20px;margin-top:-400px;margin-left:-8px;width:101.23%;vertical-align:bottom;z-index:-1;position:relative;">
    </body>
</html>