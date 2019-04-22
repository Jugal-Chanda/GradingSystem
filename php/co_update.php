<?php

include 'connection.php';
$co11 = $_POST['co11'];
$co21 = $_POST['co21'];
$co31 = $_POST['co31'];
$co41 = $_POST['co41'];
$weight1 = $_POST['weight1'];
$exam_taken1 = $_POST['exam_taken1'];


$co12 = $_POST['co12'];
$co22 = $_POST['co22'];
$co32 = $_POST['co32'];
$co42 = $_POST['co42'];
$weight2 = $_POST['weight2'];
$exam_taken2 = $_POST['exam_taken2'];

$co13 = $_POST['co13'];
$co23 = $_POST['co23'];
$co33 = $_POST['co33'];
$co43 = $_POST['co43'];
$weight3 = $_POST['weight3'];
$exam_taken3 = $_POST['exam_taken3'];

$co14 = $_POST['co14'];
$co24 = $_POST['co24'];
$co34 = $_POST['co34'];
$co44= $_POST['co44'];
$weight4 = $_POST['weight4'];
$exam_taken4 = $_POST['exam_taken4'];

$co15 = $_POST['co15'];
$co25 = $_POST['co25'];
$co35 = $_POST['co35'];
$co45= $_POST['co45'];
$weight5 = $_POST['weight5'];
$exam_taken5 = $_POST['exam_taken5'];

$co16 = $_POST['co16'];
$co26 = $_POST['co26'];
$co36 = $_POST['co36'];
$co46 = $_POST['co46'];
$weight6 = $_POST['weight6'];
$exam_taken6 = $_POST['exam_taken6'];

$co17 = $_POST['co17'];
$co27 = $_POST['co27'];
$co37 = $_POST['co37'];
$co47 = $_POST['co47'];
$weight7 = $_POST['weight7'];
$exam_taken7 = $_POST['exam_taken7'];

$ratio1 = $weight1/$exam_taken1;
$ratio2 = $weight2/$exam_taken2;
$ratio3 = $weight3/$exam_taken3;
$ratio4 = $weight4/$exam_taken4;
$ratio5 = $weight5/$exam_taken5;
$ratio6 = $weight6/$exam_taken6;
$ratio7 = $weight7/$exam_taken7;

$sql = "UPDATE co SET co1='$co11',co2='$co21',co3='$co31',co4='$co41',weight='$weight1',exam_taken='$exam_taken1',ratio='$ratio1' WHERE co_id=1;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE co SET co1='$co12',co2='$co22',co3='$co32',co4='$co42',weight='$weight2',exam_taken='$exam_taken2',ratio='$ratio2' WHERE co_id=2;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE co SET co1='$co13',co2='$co23',co3='$co33',co4='$co43',weight='$weight3',exam_taken='$exam_taken3',ratio='$ratio3' WHERE co_id=3;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE co SET co1='$co14',co2='$co24',co3='$co34',co4='$co44',weight='$weight4',exam_taken='$exam_taken4',ratio='$ratio4' WHERE co_id=4;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE co SET co1='$co15',co2='$co25',co3='$co35',co4='$co45',weight='$weight5',exam_taken='$exam_taken5',ratio='$ratio5' WHERE co_id=5;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE co SET co1='$co16',co2='$co26',co3='$co36',co4='$co46',weight='$weight6',exam_taken='$exam_taken6',ratio='$ratio6' WHERE co_id=6;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql = "UPDATE co SET co1='$co17',co2='$co27',co3='$co37',co4='$co47',weight='$weight7',exam_taken='$exam_taken7',ratio='$ratio7' WHERE co_id=7;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

header("Location: ../co.php");


?>