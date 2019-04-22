<!DOCTYPE html>
<html>
<head>
	<title>MID1</title>
	<style type="text/css">
	table 
        {
            font: 17px Calibri;
            width: 60%;
            margin: auto;
        }
        table, th, td 
        {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;

        }
        </style>
</head>
<?php include 'php/connection.php'; ?>
<body>
	<select style="margin-left: 40%; width: 20%;" id="sec_id" onchange="show_all_student_mark()">
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

		<div id="input_place">
			
		</div>
	
	<script type="text/javascript" src="js/mid1_js.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>