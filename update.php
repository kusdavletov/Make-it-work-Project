<?php
$id = $_POST['id'];
$fio = $_POST['student_fio'];
$class = $_POST['class'];
$score = $_POST['score'];
$enrollment = $_POST['enrollment'];
$graduation = $_POST['graduation'];

include("connection.php");

$query = "UPDATE `student` SET `student_fio`='$fio', `student_class`='$class', `student_score`='$score', `student_enrollment`='$enrollment', `student_graduation`='$graduation' WHERE `student_id`='$id'";
$result = mysql_query($query);
header("location: students.php");
?>
