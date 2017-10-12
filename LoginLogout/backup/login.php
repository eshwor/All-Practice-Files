<?php session_start(); ?>

<?php
if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['username'] = $_POST['username'];
header("Location: home.php");
}else{
    header("Location: index.php");
}


?>