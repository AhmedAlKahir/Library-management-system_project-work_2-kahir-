<?php
	if (isset($_POST['btn']))
	{
		$connect=mysqli_connect("localhost","root","","admin_panel");
		$date=$_POST['date'];
		$accession_no=$_POST['accession_no'];
		$title=$_POST['title'];
		$author=$_POST['author'];
		$publisher=$_POST['publisher'];
		$publication_date=$_POST['publication_date'];
		$publication_place=$_POST['publication_place'];
		$cost=$_POST['cost'];
		$source=$_POST['source'];
		$edition=$_POST['edition'];
		$page_no=$_POST['page_no'];
		$copy_no=$_POST['copy_no'];
		$ISBN_ISNN=$_POST['ISBN_ISNN'];
		$remark=$_POST['remark'];
		
		$query="select *from book_accession where accession_no='$accession_no' and title='$title'";
		$query_check= mysqli_query($connect,$query);
		if(mysqli_num_rows($query_check)>0)
		{
			echo"
					<script>
					alert('Already Exist');
					window.location.href='Add_Book.php';
					</script>
				";
		}
		else
		{
			$sql="INSERT INTO book_accession (date,accession_no,title,author,publisher,publication_date,publication_place,cost,source,edition,page_no,copy_no,ISBN_ISNN,remark) VALUES('$date','$accession_no','$title','$author','$publisher','$publication_date','$publication_place','$cost','$source','$edition','$page_no','$copy_no','$ISBN_ISNN','$remark')";
			$run=mysqli_query($connect,$sql);
			if($run)
			{
				echo"
					<script>
					alert('You are successfully accessed.');
					window.location.href='Add_Book.php';
					</script>
				";
			}
			else
			{
				echo"
					<script>
					alert('You can't save');
					window.location.href='admin1.php';
					</script>
				";
			}
		}
	}
	else
	{
		echo"
			<script>
			alert('You can't access.');
			window.location.href='admin1.php';
			</script>
		";
	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title>Online Library</title>
		<link href="menu.css" rel="stylesheet">
	</head>
	
	<body>
		<?php
			include("include/header_menu.php")
		?>
		
		<div style="border:2px solid black; background-color:powderblue;width:600px;margin:10px auto; text-align:center;height:auto">
			<h1>  Book Accession </h1>
			<h6><?php 
				if (isset($_POST['btn'])){
					echo $msg;
				}
			?></h6>
			<form action"" method="POST">
			  Date:<input type="date" name="date"><br><br>
			  Accession_no:<input type="number" name="accession_no" requierd><br><br>
			  Title:<input type="text" name="title" requierd><br><br>
			  Author_name:<input type="text" name="author"><br><br>
			  Publisher:<input type="text" name="publisher"><br><br>
			  Publication Date:<input type="date" name="publication_date"><br><br>
			  Publication Place:<input type="text" name="publication_place"><br><br>
			  Cost:<input type="text" name="cost"><br><br>
			  Source:<input type="text" name="source"><br><br>
			  Edition:<input type="text" name="edition"><br><br>
			  Page_no:<input type="text" name="page_no" ><br><br>
			  Copy_no:<input type="number" name="copy_no" ><br><br>
			  ISBN_ISNN:<input type="text" name="ISBN_ISNN" ><br><br>
			  Remark:<input type="text" name="remark" ><br><br>
			  
			  <input type="submit" name="btn" value="Save">
			  <a href="admin.php"><input type="button" name="back" value="Back"></input><br><br>
			  
			</form>
		</div>
		
	</body>
</html>

