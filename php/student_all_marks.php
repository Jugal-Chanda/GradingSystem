<?php

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
$co11 = 0;
$co21 = 0;
$co31 = 0;
$co41 = 0;
$weight1 = 0;
$exam_taken1 = 0;
$ratio1 = 0;


$co12 = 0;
$co22 = 0;
$co32 = 0;
$co42 = 0;
$weight2 = 0;
$exam_taken2 = 0;
$ratio2 = 0;

$co13 = 0;
$co23 = 0;
$co33 = 0;
$co43 = 0;
$weight3 = 0;
$exam_taken3 = 0;
$ratio3 = 0;

$co14 = 0;
$co24 = 0;
$co34 = 0;
$co44= 0;
$weight4 =0;
$exam_taken4 = 0;
$ratio4 = 0;

$co15 = 0;
$co25 = 0;
$co35 = 0;
$co45= 0;
$weight5 = 0;
$exam_taken5 = 0;
$ratio5 = 0;

$co16 = 0;
$co26 = 0;
$co36 = 0;
$co46 = 0;
$weight6 = 0;
$exam_taken6 = 0;
$ratio6 = 0;

$co17 = 0;
$co27 = 0;
$co37 = 0;
$co47 = 0;
$weight7 = 0;
$exam_taken7 = 0;
$ratio7 = 0;

while ( $row = $result->fetch_assoc()) {
	if($row['co_id'] == 1){
		$co11 = $row['co1'];
		$co21 = $row['co2'];
		$co31 = $row['co3'];
		$co41 = $row['co4'];
		$weight1 = $row['weight'];
		$exam_taken1= $row['exam_taken'];
		$ratio1 = $row['ratio'];
	}
	else if($row['co_id'] == 2)
	{
		$co12 = $row['co1'];
		$co22 = $row['co2'];
		$co32 = $row['co3'];
		$co42 = $row['co4'];
		$weight2 = $row['weight'];
		$exam_taken2= $row['exam_taken'];
		$ratio2 = $row['ratio'];
	}
	else if($row['co_id'] == 3)
	{
		$co13 = $row['co1'];
		$co23 = $row['co2'];
		$co33 = $row['co3'];
		$co43 = $row['co4'];
		$weight3 = $row['weight'];
		$exam_taken3= $row['exam_taken'];
		$ratio3 = $row['ratio'];
	}
	else if($row['co_id'] == 4)
	{
		$co14 = $row['co1'];
		$co24 = $row['co2'];
		$co34 = $row['co3'];
		$co44 = $row['co4'];
		$weight4 = $row['weight'];
		$exam_taken4= $row['exam_taken'];
		$ratio4 = $row['ratio'];
	}
	else if($row['co_id'] == 5)
	{
		$co15 = $row['co1'];
		$co25 = $row['co2'];
		$co35 = $row['co3'];
		$co45 = $row['co4'];
		$weight5 = $row['weight'];
		$exam_taken5= $row['exam_taken'];
		$ratio5 = $row['ratio'];
	}
	else if($row['co_id'] == 6)
	{
		$co16 = $row['co1'];
		$co26 = $row['co2'];
		$co36 = $row['co3'];
		$co46 = $row['co4'];
		$weight6 = $row['weight'];
		$exam_taken6= $row['exam_taken'];
		$ratio6 = $row['ratio'];
	}
	else if($row['co_id'] == 7)
	{
		$co17 = $row['co1'];
		$co27 = $row['co2'];
		$co37 = $row['co3'];
		$co47 = $row['co4'];
		$weight7 = $row['weight'];
		$exam_taken7= $row['exam_taken'];
		$ratio7 = $row['ratio'];
	}
}



?>

