<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Kusdavletov Ernar">
	<title>Class profile</title>
</head>
<body>
<?php
include("connection.php");		

$id = $_REQUEST['id']; # id eto id classa
$query = "SELECT * FROM class WHERE id = $id";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<h1>Class <?= $row['id'] ?></h1>
<h3>Teacher: <?= $row['fio_teacher'] ?> </h3>
<h3>Average score: <?= $row['average_point'] ?> </h3>
<h3>Number of students: <?= $row['number_of_students'] ?></h3>
<h3>Students list: </h3>

<?php

$id = $_REQUEST['id'];
$query="SELECT * FROM student WHERE student_class = $id";
$result = mysql_query($query);
$number = mysql_num_rows($result);
for ($i = 0; $i < $number; $i++){
	$row = mysql_fetch_array($result);
	?>
	<ul type="i">
		<li><a href = "profile_student.php?id=<?= $row['student_id'] ?>"><?= $row['student_fio'] ?></a></li>	
	</ul>
	<?php
}
?>
<a href = "class.php">Back</a>
</body>
</html>