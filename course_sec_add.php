<!DOCTYPE html>
<html>
<head>
	<title>Corse Sec</title>
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
</head>
<?php include 'php/connection.php'; ?>
<body>
	<form method="post" action="php/course_add.php">
	<table style="width: 50%;margin: auto;">
		<tr>
			<td>Course Code</td>
			<td><input type="text" name="course_code" required="" style="width: 60%"></td>
		</tr>
		<tr>
			<td>Course Title</td>
			<td><input type="Text" name="course_title" required="" style="width: 60%;"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">
				<input type="submit" name="submit" value="Add Course">
			</td>
		</tr>
		
	</table>
	</form>

	<form method="post" action="php/section_add.php">

		<table style="width: 50%;margin: auto;margin-top: 20px;">
			<tr>
			<td>Course Code</td>
			<td ><select name="course_id" style="width: 60%;">
			<?php 
			$sql = "SELECT * FROM course;";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
			?>
			<option value="<?php echo $row['c_id'] ?>"><?php echo $row['course_id']; ?></option>
		<?php } } ?>

			</select>
		</td>
		</tr>
		<tr>
			<td>Section No</td>
			<td><input type="number" name="sec_no" required="" style="width: 60%;"></td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: center;">
				<input type="submit" name="submit" value="Add Section">
			</td>
		</tr>
		</table>
		

	</form>
</body>
</html>