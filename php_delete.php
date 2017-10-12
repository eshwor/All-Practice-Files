<?php include "db.php"; ?>
<?php include "functionCollection.php"; ?>
    
<?php 
// the real code only for updating start here::::

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    
    
    //$query = "UPDATE users SET username = '$username', password = '$password' WHERE id = '$id'";
    $query = "DELETE FROM users ";
    
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

<form action="php_delete.php" method="post" lang="en">
<legend>User Delete Page:</legend>
<select name="id" id="">
   
   <?php 
    showAllData();
    
    ?>
    
</select>  
<input type="submit" name="submit" value="Delete"/>
    
    
</form>




</body>
</html>