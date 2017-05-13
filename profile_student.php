<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Kusdavletov Ernar">
	<title>Student profile</title>
</head>
<body>
<?php

include("connection.php");		

$id = $_REQUEST['id'];
$query = "SELECT * FROM student WHERE student_id = $id";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<h1><?= $row['student_fio'] ?></h1>
<h3>
	<?php
	$student_class = $row['student_class'];
	$query1 = "SELECT * FROM class WHERE id = $student_class";
	$result1 = mysql_query($query1);
	$row1 = mysql_fetch_array($result1);
	?>
	<a href = "profile_class.php?id=<?= $row1['id'] ?>">Class <?= $row1['id'] ?></a>
</h3>
<h3>Score: <?= $row['student_score'] ?> </h3>
<h3>Date of enrollment: <?= $row['student_enrollment'] ?></h3>
<h3>Date of graduation: <?= $row['student_graduation'] ?></h3>
<br>
<a href="edit.php?id=<?= $id ?>">Edit profile</a><br><br>
<a href = "students.php">Back</a>
</body>
</html>