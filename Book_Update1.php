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
		
		<div style="border:2px solid black; background-color:gray;width:100%;margin:0 auto;text-align:center;height:300px"><h1>Book Update</h1>
		<div style="width:30%;height:100%;float:left;padding-left:10px">
		<form style="width:28%;height:auto;float:left;">
		  <input type="text" name="Book id">:Book_Id<br><br/>
		  <button><a href="Book_Update1.php">Search</a></button><br/><br/>
		</form>
		<table style="width:28%;height:auto">
  <tr class="t1">
    <th>Book_id</th>
    <th>Title</th> 
    <th>Author_name</th>
    <th>Cost</th>
    <th>Quantity</th>
    <th></th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
    <td>50</td>
    <td>50</td>
    <td><a href="Book_Update2.php">Edit</button></a></button></td>
  </tr>
  
</table>

	</div>
	<div style="width:68%;float:right;"><img src="picture/library.jpg" width=48%; height=200px/>  <img src="picture/books-1.jpg" width=48%; height=200px/></div>
	</div>
	
	
	
	</body>
</html>