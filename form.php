<?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
   
    
    //for validation
    //var defind
        $names = array("ishwor","sharmila","Ijaya","santosh","ramkumar","roje");
    $minNumber = 5;
    $maxNumber = 15;
    if(strLen($username) < $minNumber){
        echo "Username has to be more than 5 letters";
        
    }
    elseif(strLen($username) > $maxNumber ){
        echo "User name is too long";
    }
    elseif(in_array($username,$names)){
        echo "Welcome " . $username;
    }
    else{
        echo "Sorry, Enter username is not in Datbase system";
    }
        
    
}



   
?>
   
   
   <html>
    <head><title>PHP form</title></head>
    <body>
  
    
<br/><br/><br/>
<hr/>
<form action="form.php" method="post">
    
<input type="text" name="username" size="30" placeholder="Enter Your User Name" /> <br/>
<input type="password" name="password" size="30" placeholder="Enter Your Password"/> <br />
<input type="submit" name="submit"/>
    
    
</form>
        
        
        
        
        
        
    </body>
</html>