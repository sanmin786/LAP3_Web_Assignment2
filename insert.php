<?php
include 'connection.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dept = isset($_POST['dept']) ? implode(",", $_POST['dept']) : "";
$address = $_POST['address'];

$sql = "INSERT INTO students (name, mobile, email, gender, department, address) 
        VALUES ('$name','$mobile','$email','$gender','$dept','$address')";

if ($conn->query($sql) === TRUE) {
    header("Location: view.php");
} else {
    echo "Error: " . $conn->error;
}
?>
