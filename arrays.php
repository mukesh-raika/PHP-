<?php
$users=[
    ["name"=>"anil","age"=>"29","city"=>"noida"], 
    ["name"=>"sam","age"=>"23","city"=>"gurgaon"], 
    ["name"=>"bhasker","age"=>"25","city"=>"delhi"], 
    ["name"=>"peter","age"=>"27","city"=>"jodhpur"], 
    
];

foreach($users as  $user){
    echo "<br>";
    foreach($user as $key=> $item){
        echo  "$key is $item";
        echo "<br>";
    }
}
echo "<br>"; echo "<br>";
?>