<!DOCTYPE html>
<html>
<head>
	<title>Mid1</title>
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
		<button onclick="printElem('input_place')">Print</button>
		<div id="input_place" style="margin-top: 20px;">
		
		</div>
		
	
	<script type="text/javascript">
		function show_all_student_mark()
		{
			var sec_id = document.getElementById('sec_id').value;
			$('#input_place').load('php/mid1_print.php?sec_id='+sec_id);
		}

		function printElem(divId) {
			var content = document.getElementById(divId).innerHTML;
			var mywindow = window.open('', 'Print', 'height=600,width=800');

			mywindow.document.write('<html><head><title>Print</title>');
			mywindow.document.write('</head><body >');
			mywindow.document.write(content);
			mywindow.document.write('</body></html>');

			mywindow.document.close();
			mywindow.focus()
			mywindow.print();
			mywindow.close();
			return true;
		}
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>