<?php
$users= ["anil","sam","bhasker","praveen"];

array_push($users,"peter","bruce","tony");

array_pop($users);
array_pop($users);


 array_splice($users,-2);
print_r($users);    
?>