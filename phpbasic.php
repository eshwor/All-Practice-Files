<html>
<head>
<title>PHP TUTORIALS</title>
</head>
<body>

<?php  
    
    // arrays basic
 /*   
  $numbers = array(54,87,65,"656","<h1>HelloArray</h1>");
    print_r($numbers);
   
// Associative Arrays Examples
    
    $names = array("FirstName" => "Ishwor", "LastName" => "Khatri");
   // print_r ($names);
    echo $names['FirstName'] . " " . $names['LastName'];

 */
?>




<?php 
 /*   
//if Statements examples
    if(4 < 5){
        echo "It's True";
    }
    else
    {
       echo "It's false"; 
    }
    
    //anothers way
    echo "<br/>";
    $x = 10;
    $y = 20;
    if($x > $y){
        echo "It's true";
    }else{
        echo "It's false";
    }
    
   
    //another example with comparision operators 
    
    if(2 > "1"){
        echo "it is true";
    }else
    {
        echo "it is false";
    }
    
     */
    
    
?>

<?php 
    /*
  //switch statements
    $favColor = "yello";
    switch($favColor){
            
        case "red": 
            echo "The is Red";
            break;
        case "blue":
            echo "This is blue";
            break;
        default:
            echo "There is no in records";
            
            
            
            
    }
   */ 
?>

<?php 
    /*
$x = 0;
    while($x < 10){
        echo $x;
        echo "LOOPS";
        echo "<br/> ";
        
        $x = $x + 1;
        
        //$x++;
    }
    */
    
    ?>


<?php
    /*
    //for Loops example
    
    for($x = 0; $x < 10; $x++){
        echo $x . "<br/>";
    }
    echo "<hr/>" . "<br/>";
    $y = 0;
    while($y < 10){
        echo $y."<br/>";
        $y++;
    }
    
    */
    ?>

<?php
    //foreach Loops
    $names = array("Ishwor","Santosh","Ramkumar");
    foreach($names as $value){
        echo "$value  <br/>" . "<hr/>";
        
    }
    
    ?>


</body>
</html>