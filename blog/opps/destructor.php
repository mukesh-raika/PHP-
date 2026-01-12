<?php

class UserAuth{
    function login($userTyp){
        echo "$userTyp logged in ";
    }
}

class Students extends UserAuth{
     function getName(){
        echo "anil"; 
     }  

} 
class Teacher extends UserAuth{
    function getSkill(){
        echo "BCA";
    }
}

$s1= new Students();
$s1->login("student");
$s1->getName();
echo "<br>";
  

$t1= new Teacher();
$t1-> login("Teacher");
$t1->getSkill();


// class UserAuth{
//     function login(){
//         echo " logged in";
//     }
// }

// class Students extends UserAuth{
//     function student(){
//         echo "Mukesh";
//     }
// }


// class Teacher extends UserAuth{
//     function bio(){
//         echo  " khan sar ","BCA";
//     }
// }

// $s1 = new Students();
// $s1->student();
// echo "<br>";

// $t1 = new Teacher();
// $t1->bio();
// ?>