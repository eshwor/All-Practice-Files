<?php 
$connection = mysqli_connect('localhost','root','','loginapp');
    if($connection){
        echo "Successfully connection with database";
    }
    else{
        die("Sorry! Database is not connection");
    }
    
    
    ?>