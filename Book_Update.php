<?php
	include("include/config.php")
?>

<?php
	if (isset($_POST['up']))
	{
		
		$id=$_POST['id'];
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
		$update="update book_accession set date='$date',accession_no='$accession_no',title='$title',author='$author',publisher='$publisher',publication_date='$publication_date',publication_place='$publication_place',cost='$cost',source='$source',edition='$edition',page_no='$page_no',copy_no='$copy_no',ISBN_ISNN='$ISBN_ISNN',remark='$remark' where accession_no=$id";
		$run=mysqli_query($con,$update);
		if($run)
		{
			echo"
				<script>
				$run;
				alert('You are successfully updated.');
				window.location.href='Book_Update.php';
				</script>
			";
		}
		else
		{
			echo"
				<script>
				alert('$run');
				echo $run;
				window.location.href='Book_Update.php';
				</script>
			";
		}
	}
	else
	{
		echo"
			<script>
			alert('Needn't Update.');
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
		<form  action="" method="POST">
			  <input type="number" name="search" placeholder="Search By Id";> <button>Search</button><br><br> 
		</form>
		<?php
			if (isset($_POST['search']))
			{
				$id=$_POST['search'];
			}
			else
			{
				$id=0;
			}
		?>
		<div style="border:2px solid black; background-color:powderblue;width:600px;margin:10px auto; text-align:center;height:auto">
			<h1>  Book Update </h1>
			<form action="Book_Update.php" method="POST">
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
			  <input type="hidden" name="id" value="<?php echo $id; ?>">
			  <input type="submit" name="up" value="Save"><br><br>  
			</form>
		</div>
		
	</body>
</html>
