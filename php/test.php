<?php
/*insert value at mid1*/
$sql = "INSERT INTO mid1 (student_id,sec_id) SELECT student_id,sec_id FROM student_sec,student_list WHERE student_list.s_id=student_sec.s_id;";
/*insert value at mid2*/
$sql = "INSERT INTO mid2 (student_id,sec_id) SELECT student_id,sec_id FROM student_sec,student_list WHERE student_list.s_id=student_sec.s_id;";
/*insert value at final*/
$sql = "INSERT INTO final (student_id,sec_id) SELECT student_id,sec_id FROM student_sec,student_list WHERE student_list.s_id=student_sec.s_id;";


?>