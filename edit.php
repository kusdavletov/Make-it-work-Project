<!DOCTYPE html>
<head>
	<title>Edit profile</title>
	<meta charset="UTF-8">
	<meta name="author" content="Kusdavletov Ernar">
</head>
<body>
<?php
	include("connection.php");
	$id = $_REQUEST['id'];
	$query1 = "SELECT * FROM student WHERE student_id = $id";
	$query2 = "SELECT * FROM class";
	$result1 = mysql_query($query1);
	$result2 = mysql_query($query2);
	$number = mysql_num_rows($result2);
	$r = mysql_fetch_array($result1);
?>
	<h1>Edit profile</h1>
	<form action="update.php" method="post">
		Name: 
		<input type="text" name="student_fio" value="<?= $r['student_fio'] ?>"><br><br>
		Class: 
		<select name="class">
			<option selected disabled>Choose</option>
			<?php                               
			for ($i = 1; $i <= $number; $i++){
				$row = mysql_fetch_array($result2);
				?>
				<option value="<?= $row['id'] ?>"><?= $row['id'] ?></option>
				<?php
			}
			?>
		</select><br><br> 
		Score: 
		<input type="text" name="score" value="<?= $r['student_score'] ?>"><br><br>
		Enrollment: 
		<input type="text" name="enrollment" value="<?= $r['student_enrollment'] ?>"><br><br>
		Graduation: 
		<input type="text" name="graduation" value="<?= $r['student_graduation'] ?>"><br><br>
		<input type="hidden" name="id" value = "<?= $r['student_id'] ?>">
		<input type="submit" value="Update">
	</form>
</body>