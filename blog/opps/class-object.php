<?php
class MathOperations{

function sum($a,$b){
    echo $a+$b;
}
function multi($a,$b){
    echo $a*$b;
}

function sub($a,$b){
    echo $a-$b;
}
}

$maths= new MathOperations();

 $maths->sum(20,30);
 echo "<br>";
$maths->multi(70,80);
echo "<br>";
$maths->sub(78 ,8);  


class coding{
    function cod($a,$b){
        echo $a+$b;
    }

    function cod1($a,$b){
        echo $a*$b;
    }

    function cod2($a,$b){
        echo $a-$b;
    }

}


   $inter= new coding();
   echo "<br>";
   $inter->cod(45,45);
   echo "<br>";
   $inter->cod1(90,80);
   echo "<br>";
   $inter->cod2(68,57);




   class interview{

   function coder1($a,$b){
    echo $a/$b;
   }

   function coder2($a,$b){
    echo $a+$b;
   }

   function coder3($a,$b){
    echo $a-$b;
   }

   function coder4($a,$b){
    echo $a*$b;
   }

   function coder5($a,$b){
    echo $a+$b;
   }
   }

   $coder= new interview();
   
   $coder->coder1(23,31);
   echo "<br>";
   $coder->coder2(23,12);
   echo "<br>";
   $coder->coder3(56,65);
   echo "<br>";
   $coder->coder4(78,87);
   echo  "<br>";
   $coder->coder5(90,98);
   echo "<br>";

  

   class arraya{

   function ara($a,$b){
    echo $a*$b;
   }

   function ara1($a,$b){
    echo $a+$b;
   }

   }

   $error= new arraya();

   $error->ara(75,54);
   echo "<br>";
   $error->ara1(32,65);
   echo "<br>"; 

?>