<?php
include 'connection.php';
$id = $_GET['id'];
$conn->query("DELETE FROM students WHERE id=$id");
header("Location: view.php");
?>
