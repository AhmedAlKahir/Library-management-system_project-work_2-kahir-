<?php
	include("include/config.php")
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Library</title>
		<link href="menu.css" rel="stylesheet">
		
	</head>
	
	<body>
		<?php
			include("include/student_header_menu.php")
		?>
		
		<div style="border:2px solid black; background-color:gray;width:100%;margin:0 auto; text-align:center;height:300px">
		<u><h1>Issue Book</h1></u>
		<form style="width:80%;height:90%;float:center;">
		  Student Id:<input type="number" name="Student id"><br><br/>
		  Student Name:<input type="text" name="Student Name"><br><br/>
		  Book Name:<input type="text" name="Book Name"><br><br/>
		  Suggested:<input type="text" name="Suggested"><br><br/>
		  Author Name:<input type="text" name="Author name"><br><br>
		  <button><a href="Issue_Book1.php">Issue</a></button>
		</form>
		</div>
	</body>

</html>
