<?php
$sec_id = $_GET['sec_id'];
function print_value($value)
{
	# code...
	if ($value ==  -1) {
		echo "-";
	}
	else{
		echo "$value";
	}
}
?>
<table style="margin-top: 20px;">
		<tr>
			<th style="width: 5%;">Sl</th>
			<th style="width: 10%;">Student ID</th>
			<th style="width: 15%;">Name</th>
			<th style="width: 10%;">Quize1</th>
			<th style="width: 10%;">Quize2</th>
			<th style="width: 10%;">Quize3</th>
			<th style="width: 10%;">Average</th>
			<th style="width: 10%;">Class Perticipation</th>
			<th style="width: 10%;">Project/Assignment</th>
			<th style="width: 10%;">Lab</th>

		</tr>
		<?php
		include 'connection.php';
		$sql = "SELECT student_list.student_id as uni_std_id,student_name,quize1,quize2,quize3,average,class_perticipation,project_assignment,lab FROM student_list,other WHERE other.student_id = student_list.student_id AND  other.sec_id= '$sec_id';";
		$result = $conn->query($sql);
		$sl = 1;
		if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            	$student_id = $row['uni_std_id'];
		?>
		<tr>
			<td style="width: 5%;"><?php  echo $sl; ?></td>
			<td style="width: 10%;"><?php echo $row['uni_std_id']; ?></td>
			<td style="width: 10%;"><?php echo $row['student_name']; ?></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['quize1']);  ?>" style="width: 100%;" onchange="other_change(this.id)" id="<?php echo $student_id."_quize1";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['quize2']); ?>" style="width: 100%;" onchange="other_change(this.id)" id="<?php echo $student_id."_quize2";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['quize3']); ?>" style="width: 100%;" onchange="other_change(this.id)" id="<?php echo $student_id."_quize3";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['average']); ?>" style="width: 100%;"onchange="other_change(this.id)" id="<?php echo $student_id."_average";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['class_perticipation']); ?>" style="width: 100%;"onchange="other_change(this.id)" id="<?php echo $student_id."_classperticipation";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['project_assignment']); ?>" style="width: 100%;"onchange="other_change(this.id)" id="<?php echo $student_id."_project";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['lab']); ?>" style="width: 100%;"onchange="other_change(this.id)" id="<?php echo $student_id."_lab";?>"></td>
		</tr>
		<?php $sl+=1; } }?>
	</table>
