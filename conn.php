<?php      
    $host = "localhost";  
    $user = "globtqsc_umair";  
    $password = 'Devils@dvocate007';  
    $db_name = "globtqsc_muteint";
      
    $conn = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 