<?php
include 'db.php';
$name = $_POST['name'];
$department = $_POST['department'];
$job = $_POST['job_title'];

$sql = "INSERT INTO employees (name, department, job_title) VALUES ('$name', '$department', '$job')";
$conn->query($sql);
?>