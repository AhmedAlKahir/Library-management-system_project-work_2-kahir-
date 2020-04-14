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
		  Issue date:10/10/2019</br></br>
		  Expairy date:24/10/2019
		  <h3>You have to give back the book before 14 days</h3>
		  <h3>If you give back the book after 14 days,you have to pay fine</h3>
		</form>
		</div>
	</body>

</html>
