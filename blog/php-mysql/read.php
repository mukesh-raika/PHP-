<?php
include("./config.php");
$getStudens=$conn->prepare("SELECT * FROM students");
$getStudens->execute();
$students=$getStudens->fetchAll();

echo "<table border='1' style='color:blue'>";
foreach($students as $student){
    echo"<tr>
   <td>". $student['name']."</td>
   <td>". $student['course']."</td>
   <td>". $student['batch']."</td>
   <td>". $student['city']."</td>
    </tr>";
}
echo"</table>";
?>