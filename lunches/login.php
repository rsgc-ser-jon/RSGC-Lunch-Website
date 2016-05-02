<?php
if(isset($_POST['submit']))  {
    
    // Connect to database
    $host = "209.236.71.62";
    $user = "mrgogor3_RRUSR";
    $pass = "fries278\mango";
    $db = "mrgogor3_RR";
    $port = 3306;
    
    // Establish the connection
    // (note username and password here is the *database* username and password, not for a user of this website)
    $connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());
    // Process a log in
    $provided_username = htmlspecialchars($_POST['username']);
    $provided_password = htmlspecialchars($_POST['password']);
    $query = "SELECT pw, fname FROM user WHERE username = ('" . $provided_username . "');";
    
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
        //   gets user's password from database
          $stored_password = $row['pw'];
          $stored_fname = $row['fname'];
          
          if (password_verify($provided_password, $stored_password) == true) {
                // All is well, set the session
                session_start();
                $_SESSION['fname'] = $stored_fname; 
                
                // Now re-direct to the logged-in home page
                $host  = $_SERVER['HTTP_HOST'];
                $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra = 'HTML/Index.php';
                header("Location: http://$host$uri/$extra");
                die();
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

<title>RSGC Lunches</title>
<link href="HTML/eats.css" rel="stylesheet" type="text/css">
</head>

<body style="background-color:#1B3B91" id="bgrnd" OnLoad="document.myform.username.focus();">
<!--HEADER IMAGE-->
<img src="HTML/Images/Header1.png" style="margin-top:-8px;margin-left:-8px;width:101.23%;z-index:-1;position:relative;">

<div class="loginBox">
<center><div style="font-size:200%;font-weight:bold;position:realative;">Login</div>
<br>
<!--The form that links to the php and successfully logs people into the site-->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Username: <input name="username" type="text" style="width:50%;height:2em;" value="<?php echo $_POST['username'] ?>" maxlength="45" size="45"> <br><?php echo $message['username']; ?>
<br>
<br>
Password:<input name="password" type="password" style="margin-left:5px;width:50%;height:2em;"value="<?php echo $_POST['pw'] ?>" maxlength="45" size="45"> <br><?php echo $message['pw']; ?>
<br>
<input type="submit" value="Sign In" class="Button1" name="submit" style="margin-right:0.2em">
<a href= "register.php"><input type="button" value="Sign Up" class="Button1" style="background-color:#0CB3EE;" style="margin-left:0.2em"></a>
</form>
</center>
</div>

<img src="HTML/Images/Footer.png" style="margin-bottom:-20px;margin-top:-400px;margin-left:-8px;width:101.23%;vertical-align:bottom;z-index:-1;position:relative;">

</body>
</html>
