<?php
// function getName() {
//     return "Mukesh";
// }
// echo getName();
// echo "<br>";
// echo getName();



// function outerFunction() {

//     function innerFunction() {
//         echo "Hello";
//     }

// }

// outerfunction();
// innerfunction();


// echo "<br>";


function getUserName($name, $age) {
    return $name . "  . $age .  ";
}

function welcomeUser($a, $b) {
    $name = getUserName($a, $b);
    return "Welcome " . $name;
}

echo welcomeUser("Mukesh", 19);
?>


