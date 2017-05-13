<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Kusdavletov Ernar">
	<title>Students</title>
	<style>
		h2{
			font-size: 200%;	
			color: black;
		}
		a{
			font-size: 150%;
		}
		a:link {
		    color: green; 
		    background-color: transparent; 
		    text-decoration: underline;
		}	
		a:visited {
	    	color: grey;
   			background-color: transparent;
   			text-decoration: underline;
		}
		a:hover {
    		color: red;
    		background-color: transparent;
    		text-decoration: underline;
		}
		a:active {
    		color: yellow;
    		background-color: transparent;
    		text-decoration: underline;
		}
		ul{
			list-style-type: none;
		}
		li a {
		    display: block;
    		text-align: left;
    		padding: 10px;
    		text-decoration: none;
		}
		li a:hover {
		    background-color: powderblue;
		}
	</style>
</head>
<body>
<h2>Students</h2>
<?php
include("connection.php");

$query="SELECT * FROM student";
$result = mysql_query($query);
$number = mysql_num_rows($result);
for ($i = 0; $i < $number; $i++){
	$row = mysql_fetch_array($result);
	?>
	<ul type="i">
		<li><a href = "profile_student.php?id=<?= $row['student_id'] ?>"><?= $row['student_fio'] ?></a></li><br>		
	</ul>
	<?php
}
?>
<br>
<a href = "forma.php">Add student</a><br><br>
<a href = "mit.html">Back</a>
</body>