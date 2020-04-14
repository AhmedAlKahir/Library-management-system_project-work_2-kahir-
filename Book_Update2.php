<?php
	include("include/config.php")
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Library</title>
		<link href="menu.css" rel="stylesheet">
		<style>
			table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
		.t1{
		 background-color:#C60000;}
		</style>
		
	</head>
	
	<body>
		<?php
			include("include/header_menu.php")
		?>
		
		<div style="border:2px solid black; background-color:gray;width:100%;margin:0 auto; text-align:center;height:300px;padding-left:10px;">
		<u><h1>Book Update</h1></u>
		<div style="border:2px solid black; background-color:green;float:left;padding-left:10px;width:350px; text-align:left;height:auto">
		<form style="width:80%;height:90%;float:center;background-color:green;">
		  <input type="number" name="Student id">:Book Id<br><br>
		  <input type="text" name="Student Name">:Title<br><br>
		  <input type="text" name="Book Name">:Author Name<br></br>
		  <input type="text" name="Suggested">:Cost<br><br>
		  <input type="text" name="Author name">:Quantity<br></br>
		  <button><a href="Book_Update3.php">Update</a></button>
		  <button><a href="Book_Update1.php">Cancel</a></button><br>
		</form>
		</div>
		<div style="width:65%;float:right;"><img src="picture/library.jpg" width=48%; height=200px/>  <img src="picture/books-1.jpg" width=48%; height=200px/></div>
		</div>
	</body>
</html>