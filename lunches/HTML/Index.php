<!DOCTYPE html>
<html>
    <head>
        <title>RSGC Lunches</title>
        <link rel="stylesheet" href="eats.css" type="text/css" />
    </head>
    
    <body>
    <div>
        <!-- Table containing the header-->
        <h1>
    <table style="width:100%">

  <tr>
    <td>Billy Bob</td>
    <td><h2>RSGC-LUNCH ROUTES</h2></td>		
    <td><button>Sign-Out</button></td>
  </tr>

        </table>
        </h1>
        
        <br>
        <!-- Search Button for Restaurants-->
        <input type="text" value="" id="RestaurantSearch">
        <button class="Button1">SEARCH</button>
        
        <br> <br>
        <!--These buttons below guide you to other pages to assist in restaurant searches -->
        <table style="width:100%">
  <tr>
    <td><a href="www.google.ca"><button>Categories</button></a></td>
    <td><a href="www.google.ca"><button>Genius Search</button></a></td>		
    <td><a href="www.google.ca"><button>All Restaurants</button></a></td>
  </tr>
        </table>
    </div>
    <br> 
    <div>
        <!--Below shows people what is cooking on Chef Corey's menu at RSGC-->
        <p style= "text-align:center">RSGC Lunch Menu</p> <br>
        <img src= "Images/rsgcLunchMenu.gif" alt = "RSGC Lunch Menu"
        style = "width:100%; height: 300px;">
        
    </div>

<img src="./lunches/HTML/Images/Footer.png" />

    <br>
    <!--This is the most popular area on this page the popular menu, resutaurants info and stats 
    will be set in a table.  And when the next button is hit the innerhtml will be changed in the
    Javascript.  So the Table will have an ID and ect.-->
    <p style="text-align:center"><strong>Popular Among Students</strong></p>
    <fieldset>
      <table id = "t1">
          
          <tr>
              <td rowspan="5"><button onclick ="populartable()" id="prev">Previous</button></td>
              
              <td rowspan="5">
                 <img id="img1" src= "Images/heroBurger.gif" alt="George's Burger" style = "height:50px; width:50px;">
              </td>
              
              <td>
                  <p>Hero Burger</p>
              </td>
              
              <td>Rating: 8/10</td>
              
              <td rowspan="5" ><button onclick ="populartable()" id="next">Next</button></td>
          </tr>
          
          
          <tr>
              <td>Specialty: Burgers</td>
              <td rowspan="3">About: Hero Burger is a blah blah blah</td>
          </tr>
          
          
          <tr>
              <td>Location:&nbsp;  Intersection of Bathurst and Bloor, on Bathurst.</td>
          </tr>
          
          <tr>
              <td>Time required to walk:&nbsp; 7mins </td>
          </tr>
      </table>
    </fieldset>
    
    </body>
</html>