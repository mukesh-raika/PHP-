<?php
class Teachers{
   private function questionPapers(){
        return "important";

    }
     public function exam(){
        if($this->questionPapers()=="important"){
            echo "do something ";
        }else{
            echo "do else";
        }
    }


   protected function staudentMarks(){
        echo "all students marks";
    }
}

class Management extends Teachers{

function reviewExam(){
    $this->staudentMarks();
}
}
$t1= new Teachers();


$m1 = new Management();
 echo $m1->reviewExam(); 
 echo "<br>";

    class Teacher{
   private function questionPapers(){
            return "anil";    
            
        }
    public function mbs(){
        return $this->questionPapers();
        
    } 
    
   }

   
   class Staudents extends Teacher{
     function student(){
        return "this is ";
     }    

   
}

$s1 = new Staudents();
echo $s1->student();


$b1 = new Teacher();
echo $b1->mbs();


?>