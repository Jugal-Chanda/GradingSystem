<?php

include 'connection.php';
$course_code = $_POST['course_code'];
$course_title = $_POST['course_title'];

$sql = "INSERT INTO course (course_id,Course_title) VALUES ('$course_code','$course_title');";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: ../course_sec_add.php");

?>