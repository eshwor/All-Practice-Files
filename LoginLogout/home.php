<?php session_start(); ?>

<?php
if(!isset($_SESSION['username'])){
    header("Location: index.php");
}

?>


<html>
    <head><title>Homepage</title></head>
    
<body>
    
<p><?php echo "Welcome To: " . $_SESSION['username']; ?></p>   
 <a href="logout.php">Logout</a>   
    
</body>
</html>