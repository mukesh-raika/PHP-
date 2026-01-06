<form action="" method="post">
    <input type="text" name="search"placehoder="enter name for search">
    <br/>
    <button>Sesrch</button>
</form>
<?php
include('./config.php');
if(isset($_POST['search'])){
    echo $search=$_POST['search'];
    $Student=$conn->prepare("select *from students where name='$search'");
    $Student->execute();
    $result=$Student->fetchAll();
    echo "<table border='1' style='color:blue'>";
foreach($result as $student){
    echo"<tr>
   <td>". $student['name']."</td>
   <td>". $student['course']."</td>
   <td>". $student['batch']."</td>
   <td>". $student['city']."</td>
    </tr>";
}
echo"</table>";
}

?>