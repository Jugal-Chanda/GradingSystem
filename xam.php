<!DOCTYPE html>
<html>
<head>
	<title>Mid1</title>
</head>
<style>
        table 
        {
        	width: 100%;
            font: 17px Calibri;
        }
        table, th, td 
        {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
        }
        th, td{
        	width: 9%;
        }
    </style>
    <?php include 'php/connection.php'; ?>
<body onload="show_all_student_mark()">
	<table>
		<tr style="height: 20px;">
			<td style="width: 10%;"></td>
			<td colspan="2">
				Course
			</td>
			<td colspan="2">
				  <?php
                    
                    $sql = "SELECT * from course";
                    $result = $conn->query($sql);

                    ?>
                    <select name="curse" style="width: 100%;" onchange="select_sec()" id="curse">
                        <option></option>
                        <?php
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row['c_id']; ?>"><?php echo $row['course_id']; ?></option>
                    <?php } } ?>
                    </select>
			</td>
			<td></td>
			<td colspan="2">Section</td>
			<td colspan="2">
				<select name="section" style="width: 100%;" id="section"></select>
			</td>
			<td></td>
		</tr>
		<tr>
			<th style="width: 10%;">Student Id</th>
			<th>MID1</th>
			<th>MID2</th>
			<th>Final</th>
			<th>Quize1</th>
			<th>Quize2</th>
			<th>Quize3</th>
			<th>Project</th>
			<th>Lab</th>
			<th>Class Perticipation</th>
			<th>Quize</th>
		</tr>
		<form method="POST" name="add_mark">
		<tr>
			<td style="width: 10%;"> <input type="text" name="s_id" id="s_id" onkeyup="id_valid()"></td>
			<td> <input type="number"  step="0.01" name="mid1" id="mid1" required=""></td>
			<td> <input type="number"  step="0.01" name="mid2" id="mid2" required=""></td>
			<td> <input type="number"  step="0.01" name="final" id="final" required=""></td>
			<td> <input type="number"  step="0.01" name="quize1" onchange="quize_fun()" id="quize1" required=""></td>
			<td> <input type="number"  step="0.01" name="quize2" onchange="quize_fun()" id="quize2" required=""></td>
			<td> <input type="number"  step="0.01" name="quize3"  onchange="quize_fun()" id="quize3" required=""></td>
			<td> <input type="number"  step="0.01" name="project" id="project" required=""></td>
			<td> <input type="number"  step="0.01" name="lab" id="lab" required=""></td>
			<td> <input type="number"  step="0.01" name="class_p" id="class_p" required=""></td>
			<td> <input type="number"  step="0.01" name="quize" id="quize" required=""></td>

		</tr>
		</form>
		<tr>
			<td colspan="11" style="text-align: center;">
				<button style="text-align: center;" onclick="add_marks()" id="add_btn">Add</button>
			</td>
		</tr>
	</table>

	<div>
		<select style="margin-left: 40%;margin-top: 50px; width: 20%;" id="sec_id" onchange="show_all_student_mark()">
			<option value="0" selected=""></option>
		 <?php

		 $sql = "SELECT course.course_id as course_code,sec_no,sec_id FROM sec,course WHERE course.c_id = sec.course_id;";
		 $result = $conn->query($sql);
		 if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {

		 ?>
		 <option value="<?php echo $row['sec_id'] ?>"><?php echo $row['course_code']." Sec ".$row['sec_no']; ?></option>
		<?php  } } ?>
			
		</select>
	</div>

	<div id="show_all_mark" style="margin-top: 20px;">
		
	</div>

<script type="text/javascript" src="js/xam_js.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>