<table>
		<tr>
			<th>Instructor:</th>
			<th colspan = "2" input type="text" name="name" value="name" ><b>Instructor Name</b></th>
		</tr>
		</table>
		<table  Style="width:100%;">
		<tr>
			<th>course Code</th>
			<th><?php echo $course_code; ?></th>
			<th><?php echo $sec_no; ?></th>
			<th rowspan = "2" colspan = "3">Mid Term 1</th>
			<th><?php echo $weight3; ?></th>
			<th rowspan="3">Total</th>
			<th rowspan="3">Obtained</th>
			<th rowspan = "2" colspan = "3">Mid Term 2</th>
			<th><?php echo $weight4; ?></th>
			<th rowspan = "3"  >Total</th>
			<th rowspan = "3"  >Obtained</th>
			<th rowspan = "2" colspan = "3">Final</th>
			<th><?php echo $weight5; ?></th>
			<th rowspan = "3"  >Total</th>
			<th rowspan = "3"  >Obtained</th>
			<th rowspan = "2" colspan = "3">Class particiaption</th>
			<th><?php echo $weight1; ?></th>
			<th rowspan = "3"  >Total</th>
			<th rowspan = "3"  >Obtained</th>
			
			<th rowspan = "2" colspan = "3">Class Test</th>
			<th><?php echo $weight2; ?></th>
			<th rowspan = "3"  >Total</th>
			<th rowspan = "3"  >Obtained</th>
			
			<th rowspan = "2" colspan = "3">Project / Assignment</th>
			<th><?php echo $weight6; ?></th>
			<th rowspan = "3"  >Total</th>
			<th rowspan = "3"  >Obtained</th>
			
			<th rowspan = "2" colspan = "3">Lab</th>
			<th><?php echo $weight7; ?></th>
			<th rowspan = "3"  >Total</th>
			<th rowspan = "3"  >Obtained</th>
			<th rowspan = "4"  >Grand Total</th>
			<th rowspan = "4"  >Latter Grade</th>
			
		</tr>
		<tr>
			<th>Course Title </th>
			<th colspan = "2"><?php echo $Course_title; ?></th>
			<th><?php echo $exam_taken3; ?></th>
			<th><?php echo $exam_taken4; ?></th>
			<th><?php echo $exam_taken5; ?></th>
			<th><?php echo $exam_taken1; ?></th>
			<th><?php echo $exam_taken2; ?></th>
			<th><?php echo $exam_taken6; ?></th>
			<th><?php echo $exam_taken7; ?></th>
		</tr>
		<tr>
			<th>Credit</th>
			<th>4.0</th>
			<th>Spring 19</th>
			<!-- mid1-->
			<th>CO1</th>
			<th>CO2</th>
			<th>CO3</th>
			<th>CO4</th>
			<!-- mid1-->
			<th>CO1</th>
			<th>CO2</th>
			<th>CO3</th>
			<th>CO4</th>
			<th>CO1</th>
			<th>CO2</th>
			<th>CO3</th>
			<th>CO4</th>
			<th>CO1</th>
			<th>CO2</th>
			<th>CO3</th>
			<th>CO4</th>
			<th>CO1</th>
			<th>CO2</th>
			<th>CO3</th>
			<th>CO4</th>
			<th>CO1</th>
			<th>CO2</th>
			<th>CO3</th>
			<th>CO4</th>
			<th>CO1</th>
			<th>CO2</th>
			<th>CO3</th>
			<th>CO4</th>
		</tr>
		<tr>
			<th>SL</th>
			<th>Student ID</th>
			<th>Name</th>
			<th><?php echo $co13*(1/$ratio3); ?></th>
			<th><?php echo $co23*(1/$ratio3); ?></th>
			<th><?php echo $co33*(1/$ratio3); ?></th>
			<th><?php echo $co43*(1/$ratio3); ?></th>
			<th><?php echo $exam_taken3; ?></th>
			<th><?php echo $weight3; ?></th>
			
			<th><?php echo $co14*(1/$ratio4); ?></th>
			<th><?php echo $co24*(1/$ratio4); ?></th>
			<th><?php echo $co34*(1/$ratio4); ?></th>
			<th><?php echo $co44*(1/$ratio4); ?></th>
			<th><?php echo $exam_taken4; ?></th>
			<th><?php echo $weight4; ?></th>
			
			<th><?php echo $co15*(1/$ratio5); ?></th>
			<th><?php echo $co25*(1/$ratio5); ?></th>
			<th><?php echo $co35*(1/$ratio5); ?></th>
			<th><?php echo $co45*(1/$ratio5); ?></th>
			<th><?php echo $exam_taken5; ?></th>
			<th><?php echo $weight5; ?></th>
			
			<th><?php echo $co11*(1/$ratio1); ?></th>
			<th><?php echo $co21*(1/$ratio1); ?></th>
			<th><?php echo $co31*(1/$ratio1); ?></th>
			<th><?php echo $co41*(1/$ratio1); ?></th>
			<th><?php echo $exam_taken1; ?></th>
			<th><?php echo $weight1; ?></th>
			
			<th><?php echo $co12*(1/$ratio2); ?></th>
			<th><?php echo $co22*(1/$ratio2); ?></th>
			<th><?php echo $co32*(1/$ratio2); ?></th>
			<th><?php echo $co42*(1/$ratio2); ?></th>
			<th><?php echo $exam_taken2; ?></th>
			<th><?php echo $weight2; ?></th>
			
			
			<th><?php echo $co16*(1/$ratio6); ?></th>
			<th><?php echo $co26*(1/$ratio6); ?></th>
			<th><?php echo $co36*(1/$ratio6); ?></th>
			<th><?php echo $co46*(1/$ratio6); ?></th>
			<th><?php echo $exam_taken6; ?></th>
			<th><?php echo $weight6; ?></th>
			
			<th><?php echo $co17*(1/$ratio7); ?></th>
			<th><?php echo $co27*(1/$ratio7); ?></th>
			<th><?php echo $co37*(1/$ratio7); ?></th>
			<th><?php echo $co47*(1/$ratio7); ?></th>
			<th><?php echo $exam_taken7; ?></th>
			<th><?php echo $weight7; ?></th>
		</tr>
		<?php

		function print_value($value)
		{
			if ($value==-1) {
				echo "-";
			}
			else{
				echo $value;
			}
		}

		function print_obtain($value1,$value2)
		{
			if ($value1==-1) {
				return "-";
			}
			else{
				return $value1*$value2;
			}
		}

		function conv_value($value1,$value2)
		{
			if ($value1 == -1) {
				return 0;
			}
			return $value1*$value2;
		}

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


		$sql = "SELECT other.sec_id as section_id, student_list.student_id as std_uni_id,student_list.student_name as std_name,mid1.co1 as co1m1,mid1.co2 as co2m1,mid1.co3 as co3m1,mid1.co4 as co4m1,mid1.total as totalm1,mid2.co1 as co1m2,mid2.co2 as co2m2,mid2.co3 as co3m2,mid2.co4 as co4m2,mid2.total as totalm2,final.co1 as co1f,final.co2 as co2f,final.co3 as co3f,final.co4 as co4f,final.total as totalf,other.average as avgo,other.class_perticipation as cpo,other.project_assignment as project,other.lab as lab from student_list,mid1,mid2,final,other where student_list.student_id = mid1.student_id and student_list.student_id = mid2.student_id and student_list.student_id = final.student_id and student_list.student_id = other.student_id and mid1.sec_id=mid2.sec_id and mid1.sec_id = final.sec_id and mid1.sec_id = other.sec_id and mid1.sec_id = '$sec_id';";
		$result = $conn->query($sql);
		$sl = 1;
		if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
    			?>
    			<tr>
    			<td><?php echo $sl; ?></td>
    			<td><?php echo $row['std_uni_id']; ?></td>
    			<td><?php echo $row['std_name']; ?></td>
    			<td><?php print_value($row['co1m1']); ?></td>
    			<td><?php print_value($row['co2m1']); ?></td>
    			<td><?php print_value($row['co3m1']); ?></td>
    			<td><?php print_value($row['co4m1']); ?></td>
    			<td><?php print_value($row['totalm1']); ?></td>
    			<td><?php echo print_obtain($row['totalm1'],$ratio3); ?></td>

    			<td><?php print_value($row['co1m2']); ?></td>
    			<td><?php print_value($row['co2m2']); ?></td>
    			<td><?php print_value($row['co3m2']); ?></td>
    			<td><?php print_value($row['co4m2']); ?></td>
    			<td><?php print_value($row['totalm2']); ?></td>
    			<td><?php echo print_obtain($row['totalm2'],$ratio4); ?></td>

    			<td><?php print_value($row['co1f']); ?></td>
    			<td><?php print_value($row['co2f']); ?></td>
    			<td><?php print_value($row['co3f']); ?></td>
    			<td><?php print_value($row['co4f']); ?></td>
    			<td><?php print_value($row['totalf']); ?></td>
    			<td><?php echo print_obtain($row['totalf'],$ratio5); ?></td>

    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php print_value($row['cpo']) ?></td>
    			<td><?php echo print_obtain($row['cpo'],$ratio1) ?></td>

    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php print_value($row['avgo']) ?></td>
    			<td><?php echo print_obtain($row['avgo'],$ratio2) ?></td>

    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php print_value($row['project']) ?></td>
    			<td><?php echo print_obtain($row['project'],$ratio6) ?></td>

    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php echo "-"; ?></td>
    			<td><?php print_value($row['lab']) ?></td>
    			<td><?php echo print_obtain($row['lab'],$ratio7) ?></td>

    			<td><?php  $total_mark = conv_value($row['totalm1'],$ratio3)+conv_value($row['totalm2'],$ratio4)+conv_value($row['totalf'],$ratio5)+conv_value($row['cpo'],$ratio1)+conv_value($row['avgo'],$ratio2)+conv_value($row['project'],$ratio6)+conv_value($row['lab'],$ratio7) ;
    			echo $total_mark;
    			?></td>
    			<td><?php grade($total_mark); ?></td>
    		</tr>


    	<?php
    	$sl+=1;		
    		}
    	}
		

		?>
	</table>