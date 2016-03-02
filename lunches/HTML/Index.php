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
    <td><a class="Button1" style="padding:0.25em;">All Restaurants</a></td>
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
      <table id = "t1">
          
          <tr>
              <td rowspan="5"><button  class="Button1" onclick ="populartable()" id="prev">Previous</button></td>
              
              <td rowspan="5">
                 <img id="img1" src= "Images/heroBurger.gif" alt="George's Burger" style = "height:50px; width:50px;">
              </td>
              
              <td>
                  <p>Hero Burger</p>
              </td>
              
              <td>Rating: 8/10</td>
              
              <td rowspan="5" ><button  class="Button1" onclick ="populartable()" id="next">Next</button></td>
          </tr>
          
          
          <tr>
              <td><em>Specialty:</em> Burgers</td>
              <td rowspan="3"> &nbsp; 
          </tr>
          <tr>
              <td><em>About:</em> Hero Burger is a blah blah blah</td>
          </tr>
          
          <tr>
              <td><em>Location:</em>&nbsp;  Intersection of Bathurst and Bloor, on Bathurst.</td>
          </tr>
          
          <tr>
              <td><em>Time</em> <i>required to walk:</i>&nbsp; 7mins </td>
          </tr>
      </table>
    </fieldset>
    
    <p><a href = "mailto:ckelly@rsgc.on.ca?Subject=Hello" style="text-decoration:none;color:black;">Contact Us</a></p>
    
    <!--closing tag for momba... header that wraps the entire page-->
    </div> 
    <img src="Images/Footer.png" style="margin-bottom:-20px;margin-top:-400px;margin-left:-8px;width:101.23%;vertical-align:bottom;z-index:-1;position:relative;">
    </body>
</html>