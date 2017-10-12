<?php
//insert data into database query start on this page
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $connection = mysqli_connect('localhost','root','','loginapp');
    if(!$connection){
    die("Sorry! Database is not connection");
    }
    //for the realScapeString for ingore the incorrect username string:
    
    $username = mysqli_real_escape_string( $connection, $username );
    $password = mysqli_real_escape_string( $connection, $password );
    
    //For encript password 
    $hashFormat = "$8$10$$20$525$85$";
    $salt = "fjrhtifkcldgplmkbjvh22";
    $hashF_and_salt = $hashFormat . $salt;
    $password = crypt($password, $hashF_and_salt );
   // $username = crypt($username, $hashF_and_salt );
    
    
    
    //insert data into database code start from here*******************
    
    $query = "INSERT INTO users(username,password)";
    $query .= "VALUES('$username','$password')";
    
    $result = mysqli_query($connection,$query);
    //to check it's passing query or not
    if($result){
        echo " And query success!!";
    }else{
        die(" But Query failed!!");
    }
    
    
}


?>




<html>
<head><title>DataBase</title></head>
<body>




<form action="php_login.php" method="post" lang="en">
<legend>User Login Site:</legend>
<input type="text" name="username" size="50" placeholder="Please Enter UserName"/> <br/>
<input type="password" name="password" size="50%" placeholder="Please Enter Password"/>  <br/>  
<input type="submit" name="submit"/>
    
    
</form>




</body>
</html>