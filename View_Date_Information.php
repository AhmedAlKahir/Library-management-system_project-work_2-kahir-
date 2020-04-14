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
		<u><h1>Fine Details</h1></u>
		<form style="width:80%;height:90%;float:center;">
		  Student Id:<input type="number" name="Student id"><br><br/>
		  Book Id:<input type="number" name="Book id"><br><br/>
		  <button><a href="View_Date_Information1.php">Search</a></button>
		</form>
		</div>
	</body>

</html>
