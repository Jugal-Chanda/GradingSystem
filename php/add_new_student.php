<?php

include 'connection.php';
require_once '../Classes/PHPExcel/IOFactory.php';

if (isset($_FILES['excelfile']) && !empty($_FILES['excelfile']['tmp_name'])) {
    # code...
    $excelobject = PHPExcel_IOFactory::load($_FILES['excelfile']['tmp_name']);
    $getsheet = $excelobject->getActiveSheet()->toArray(null);
    for ($i=0; $i < count($getsheet);  $i++) { 
        echo $getsheet[$i][0]." ".$getsheet[$i][1]."<br>";
        $s_id = $getsheet[$i][0];
        $s_name = $getsheet[$i][1];
        $s_phone = "-";
		$s_email = "-";
		$section = $_POST['section'];
		$id = 0;

		$sql = "SELECT s_id FROM student_list WHERE student_id = '$s_id';";
		$result = $conn->query($sql);
		echo "num rows = ". $result->num_rows;
		if($result->num_rows == 0)
		{
			$sql = "INSERT INTO student_list (student_id,student_name,student_email,student_phone) VALUES ('$s_id','$s_name','$s_email','$s_phone');";
			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$sql = "SELECT s_id FROM student_list WHERE student_id = '$s_id';";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$id = $row['s_id'];
		}
		else{
			$row = $result->fetch_assoc();
			$id = $row['s_id'];
		}

		$sql = "INSERT INTO student_sec (s_id,sec_id) values('$id','$section');";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}


		$sql = "INSERT INTO mark (student_id,sec_id) VALUES ('$s_id','$section');";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$sql = "INSERT INTO mid1(student_id,sec_id) VALUES('$s_id','$section');";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$sql = "INSERT INTO mid2(student_id,sec_id) VALUES('$s_id','$section');";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$sql = "INSERT INTO final(student_id,sec_id) VALUES('$s_id','$section');";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$sql = "INSERT INTO other(student_id,sec_id) VALUES('$s_id','$section');";
		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

	}
}

?>