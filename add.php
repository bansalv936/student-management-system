<?php include 'db.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $conn->query("INSERT INTO students (name,email,course) VALUES ('$name','$email','$course')");
    header("Location: index.php");
}
?>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Course: <input type="text" name="course"><br>
    <button name="submit">Add</button>
</form>