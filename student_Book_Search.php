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
		</style>	
	</head>
	
	<body>
		<?php
			include("include/student_header_menu.php")
		?>
		
		<div style="border:2px solid black; background-color:gray;width:98%;margin:0 auto;padding:10px;text-align:center;height:auto"><h1>Book Search</h1>
		
			
			
			<?php
				if (isset($_POST['search']))
				{
					$sk=$_POST['search'];
					$sql="select * from book_accession where title like '%$sk%' or accession_no like '%$sk%'"; 	 
				}
				else
				{
					$sql="select * from book_accession";
					$sk=""; 
				}
				$result=mysqli_query($con,$sql);
			?>
			<form  action="Student_Book_Search.php" method="POST">
			  <input type="text" name="search" placeholder="Search By Book Name or Id"; value="<?php echo $sk; ?>"> <button>Search</button><br><br>
			  
			</form>
				
			<table style="width:98%; height:auto">
			  <tr>
				<th>Date</th>
				<th>Book_id</th>
				<th>Title</th> 
				<th>Author</th> 
				<th>Publisher</th>
				<th>Publication_Date</th>
				<th>Publication_Place</th>
				<th>Cost</th>
				<th>Sourch</th>
				<th>Edition</th>
				<th>Page_No</th>
				<th>Copy_No</th>
				<th>ISBN_ISNN</th>
				<th>Remark</th>	
			  </tr>
			  <?php While($row=mysqli_fetch_object($result)){ ?>
			  <tr>
				<td><?php echo $row->date ?></td>
				<td><?php echo $row->accession_no ?></td>
				<td><?php echo $row->title ?></td>
				<td><?php echo $row->author ?></td>
				<td><?php echo $row->publisher ?></td>
				<td><?php echo $row->publication_date ?></td>
				<td><?php echo $row->publication_place ?></td>
				<td><?php echo $row->cost ?></td>
				<td><?php echo $row->source ?></td>
				<td><?php echo $row->edition ?></td>
				<td><?php echo $row->page_no ?></td>
				<td><?php echo $row->copy_no ?></td>
				<td><?php echo $row->ISBN_ISNN ?></td>
				<td><?php echo $row->remark ?></td>
			  </tr>
			  <?php } ?>
			</table>		
		</div>

	</body>
</html>