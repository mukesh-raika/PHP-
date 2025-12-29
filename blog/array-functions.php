<?php
$users=["anil","peter","sam","bruce","tony","anil","sam "];
$user=["name"=>"anil","age"=>30,"email"=>"abc@test.com"];
if(is_array($users)){
    echo "this is an array";
}else{
    echo "this is not an array";
}

echo  count($users);

unset($users[2]);

array_push($users,"sidhu");

array_pop($users);

print_r(array_keys($user));

echo implode($users);

$str="hello, how are, you anil";
print_r(explode(",",$str));

$data=array_merge($user,$users);
print_r($data);

$data= array_unique($users);
print_r($data);


?>