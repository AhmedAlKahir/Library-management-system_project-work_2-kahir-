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
		<h1>Return Book</h1>
		<form style="width:80%;height:90%;float:center;">
		  Student Id:<input type="number" name="Student id"><br><br/>
		  Book Name:<input type="text" name="Book Name"><br><br/>
		  Author Name:<input type="text" name="Author name"><br><br>
		  <button><a href="student_page.php">Return</a></button>
		</form>
		</div>
	</body>

</html>
