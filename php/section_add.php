<?php

include 'connection.php';

$course_id = $_POST['course_id'];
$sec_no = $_POST['sec_no'];

$sql = "INSERT INTO sec (course_id,sec_no) VALUES ($course_id,$sec_no);";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: ../course_sec_add.php");


?>