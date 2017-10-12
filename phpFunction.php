<html>
<head><title></title></head>
<body>
<?php
    
 //function example
//simple function 
    /*
    function simpleFunction(){
        echo "This is me calling by functction over and over";
        echo "<br/>";
        inItFunction();
    }
    
    
    
    function inItFunction(){
        echo "This is in it function calling";
    }

    simpleFunction();
    
    */
?>

<?php
//function with parameters and arguments    
    /*
    function greetingFunction($variable){
        echo $variable;
    }
    $mes = "Hello World";
    $message = $mes;
   greetingFunction($message);
   
    
    //another example
    function myFunctions($a, $b, $c){
        $sum = $a + $b + $c;
        echo $sum;
    }
    
    $varA = 10;
    $varB = 20;
    $varC = 30;
    
    myFunctions($varA,$varB,$varC);
    */
    //return function example
    /*
    function returnFunction(){
        return ("Hello");
    }
    $result = returnFunction();
    echo $result;
    
    //another example:
    
    function addFunction($numberA , $numberB){
        $total = $numberA + $numberB;
        return $total;
    }
    
    $result = addFunction(100 , 50);
   
    $results = addFunction($result , 100);
    echo $results;
    
    */
    
    ?>


<?php 
   /* 
$x = "outside"; //global var

function myFunction(){
    global $x;
    $x = "inside";
    
}
    
echo $x; echo $x;echo $x;
echo "<br/>";
myFunction();
    echo $x;
    echo $x;
    echo $x;
    
    
//static variable
function myTest(){
    static  $x = "Hello";
    echo $x;
    $x++;
}
    myTest();echo "<br/>";
     myTest();echo "<br/>";
    myTest();echo "<br/>";
     myTest();echo "<br/>";

    //constant example
    define("Key","value");
    echo Key;
    */
    ?>

<?php 
//Math Function 
//There are lots of math function which we can get from website 
// start string fucntion
    
//$text = "PHP is one the powerfull server scripting language.";
//echo strLen($text);
    
//ArrayFunction
//$list = array(10,2,0,10);
//echo MAX($list);
?>




</body>
</html>