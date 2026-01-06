<?php
include("./config.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $getStudent = $conn->prepare("SELECT * FROM students WHERE id = :id");
    $getStudent->bindParam(':id', $id, PDO::PARAM_INT);
    $getStudent->execute();

    $student = $getStudent->fetch(PDO::FETCH_ASSOC);

    if (!$student) {
        die("Student not found");
    }

    $name   = $student['name'];
    $course = $student['course'];
    $batch  = $student['batch'];
    $city   = $student['city'];
    $year   = $student['year'];
}

if (isset($_POST['update'])) {
    $id     = $_POST['id'];
    $name   = $_POST['name'];
    $course = $_POST['course'];
    $batch  = $_POST['batch'];
    $city   = $_POST['city'];
    $year   = $_POST['year'];

    $updateStudent = $conn->prepare(
        "UPDATE students 
         SET name = :name, course = :course, batch = :batch, city = :city, year = :year
         WHERE id = :id"
    );

    $updateStudent->bindParam(':name', $name);
    $updateStudent->bindParam(':course', $course);
    $updateStudent->bindParam(':batch', $batch);
    $updateStudent->bindParam(':city', $city);
    $updateStudent->bindParam(':year', $year);
    $updateStudent->bindParam(':id', $id, PDO::PARAM_INT);

    if ($updateStudent->execute()) {
        echo "<p style='color:green'>Student updated successfully</p>";
    } else {
        echo "<p style='color:red'>Update failed</p>";
    }
}
?>

<form action="" method="post">
    <input type="text" name="name" value="<?php echo $name ?>" placeholder="Name" /><br/><br/>
    <input type="text" name="course" value="<?php echo $course ?>" placeholder="Course" /><br/><br/>
    <input type="text" name="batch" value="<?php echo $batch?>"placeholder="barch"/><br/>
    <input type="text" name="city" value="<?php echo $year?>"placeholder="city"/><br>
</form>
