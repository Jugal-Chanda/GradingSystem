<!DOCTYPE html>
<html>
<head>
	<title>Co</title>
</head>
<?php include 'php/connection.php'; ?>

 <style>
        table 
        {
            font: 17px Calibri;
            width: 70%;
        }
        table, th, td 
        {
            border: solid 1px #DDD;
            border-collapse: collapse;
            padding: 2px 3px;
            text-align: center;
        }

        th,td {
        	width: 10%;
        }
    </style>
<body onload="co_cal()">
	<form method="POST" action="php/co_update.php">
	<table style="margin: auto;margin-top: 50px;">
		<tr>
			<th>Assessment Items</th>
			<th>CO1</th>
			<th>CO2</th>
			<th>CO3</th>
			<th>CO4</th>
			<th>Weight</th>
			<th>Exam Taken In</th>
		</tr>
		<?php
			$sql = "SELECT * FROM co;";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
		?>
		
		<tr>
			<td><?php echo $row['assess_items']; ?></td>
			<td><input type="number" name="co11" style="width: 100%;" onchange="co_cal()" id="co11" step="0.01" value="<?php echo $row['co1']; ?>"></td>
			<td><input type="number" name="co21" style="width: 100%;" onchange="co_cal()" id="co21" step="0.01" value="<?php echo $row['co2']; ?>"></td>
			<td><input type="number" name="co31"  style="width: 100%;" onchange="co_cal()" id="co31"  step="0.01" value="<?php echo $row['co3']; ?>"></td>
			<td><input type="number" name="co41" style="width: 100%;" onchange="co_cal()" id="co41" step="0.01" value="<?php echo $row['co4']; ?>"></td>
			<td><input type="number" name="weight1" style="width: 100%;" id="weight1" step="0.01" value="<?php echo $row['weight']; ?>"></td>
			<td><input type="number" name="exam_taken1" style="width: 100%;" onchange="co_cal()" step="0.01" id="exam_taken1" value="<?php echo $row['exam_taken']; ?>"></td>
		</tr>
		<?php
		$row = $result->fetch_assoc();
		?>
		<tr>
			<td><?php echo $row['assess_items']; ?></td>
			<td><input type="number" name="co12" style="width: 100%;" onchange="co_cal()" id="co12" step="0.01" value="<?php echo $row['co1']; ?>"></td>
			<td><input type="number" name="co22" style="width: 100%;" onchange="co_cal()" id="co22" step="0.01" value="<?php echo $row['co2']; ?>"></td>
			<td><input type="number" name="co32" style="width: 100%;" onchange="co_cal()" id="co32" step="0.01" value="<?php echo $row['co3']; ?>"></td>
			<td><input type="number" name="co42" style="width: 100%;" onchange="co_cal()" id="co42" step="0.01" value="<?php echo $row['co4']; ?>"></td>
			<td><input type="number" name="weight2" id="weight2" style="width: 100%;" step="0.01" value="<?php echo $row['weight']; ?>"></td>
			<td><input type="number" name="exam_taken2" style="width: 100%;" onchange="co_cal()" step="0.01" id="exam_taken2" value="<?php echo $row['exam_taken']; ?>"></td>
		</tr>
		<?php
		$row = $result->fetch_assoc();
		?>
		<tr>
			<td><?php echo $row['assess_items']; ?></td>
			<td><input type="number" name="co13" style="width: 100%;" onchange="co_cal()" id="co13" step="0.01" value="<?php echo $row['co1']; ?>"></td>
			<td><input type="number" name="co23" style="width: 100%;" onchange="co_cal()" id="co23" step="0.01" value="<?php echo $row['co2']; ?>"></td>
			<td><input type="number" name="co33" style="width: 100%;" onchange="co_cal()" id="co33" step="0.01" value="<?php echo $row['co3']; ?>"></td>
			<td><input type="number" name="co43" style="width: 100%;" onchange="co_cal()" id="co43" step="0.01" value="<?php echo $row['co4']; ?>"></td>
			<td><input type="number" name="weight3" id="weight3" style="width: 100%;"  step="0.01" value="<?php echo $row['weight']; ?>"></td>
			<td><input type="number" name="exam_taken3" style="width: 100%;" onchange="co_cal()" id="exam_taken3" step="0.01" value="<?php echo $row['exam_taken']; ?>"></td>
		</tr>

		<?php
		$row = $result->fetch_assoc();
		?>
		<tr>
			<td><?php echo $row['assess_items']; ?></td>
			<td><input type="number" name="co14" style="width: 100%;" onchange="co_cal()" id="co14" step="0.01" value="<?php echo $row['co1']; ?>"></td>
			<td><input type="number" name="co24" style="width: 100%;" onchange="co_cal()" id="co24" step="0.01" value="<?php echo $row['co2']; ?>"></td>
			<td><input type="number" name="co34" style="width: 100%;" onchange="co_cal()" id="co34" step="0.01" value="<?php echo $row['co3']; ?>"></td>
			<td><input type="number" name="co44" style="width: 100%;" onchange="co_cal()" id="co44" step="0.01" value="<?php echo $row['co4']; ?>"></td>
			<td><input type="number" name="weight4" id="weight4" style="width: 100%;" step="0.01" value="<?php echo $row['weight']; ?>"></td>
			<td><input type="number" name="exam_taken4" style="width: 100%;" onchange="co_cal()" id="exam_taken4" step="0.01" value="<?php echo $row['exam_taken']; ?>"></td>
		</tr>

		<?php
		$row = $result->fetch_assoc();
		?>
		<tr>
			<td><?php echo $row['assess_items']; ?></td>
			<td><input type="number" name="co15" style="width: 100%;" onchange="co_cal()" id="co15" step="0.01" value="<?php echo $row['co1']; ?>"></td>
			<td><input type="number" name="co25" style="width: 100%;" onchange="co_cal()" id="co25" step="0.01" value="<?php echo $row['co2']; ?>"></td>
			<td><input type="number" name="co35" style="width: 100%;" onchange="co_cal()" id="co35" step="0.01" value="<?php echo $row['co3']; ?>"></td>
			<td><input type="number" name="co45" style="width: 100%;" onchange="co_cal()" id="co45" step="0.01" value="<?php echo $row['co4']; ?>"></td>
			<td><input type="number" name="weight5" style="width: 100%;" id="weight5" step="0.01" value="<?php echo $row['weight']; ?>"></td>
			<td><input type="number" name="exam_taken5" style="width: 100%;" onchange="co_cal()" id="exam_taken5" step="0.01" value="<?php echo $row['exam_taken']; ?>"></td>
		</tr>

		<?php
		$row = $result->fetch_assoc();
		?>
		<tr>
			<td><?php echo $row['assess_items']; ?></td>
			<td><input type="number" name="co16" style="width: 100%;" onchange="co_cal()" id="co16" step="0.01" value="<?php echo $row['co1']; ?>"></td>
			<td><input type="number" name="co26" style="width: 100%;" onchange="co_cal()" id="co26" step="0.01" value="<?php echo $row['co2']; ?>"></td>
			<td><input type="number" name="co36" style="width: 100%;" onchange="co_cal()" id="co36" step="0.01" value="<?php echo $row['co3']; ?>"></td>
			<td><input type="number" name="co46" style="width: 100%;" onchange="co_cal()" id="co46" step="0.01" value="<?php echo $row['co4']; ?>"></td>
			<td><input type="number" name="weight6" id="weight6" style="width: 100%;" step="0.01" value="<?php echo $row['weight']; ?>"></td>
			<td><input type="number" name="exam_taken6" style="width: 100%;" onchange="co_cal()" id="exam_taken6" step="0.01" value="<?php echo $row['exam_taken']; ?>"></td>
		</tr>

		<?php
		$row = $result->fetch_assoc();
		?>
		<tr>
			<td><?php echo $row['assess_items']; ?></td>
			<td><input type="number" name="co17" style="width: 100%;" onchange="co_cal()" id="co17" step="0.01" value="<?php echo $row['co1']; ?>"></td>
			<td><input type="number" name="co27" style="width: 100%;" onchange="co_cal()" id="co27" step="0.01" value="<?php echo $row['co2']; ?>"></td>
			<td><input type="number" name="co37" style="width: 100%;" onchange="co_cal()" id="co37" step="0.01" value="<?php echo $row['co3']; ?>"></td>
			<td><input type="number" name="co47" style="width: 100%;" onchange="co_cal()" id="co47" step="0.01" value="<?php echo $row['co4']; ?>"></td>
			<td><input type="number" name="weight7" id="weight7" style="width: 100%;"  step="0.01" value="<?php echo $row['weight']; ?>"></td>
			<td><input type="number" name="exam_taken7" style="width: 100%;" onchange="co_cal()" id="exam_taken7" step="0.01" value="<?php echo $row['exam_taken']; ?>"></td>
		</tr>
		<tr>
			<td>Total</td>
			<td id="total1"></td>
			<td id="total2"></td>
			<td id="total3"></td>
			<td id="total4"></td>
			<td id="total5"></td>
			<td id="total6"></td>
		</tr>
		<tr>
			<td colspan="7" style="text-align: center;"><input type="submit" name="submit" style="width: 100%;" value="Update Co" id="co_update_button" style="text-align: center;"></td>
		</tr>
	</table>

	</form>

	<script type="text/javascript" src="js/co_js.js"></script>
</body>
</html>