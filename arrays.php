<?php
$users=[
    ["name"=>"anil","age"=>"29","city"=>"noida"], 
    ["name"=>"sam","age"=>"23","city"=>"gurgaon"], 
    ["name"=>"bhasker","age"=>"25","city"=>"delhi"], 
    ["name"=>"peter","age"=>"27","city"=>"jodhpur"], 
    
];
echo  "<table border 1>";
foreach($users as  $user){
      echo "<tr>";
    foreach($user as $key=> $item){
        echo "<td>";
        echo  "$key is $item";
        echo "</td>";
    }
}
   echo "</tr>";

echo "</table>";
?>