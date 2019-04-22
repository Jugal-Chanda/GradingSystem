<!DOCTYPE html>
<html>
<head>
    <title>Student</title>

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
        td,th{
        	width: 25%;
        }
    </style>
</head>
<?php include 'php/connection.php'; ?>
<body>

    <div>
        <div style="width: 10%;margin: auto;" >
            <form name="add_student" method="">
                <select style="width: 100%;" required="" name="section" id="section" onchange="student_list()">
                    <option value="0"></option>
                    <?php
                    $sql = "SELECT course.course_id as course_code,sec_no,sec_id FROM sec,course WHERE course.c_id = sec.course_id;";
                     $result = $conn->query($sql);
                     if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {

                    ?>
                    <option value="<?php echo $row['sec_id'] ?>"><?php echo $row['course_code']." Sec ".$row['sec_no']; ?></option>
                     <?php  } } ?>
                </select>
                <input type="file" name="excelfile" id="file" accept=".xls,.xlsx" style="margin-top: 10px;" required="">
           </form>
           <button onclick="add_new_student()"  style="margin-top: 10px;">Add Students</button>
        </div>
       
    </div>
   
    <div id="student_table_here" style="margin-top: 30px;"></div>
    <script type="text/javascript" src="js/student_js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>