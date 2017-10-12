<?php
//insert data into database query start on this page
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $connection = mysqli_connect('localhost','root','','loginapp');
    if($connection){
        echo "Successfully connection with database";
    }
    else{
        die("Sorry! Database is not connection");
    }
    
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




<form action="databaseB.php" method="post" lang="en">
<legend>User Login Site:</legend>
<input type="text" name="username" size="50" placeholder="Please Enter UserName"/> <br/>
<input type="password" name="password" size="50%" placeholder="Please Enter Password"/>  <br/>  
<input type="submit" name="submit"/>
    
    
</form>




</body>
</html>