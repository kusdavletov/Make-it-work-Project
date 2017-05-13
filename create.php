<?php
$fio = $_POST['student_fio'];
$class = $_POST['class'];
$score = $_POST['score'];
$enrollment = $_POST['enrollment'];
$graduation = $_POST['graduation'];

include("connection.php");

$query = "INSERT INTO `student`(`student_fio`, `student_class`, `student_score`, `student_enrollment`, `student_graduation`) VALUES ('$fio', $class, $score, '$enrollment', '$graduation')";
$result = mysql_query($query);
header("location: students.php");
?>
