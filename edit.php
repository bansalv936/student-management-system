<?php include 'db.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM students WHERE id=$id")->fetch_assoc();

if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $conn->query("UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id");
    header("Location: index.php");
}
?>

<form method="POST">
    Name: <input type="text" name="name" value="<?= $data['name'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $data['email'] ?>"><br>
    Course: <input type="text" name="course" value="<?= $data['course'] ?>"><br>
    <button name="update">Update</button>
</form>