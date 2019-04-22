<?php

include 'connection.php';

$s_id = $_GET['s_id'];
$sec_id = $_GET['sec_id'];

$sql = "SELECT * FROM mark WHERE student_id='$s_id' AND sec_id = '$sec_id';";
$result = $conn->query($sql);
if($result->num_rows > 0){
	$row = $result->fetch_assoc();
	$marks = array(1,$row['mid1'],$row['mid2'],$row['final'],$row['quize1'],$row['quize2'],$row['quize3'],$row['quize'],$row['class_perticipation'],$row['project_assign'],$row['lab'],);
}else{
	$marks = array(0,0,0,0,0,0,0,0,0,0,0);
}

echo json_encode($marks);
?>