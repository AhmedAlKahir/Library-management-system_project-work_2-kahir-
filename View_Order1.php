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
		
		<div style="border:2px solid black; background-color:gray;width:100%;margin:0 auto;text-align:center;height:300px"><h1>View Order</h1>
		<div style="width:40%;height:100%;float:left;padding-left:10px">
		<table style="width:38%;height:auto">
		  <tr class="t1">
			<th>Book_name</th>
			<th>Author_name</th> 
			<th>Student_id</th>
			<th>Student_name</th>
			<th>Issue_date</th>
			<th>Expiry_date</th>
		  </tr>
		  <tr>
			<td>Java</td>
			<td>Smith</td>
			<td>09</td>
			<td>Areya</td>
			<td>10/22/19</td>
			<td>11/10/19</td>
		  </tr>
		  
		</table><br/>
		
		<form style="width:38%;height:auto;float:left;">
		  <input type="text" name="Book id">:Book_name<br><br>
		  <input type="text" name="Book id">:Suggest<br><br>
		  <input type="text" name="Book id">:Author_name<br>
		  <button><a href="View_Order1.php">Search</a></button>
		  <h3>Total number of order=1</h3>
		</form>

		</div>
		<div style="width:58%;float:right;"><img src="picture/library.jpg" width=48%; height=200px/>  <img src="picture/books-1.jpg" width=48%; height=200px/></div>
		
		</div>
	</body>
</html>