<?php
if(isset($_POST['submit'])){
    
    $connection = mysqli_connect('localhost','root','','loginapp');
    if($connection){
        echo "Successfully connection with database";
    }
    else{
        die("Sorry! Database is not connection");
    }
    
}


?>




<html>
<head><title>DataBase</title></head>
<body>




<form action="database.php" method="post" lang="en">
<legend>User Login Site:</legend>
<input type="text" name="username" size="50" placeholder="Please Enter UserName"/> <br/>
<input type="password" name="password" size="50%" placeholder="Please Enter Password"/>  <br/>  
<input type="submit" name="submit"/>
    
    
</form>




</body>
</html>