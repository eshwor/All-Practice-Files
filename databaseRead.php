<?php
    $connection = mysqli_connect('localhost','root','','loginapp');
    if($connection){
        echo "Successfully connection with database";
    }
    else{
        die("Sorry! Database is not connection");
    }
    
    //pull data from database code start from here*******************
    
    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);
    
    while($rows = mysqli_fetch_assoc($result)){
      // echo "<br/>";
        ?>
        <pre>
        <?php
        print_r($rows);
        ?>
        </pre>
        <?php
        
    }
   
    
    



?>




<html>
<head><title>Read Database</title></head>
<body>





</body>
</html>