<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="name" placeholder="Enter Name" required>
    <br><br>

    <input type="text" name="course" placeholder="Enter Course" required>
    <br><br>

    <input type="text" name="batch" placeholder="Enter Batch" required>
    <br><br>

    <input type="text" name="city" placeholder="Enter City" required>
    <br><br>

    <input type="text" name="year" placeholder="Enter Year" required>
    <br><br>

    <button type="submit" name="submit">Add New Student</button>
</form>

<?php
if(isset($_POST['submit'])){

    $name   = $_POST['name'];
    $course = $_POST['course'];
    $batch  = $_POST['batch'];
    $city   = $_POST['city'];
    $year   = $_POST['year'];

    include "config.php";

    $sql = "INSERT INTO students (name, course, batch, city, year)
            VALUES (:name, :course, :batch, :city, :year)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':course', $course);
    $stmt->bindParam(':batch', $batch);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':year', $year);

    if($stmt->execute()){
        echo "<p style='color:green;'> Data inserted successfully</p>";
    } else {
        echo "<p style='color:red;'> Data insert failed</p>";
    }
}
?>

</body>
</html>
