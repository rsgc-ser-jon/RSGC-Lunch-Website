<?php
        
        $provided_entry = htmlspecialchars($_POST['search']);
        // Connect to database
        $host = "209.236.71.62";
        $user = "mrgogor3_RRUSR";
        $pass = "fries278\mango";
        $db = "mrgogor3_RR";
        $port = 3306;
        
        // Establish the connection
        // (note username and password here is the *database* username and password, not for a user of this website)
        $connection = mysqli_connect($host, $user, $pass, $db, $port) or die(mysql_error());
        
        
        $query = "SELECT id FROM restaurant WHERE name = ('" . $provided_entry . "');"; 
      
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        
        if($row['id'] != ""){
        header("Location: https://lunches-official-rsgc-kelly-c.c9users.io/lunches/HTML/profile.php?id='".$row['id']. "'");
        exit;
            print_r("Location: https://lunches-official-rsgc-kelly-c.c9users.io/lunches/HTML/profile.php?id='".$row['id']. "'");
            die();
        }
        ?>