<table>
	<tr>
		<th style="width: 12%;">Student Id</th>
		<th style="width: 8%;">MID1</th>
		<th style="width: 8%;">MID2</th>
		<th style="width: 8%;">Final</th>
		<th style="width: 8%;">Quize1</th>
		<th style="width: 8%;">Quize2</th>
		<th style="width: 8%;">Quize3</th>
		<th style="width: 8%;">Project</th>
		<th style="width: 8%;">Lab</th>
		<th style="width: 8%;">Class Perticipation</th>
		<th style="width: 8%;">Quize</th>
		<th style="width: 8%;">Total</th>
	</tr>
<?php
include 'connection.php';

$sec_id = $_GET['sec_id'];

$sql = "SELECT * FROM mark WHERE sec_id = '$sec_id';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {


?>

<tr>
	<td style="width: 12%;"><?php echo $row['student_id'] ?></td>
	<td style="width: 8%;"><?php echo $row['mid1'] ?></td>
	<td style="width: 8%;"><?php echo $row['mid2'] ?></td>
	<td style="width: 8%;"><?php echo $row['final'] ?></td>
	<td style="width: 8%;"><?php echo $row['quize1'] ?></td>
	<td style="width: 8%;"><?php echo $row['quize2'] ?></td>
	<td style="width: 8%;"><?php echo $row['quize3'] ?></td>
	<td style="width: 8%;"><?php echo $row['project_assign'] ?></td>
	<td style="width: 8%;"><?php echo $row['lab'] ?></td>
	<td style="width: 8%;"><?php echo $row['class_perticipation'] ?></td>
	<td style="width: 8%;"><?php echo $row['quize'] ?></td>
	<td style="width: 8%;"><?php echo $row['mid1']+$row['mid2']+$row['final']+$row['quize']+$row['project_assign']+$row['lab']+$row['class_perticipation']; ?></td>
</tr>
<?php } } ?>

</table>