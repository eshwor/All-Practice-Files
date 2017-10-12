<?php include "db.php"; ?>
<?php include "functionCollection.php"; ?>
    
<?php 
// the real code only for updating start here::::

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    
    
    //$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
    $query = "UPDATE users SET ";
    $query .= "username = '$username',";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";
    
    $result = mysqli_query($connection, $query);
    //check the mistake by using if statement
    if(!$result){
        die("Query Failed!!" . mysqli_error($connection));
    }
    
    
    
}




?>


<html>
<head><title>update Database</title></head>
<body>

<form action="php_update.php" method="post" lang="en">
<legend>User Update Page:</legend>
<input type="text" name="username" size="50" placeholder="Please Enter UserName"/> <br/>
<input type="password" name="password" size="50%" placeholder="Please Enter Password"/>  <br/>
<select name="id" id="">
   
   <?php 
    showAllData();
    
    ?>
    
</select>  
<input type="submit" name="submit" value="Update"/>
    
    
</form>




</body>
</html>