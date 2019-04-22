
<style>
        table 
        {
            font: 17px Calibri;
        }
        table, th, td
        {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;

        }
    </style>
<?php

function grade($value)
{
	if($value>=97)
		echo "A+";
	else if($value<97 && $value>=90)
		echo "A";
	else if($value<90 && $value>=87)
		echo "A-";
	else if($value<87 && $value>=83)
		echo "B+";
	else if($value<83 && $value>=80)
		echo "B(plane)";
	else if($value<80 && $value>=77)
		echo "B-";
	else if($value<77 && $value>=73)
		echo "C+";
	else if($value<73 && $value>=70)
		echo "C(plane)";
	else if($value<70 && $value>=67)
		echo "C-";
	else if($value<67 && $value>=63)
		echo "D+";
	else if($value<63 && $value>=60)
		echo "D";
	else 
		echo "F";
	
}

include 'connection.php';

$sec_id = $_GET['sec_id'];
$sql = "SELECT course.course_id as course_code,Course_title,sec_no from course,sec where sec.course_id=course.c_id AND sec.sec_id = '$sec_id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$course_code = $row['course_code'];
$Course_title = $row['Course_title'];
$sec_no =$row['sec_no'];

$sql = "SELECT * FROM co;";
$result = $conn->query($sql);
$weight1 = 0;
$weight2 = 0;
$weight3 = 0;
$weight4 = 0;
$weight5 = 0;
$weight6 = 0;
$weight7 = 0;

$ratio1 = 0;
$ratio2 = 0;
$ratio3 = 0;
$ratio4 = 0;
$ratio5 = 0;
$ratio6 = 0;
$ratio7 = 0;

while ( $row = $result->fetch_assoc()) {
	if($row['co_id'] == 1){
		$weight1 = $row['weight'];
		$ratio1 = $row['ratio'];
	}
	else if($row['co_id'] == 2)
	{
		$weight2 = $row['weight'];
		$ratio2 = $row['ratio'];
	}
	else if($row['co_id'] == 3)
	{
		$weight3 = $row['weight'];
		$ratio3 = $row['ratio'];
	}
	else if($row['co_id'] == 4)
	{
		$weight4 = $row['weight'];
		$ratio4 = $row['ratio'];
	}
	else if($row['co_id'] == 5)
	{

		$weight5 = $row['weight'];
		$ratio5 = $row['ratio'];
	}
	else if($row['co_id'] == 6)
	{
		$weight6 = $row['weight'];
		$ratio6 = $row['ratio'];
	}
	else if($row['co_id'] == 7)
	{
		$weight7 = $row['weight'];
		$ratio7 = $row['ratio'];
	}
}

?>

<table Style="width:100%; border: solid 1px #DDD; ">
	<tr>
		<th colspan = "3" >Tabulation</th>
	    <th rowspan = "3" >Mid Term Exam 1</th>
		<th rowspan = "3" >Mid Term Exam 3</th>
		<th rowspan = "3" >Final Exam</th>
		<th rowspan = "3" >Class particiation</th>
		<th rowspan = "3" >CT,Quiz,Assigt</th>
		<th rowspan = "3" >Project</th>
		<th rowspan = "3" >Lab</th>
		<th rowspan = "3" >Total</th>
		<th rowspan = "4" >Letter Grade</th>
	</tr>
	<tr>
		<th >course Code</th>
		<th input type="text" name="course code" value="course code"><?php echo $course_code; ?></th>
		<th input type="number" name="section" value="section"><?php echo $sec_no; ?></th>
		
	</tr>
    <tr>
       <th>Course title</th>
       <th colspan = "2" input type="text" name="course title" value="course titleS"><?php echo $Course_title; ?></th>
    </tr>
	
	<tr>
       <th>Credit</th>
       <th>4.0</th>
	   <th>Spring 2019</th>
	   <th><?php echo $weight3; ?></th>
	   <th><?php echo $weight4; ?></th>
	   <th><?php echo $weight5; ?></th>
	   <th><?php echo $weight1; ?></th>
	   <th><?php echo $weight2; ?></th>
	   <th><?php echo $weight6; ?></th>
	   <th><?php echo $weight7; ?></th>
	   <th>100</th>
    </tr>
    <?php

    $sql = "SELECT sec_id,student_list.student_id,student_list.student_name,mid1,mid2,final,quize,class_perticipation,project_assign,lab FROM mark,student_list where student_list.student_id=mark.student_id and sec_id='$sec_id';";
	$result = $conn->query($sql);
	$sl = 1;
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
    ?>
    <tr>
    	<td><?php echo $sl; ?></td>
    	<td><?php echo $row['student_id']; ?></td>
    	<td><?php echo $row['student_name']; ?></td>
    	<td><?php echo $row['mid1']; ?></td>
    	<td><?php echo $row['mid2']; ?></td>
    	<td><?php echo $row['final']; ?></td>
    	<td><?php echo $row['class_perticipation']; ?></td>
    	<td><?php echo $row['quize']; ?></td>
    	<td><?php echo $row['project_assign']; ?></td>
    	<td><?php echo $row['lab']; ?></td>
    	<td><?php  $total_mark = $row['mid1']+$row['mid2']+$row['final']+$row['class_perticipation']+$row['quize']+$row['project_assign']+$row['lab'];
    	echo $total_mark;
    	 ?></td>
    	 <td><?php grade($total_mark); ?></td>
    </tr>
    <?php
		$sl+=1; } }
    ?>
   </table>

