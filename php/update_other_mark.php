<?php

include 'connection.php';

function set_value($value)
{
	if ($value=='-') {
		return -1;
	}else
	{
		return $value;
	}
}

function conv_value($value)
{
	if ($value == -1) {
		return 0;
	}
	return $value;
}

function max_average($value1,$value2,$value3){
	$arr = array($value1,$value2,$value3);
	for($i=0;$i<3;$i++){
		for ($j=$i+1; $j < 3; $j++) { 
			if ($arr[$j]>$arr[$i]) {
				$tmp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $tmp;
			}
		}
	}
	return ($arr[0]+$arr[1])/2;
}

$s_id = $_POST['s_id'];
$sec_id = $_POST['sec_id'];
$quize1 = set_value($_POST['quize1']);
$quize2 = set_value($_POST['quize2']);
$quize3 = set_value($_POST['quize3']);
$average = max_average(conv_value($quize1),conv_value($quize2),conv_value($quize3));
$classperticipation = set_value($_POST['classperticipation']);
$project = set_value($_POST['project']);
$lab = set_value($_POST['lab']);

$quize_ration = 1;
$classperticipation_ratio = 1;
$project_ratio = 1;
$lab_ratio = 1;

$sql = "SELECT ratio,co_id FROM co;";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
	if($row['co_id'] == 2){
		$quize_ration=$row['ratio']*conv_value($average);
	}
	if($row['co_id'] == 1){
		$classperticipation_ratio=$row['ratio']*conv_value($classperticipation);
	}
	if($row['co_id'] == 6){
		$project_ratio=$row['ratio']*conv_value($project);
	}
	if($row['co_id'] == 7){
		$lab_ratio=$row['ratio']*conv_value($lab);
	}
}

$sql = "UPDATE other SET quize1='$quize1',quize2='$quize2',quize3='$quize3',average='$average',class_perticipation='$classperticipation',project_assignment='$project',lab='$lab' WHERE student_id = '$s_id' AND sec_id = '$sec_id';";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$sql = "UPDATE mark SET quize='$quize_ration',class_perticipation='$classperticipation_ratio',project_assign='$project_ratio',lab='$lab_ratio' where student_id = '$s_id' AND sec_id = '$sec_id';";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

/*echo " co1 = ".$co1;
echo " co2 = ".$co2;
echo " co3 = ".$co3;
echo " co4 = ".$co4;
*/


?>