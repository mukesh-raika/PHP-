<?php
var_dump(5 == "5");
echo "<br>";
var_dump(5 === "5");

echo "<br>";


$userAge = "18";

if ($userAge == 18) {
    echo "Allowed (==)";
}

if ($userAge === 18) {
    echo "Allowed (===)";
}

?>