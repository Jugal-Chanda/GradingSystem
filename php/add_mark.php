<?php

include 'connection.php';

$s_id = $_POST['s_id'];
$mid1 = $_POST['mid1'];
$mid2 = $_POST['mid2'];
$final = $_POST['final'];
$quize1 = $_POST['quize1'];
$quize2 = $_POST['quize2'];
$quize3 = $_POST['quize3'];
$project = $_POST['project'];
$lab = $_POST['lab'];
$class_p = $_POST['class_p'];
$quize = $_POST['quize'];
$sec_id = $_POST['sec_id'];

$sql = "SELECT * FROM co";

$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $class_p."<br>";
$class_p = ($class_p/$row['exam_taken'])*$row['weight'];


$row = $result->fetch_assoc();
$quize = ($quize/$row['exam_taken'])*$row['weight'];

$row = $result->fetch_assoc();
$mid1 = ($mid1/$row['exam_taken'])*$row['weight'];

$row = $result->fetch_assoc();
$mid2 = ($mid2/$row['exam_taken'])*$row['weight'];

$row = $result->fetch_assoc();
$final = ($final/$row['exam_taken'])*$row['weight'];

$row = $result->fetch_assoc();
$project = ($project/$row['exam_taken'])*$row['weight'];

$row = $result->fetch_assoc();
$lab = ($lab/$row['exam_taken'])*$row['weight'];

$sql = "UPDATE `mark` SET `mid1` = '$mid1', `mid2` = '$mid2', `final` = '$final', `quize1` = '$quize1', `quize2` = '$quize2', `quize3` = '$quize3', `quize` = '$quize', `class_perticipation` = '$class_p', `project_assign` = '$project', `lab` = '$lab' WHERE student_id = '$s_id' AND sec_id='$sec_id';";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



?>