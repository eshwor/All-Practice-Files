<?php
/*
//simple class example and it's method
class Car {
    
    function weelsMove(){
        echo "Weels Moving";
    }
    
}
if(method_exists("Car" , "weelsMove")){
    echo "It's working";
    
}else{
    echo "It's not working";
}


*/



// example with method and how to call it with object
/*
 class Car{
     var $wheels = 4;
     var $engine = 1;
     var $hood = 1;
     
     function myMethod(){
         $this->wheels = 10;
     }
 }

$toyota =  new Car();
$toyota->myMethod();
echo    $toyota->wheels . "<br/>"; 

$truck = new Car();
echo $truck->wheels = 12;


//inheritence

class Animals{
    var $head = 1;
    var $legs = 4;
    var $tails = 1;
    function animalsRun(){
        $speed = 20;
        echo "Animals can run speedly " . $speed;
    }
    
}

$dog = new Animals();
echo "Dog head : " . $dog->head . "<br/>";
echo "Dog legs : " . $dog->legs . "<br/>";
echo "Dog tails : " . $dog->tails . "<br/>";
$dog->animalsRun() . "<br/>";

class Cat extends Animals{
     var $head = 3;
    function animalsRun(){
        $speed = 40;
        echo "Animals can run speedly " . $speed;
    }
}
$cat = new Cat();
echo "<br/>";
echo $cat->head;
$cat->animalsRun();


//construction example which we don't need to call as like function 

class Car {
    function  __construct(){
      echo   $this->wheels = 10;
    }
    
}

$BMW = new Car();


//data access pupblic, proctectd, private example


class Car{
    public $wheels = 4;
    protected $engine = 1;
    private $hood = 2;
    
   
    
}

$BMW = new Car();
echo  $BMW->wheels;
echo "<br/>";

//another class to show protected and private example:::

class Vechile extends Car {
     function myFunction(){
        echo $this->wheels;
    }
}

$toyota = new Vechile();
$toyota->myFunction();

*/


//static example

class Car{
    static $wheels = 10;
    function myFunction(){
        Car::$wheels = 20;
    }
}
$bmw = new Car();
//echo $bmw->wheels;

//echo Car::$wheels;

Car::myFunction();

?>