<?php
include 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dept = isset($_POST['dept']) ? implode(",", $_POST['dept']) : "";
$address = $_POST['address'];

$sql = "UPDATE students SET 
        name='$name', mobile='$mobile', email='$email', gender='$gender', 
        department='$dept', address='$address' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: view.php");
} else {
    echo "Error: " . $conn->error;
}
?>
