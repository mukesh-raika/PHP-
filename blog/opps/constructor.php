<?php
class ConstructorDemo{
    public $name;
   function __construct($name){
   $this->name= $name;
   }
   function displayName(){
    echo $this->name;
   }

   
}

$cd= new ConstructorDemo("Junaid");
$cd->displayName();

echo "<br>";
Class User{
    public $name;

    function show(){
        echo $this->name;
    }
}
$user1 = new User();
$user1->name = "Mukesh";
$user1->show(); 



?>