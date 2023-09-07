<?php      
    $host = "sql101.infinityfree.com";  
    $user = "if0_34986605";  
    $password = 'HlDkBO5MitHSCR';  
    $db_name = "if0_34986605_dostavim";  


    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

?>  