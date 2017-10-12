<?php

//echo "This is my first PHP program";

#Variable Strart***
//simple variable example
/*
$x = "This is my first Variable Class on PHP";
echo $x;
echo "<hr />";
*/

//There are three kinds of Variable - Global, Local and static
//global variable scope example

/*
$x = 5; //global variable
function myFunction(){
     // using x inside this function will generate an error::::
    //echo "<p>The value of global variable is: $x</p>";
}
 
//calling that function : 
myFunction();
echo "<br />";
// calling from outside without creating function:
echo "<p>The value of global variable is $x</p>";
*/

//LOCAL VARIABLE IS RIGHT OPOSITE OF GLOBAL VARIABLE::::::

//Lets see STATIC variable example
/*
function staticVarFunction(){
    static $y = "This is static var";
    
}
staticVarFunction();
*/

//CONSTATS EXAMPLE**************************
define ("name", "Ishowrkumarkhatri");
echo name;

?>