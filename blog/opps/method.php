    <?php
    class Teacher{
        public $city="delhi";
        function nextExam(){
            echo "next exam is  maths";
        }
        function age(){
            echo "my agee is 40";
        }
    }

    class Student extends Teacher{
        public $city ="noida";
    function age (){
        echo "my age is 20";
    }
    }

    $s1 = new Student();
    $s1->age();
    echo "<br>";
    echo $s1->city; 
     echo "<br>";
    // $t1 = new Teacher();
    // $t1->age();
    // echo "<br>";
    // echo $t1->city;
    ?>