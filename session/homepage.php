
<?php 
session_start();
?>



<html>
    <head><title>SESSION</title></head>
<body>
<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>