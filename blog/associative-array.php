<?php
$userDetails =[
    "name"=>"anil",
    "age"=>29,
    "city"=>"delhi",
    "email"=>"abc",
    "state"=>"up",
];


foreach($userDetails as $key => $data){
    echo $key." is ".$data;
    echo "<br>";
}
 
echo "<br>";

foreach($userDetails as $key => $user):
echo  $key ." is ". $user;
echo "<br>";
endforeach;



?>