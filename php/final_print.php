<?php

$sec_id =$_GET['sec_id'];
include 'connection.php';

$sql = "SELECT weight,exam_taken from co where co_id=5;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$weight = $row['weight'];
$exam_taken = $row['exam_taken'];

$sql = "SELECT course.course_id as course_code,Course_title,sec_no from course,sec where sec.course_id=course.c_id AND sec.sec_id = '$sec_id';";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$course_code = $row['course_code'];
$Course_title = $row['Course_title'];
$sec_no =$row['sec_no'];


?>

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

<table style="width: 90%;margin-left: 5%;margin-right: 5%;">
    <caption style="text-align: center;margin-bottom: 20px;">
        <b>Final Exam Spring 2019</b><br>
        <b>Course Code: <?php echo $course_code; ?></b><b> Section : <?php echo $sec_no; ?></b><br>
        <b>Course Title:<?php echo $Course_title; ?></b><br>
        <b>Mid Term 1 Weight(%):<?php echo $weight; ?></b><br>
        <b>Full Mark <?php echo $exam_taken; ?></b>

    </caption>
    <tr>
        <th style="width: 10%;">Sl No</th>
        <th style="width: 30%;">Student Id</th>
        <th style="width: 30%;">Student Name</th>
        <th style="width: 30%;">Mark Obtain</th>
    </tr>


<?php

$sql = "SELECT total,student_list.student_id,student_list.student_name FROM final,student_list where student_list.student_id=final.student_id and final.sec_id = '$sec_id';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $sl=1;
    while($row = $result->fetch_assoc()) {
?>
    <tr>
        <td style="width: 10%;"><?php echo $sl; ?></td>
        <td style="width: 30%;"><?php echo $row['student_id']; ?></td>
        <td style="width: 30%;"><?php echo $row['student_name'] ;?></td>
        <td style="width: 30%;"><?php
        if ($row['total'] ==-1) {
            echo "-";
        }else{
            echo $row['total'];
        }
        ?></td>
    </tr>

<?php
$sl+=1;
}
}
?>
</table>