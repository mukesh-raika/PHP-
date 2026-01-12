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

?>