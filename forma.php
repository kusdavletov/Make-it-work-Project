<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Kusdavletov Ernar">
	<title>Add student</title>
</head>
<body>
<?php
	include("connection.php");
	$query = "SELECT * FROM class";
	$result = mysql_query($query);
	$number = mysql_num_rows($result);
?>
	<h1>Please fill the form:</h1>
	<form action="create.php" method = "post">
		Name: 
		<input type="text" name="student_fio"><br><br>
		Class:   
		<select name="class">
			<option selected disabled>Choose</option>
			<?php                                
			for ($i = 0; $i < $number; $i++){
				$row = mysql_fetch_array($result);
				?>
				<option value="<?= $row['id'] ?>"><?= $row['id'] ?></option>
				<?php
			}
			?>
		</select><br><br> 
		Score:
		<input type="text" name="score"><br><br>
		Enrollment:
		<input type="text" name="enrollment"><br><br>
		Graduation:
		<input type="text" name="graduation"><br><br>
		<input type="submit" value="Create">
	</form>
	
</body>