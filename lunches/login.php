<?php
if(isset($_POST['submit']))  {
    
    // Connect to database
     $host="localhost";
        $user = "root";
        $pass = "";
        $db = "test123";
        $port = 8080;


    /*$host = "209.236.71.62";
    $user = "mrgogor3_RRUSR";
    $pass = "fries278\mango";
    $db = "mrgogor3_RR";
    $port = 3306;*/
    
    // Establish the connection
    // (note username and password here is the *database* username and password, not for a user of this website)
    $connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());
    // Process a log in
    $provided_username = htmlspecialchars($_POST['username']);
    $provided_password = htmlspecialchars($_POST['password']);
    $query = "SELECT pw FROM user WHERE username = ('" . $provided_username . "');";
    
    // Get results
    $result = mysqli_query($connection, $query);
    
    // Compare the provided password to the stored password
    if ($result == false) {
        $message['general'] = "An unexpected error occurred. Please try again later.";
    } else {
        if (mysqli_num_rows($result) == 0) {
          $message['general'] = "Error. The user <strong>" . $provided_username . "</strong> was not found.";
        } else {
          // We have a result, now do the comparison of passwords
          $row = mysqli_fetch_assoc($result);
          $stored_password = $row['pw'];
          
          if (password_verify($provided_password, $stored_password) == true) {
                // All is well, set the session
                session_start();
                $_SESSION['username'] = $provided_username; 
                
                // Now re-direct to the logged-in home page
                $host  = $_SERVER['HTTP_HOST'];
                $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra = 'home.php';
                header("Location: http://$host$uri/$extra");
                exit;
          } else {
              $message['general'] = "Incorrect password for user <strong>" . $provided_username . "</strong>.";
          }
        }
    }
    
}




?>

<!doctype html>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>RSGC Eats</title>
<link href="eats.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color:#1B3B91" id="bgrnd">

<img src="Images/Header1.png" style="margin-top:-8px;margin-left:-8px;width:101.23%;">
<div class="loginBox">
<center><div style="font-size:200%;font-weight:bold;">Login</div>
<br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Username: <input type="text" name="username" style="width:50%;height:2em;" value="<?php echo $_POST['username'] ?>" maxlength="45" size="45"> <br><?php echo $message['username']; ?>
<br>
<br>
Password:<input type="text" name="password" style="margin-left:5px;width:50%;height:2em;"value="<?php echo $_POST['pw'] ?>" maxlength="45" size="45"> <br><?php echo $message['pw']; ?>
<br>
<br>
</form>
<input type="button" value="Sign In" class="Button1">
<input type="button" value="Sign Up" class="Button1" style="background-color:#0CB3EE;">

</center>
</div>

<img src="Images/Footer.png" style="margin-bottom:-20px;margin-top:-400px;margin-left:-8px;width:101.23%;vertical-align:bottom;">

</body>
</html>
