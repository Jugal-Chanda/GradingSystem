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
			<th style="width: 15%;">Student ID</th>
			<th style="width: 20%;">Name</th>
			<th style="width: 10%;">C01</th>
			<th style="width: 10%;">CO2</th>
			<th style="width: 10%;">CO3</th>
			<th style="width: 10%;">CO4</th>
			<th style="width: 10%;">Total</th>
		</tr>
		<?php
		include 'connection.php';
		$sql = "SELECT student_list.student_id as uni_std_id,student_name,co1,co2,co3,co4,total FROM student_list,mid1 WHERE mid1.student_id = student_list.student_id AND  mid1.sec_id= '$sec_id';";
		$result = $conn->query($sql);
		$sl = 1;
		if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            	$student_id = $row['uni_std_id'];
		?>
		<tr>
			<td style="width: 5%;"><?php  echo $sl; ?></td>
			<td style="width: 15%;"><?php echo $row['uni_std_id']; ?></td>
			<td style="width: 20%;"><?php echo $row['student_name']; ?></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['co1']);  ?>" style="width: 100%;" onchange="mid1_change(this.id)" id="<?php echo $student_id."_co1";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['co2']); ?>" style="width: 100%;" onchange="mid1_change(this.id)" id="<?php echo $student_id."_co2";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['co3']); ?>" style="width: 100%;" onchange="mid1_change(this.id)" id="<?php echo $student_id."_co3";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['co4']); ?>" style="width: 100%;"onchange="mid1_change(this.id)" id="<?php echo $student_id."_co4";?>"></td>
			<td style="width: 10%;"><input type="text" name="" value="<?php print_value($row['total']); ?>" style="width: 100%;"onchange="mid1_change(this.id)" id="<?php echo $student_id."_to";?>"></td>
		</tr>
		<?php $sl+=1;
	} }?>
	</table>
