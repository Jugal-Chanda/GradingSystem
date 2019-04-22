<table>
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Email</th>
        <th>Phone Number</th>
    </tr>


<?php
$sec_id = $_GET['sec_id'];
include 'connection.php';
$sql = "SELECT student_id,student_name,student_email,student_phone FROM student_list,student_sec WHERE student_list.s_id = student_sec.s_id AND student_sec.sec_id = '$sec_id';";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	?>
        <tr>
            <td><?php echo $row['student_id']; ?></td>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['student_email']; ?></td>
            <td><?php echo $row['student_phone']; ?></td>
        </tr>

<?php
    }
}

?>

</table>