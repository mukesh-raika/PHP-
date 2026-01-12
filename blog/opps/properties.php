<?php
class Properties{
   public $name="anil  sidhu";
   function getName(){
    echo $this->name;
   }
   function updateName($name){
    $this->name=$name;
   }
}

$p1  = new Properties();

// echo $p1->name;

$p1->updateName("coder boy");
$p1->getName();

echo "<br>";
class reacts{
    public $name="peter sam";
    function getname(){
        echo $this->name;
    }
    function updateName($name){
        $this->name=$name;
    }
}

$p2 = new reacts();


$p2->updateName("doni moni");
$p2->getname();

?>