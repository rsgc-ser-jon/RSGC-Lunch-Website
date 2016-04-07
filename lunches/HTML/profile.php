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
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, 
            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, 
            fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, 
            justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper 
            nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. 
            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
            Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque 
            sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. 
            Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
            Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, 
            augue velit cursus nunc,
            </td>
        <tr style="background-color:white;">
        </style>
        </style>
            <td style="background-color:#065da5;color:white;font-size:2em;">
                <center>
                <b id="rName">George's Deli</b>  
                </center>
            </td>
        </tr>
          </tr>
              <td style="background-color:#2E91E3;color:white;padding:1.5em;">

                  <!--Getting the rating system to work, the form that connects the ratings to the database-->

                  <b>Rating</b>
                 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                     1<input type="radio" name="star"/>
                     2<input type="radio" name="star"/>
                     3<input type="radio" name="star"/>
                     4<input type="radio" name="star"/>
                     5<input type="radio" name="star"/>
                     <input type="button" name="star" value="submit"/>
                 </form>

                <p id="adress">795 Bathurst St, Toronto, ON M5S</p>
                <b id="minWalk">8 minute walk</b>
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