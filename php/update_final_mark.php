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

function sum_value($value)
{
	if ($value == -1) {
		return 0;
	}
	return $value;
}

$s_id = $_POST['s_id'];
$sec_id = $_POST['sec_id'];
$co1 = set_value($_POST['co1']);
$co2 = set_value($_POST['co2']);
$co3 = set_value($_POST['co3']);
$co4 = set_value($_POST['co4']);
$to = sum_value($co1)+sum_value($co2)+sum_value($co3)+sum_value($co4);
$sql = "SELECT ratio from co where co_id=5;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$ratio = $row['ratio'];

$sql = "UPDATE final SET co1='$co1',co2='$co2',co3='$co3',co4='$co4',total='$to' where student_id = '$s_id' AND sec_id = '$sec_id';";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$ratio_mark = $to*$ratio;
$sql = "UPDATE mark SET final='$ratio_mark' where student_id = '$s_id' AND sec_id = '$sec_id';";
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