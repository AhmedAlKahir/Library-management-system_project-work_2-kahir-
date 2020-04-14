<?php
	include("include/config.php")
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Library</title>
	</head>
	
	<body>
		<div style="border:2px solid black; background-color:#C60000;width:100%;margin:0 auto; text-align:center;height:300px"><h1>Welcome to online library</h1>
		<div style="width:90%"><img src="picture/photo-1507842217343-583bb7270b66.jpg" width=45%; height="200"/>  <img src="picture/images.jpg" width=45%; height="200"/></div>
		</div>
		
		<div style="border:2px solid black; background-color:#fff;width:100%;margin:10px auto; text-align:center;height:300px">
		<!-- <div style="width:480px; padding-top:20px;"> -->
		<br/>
		<img src="picture/download.jpg" width="50%" height="90%"/>
		<!-- <h6>stident</h6> -->
		
		<div style="float:right">
		<button><a href="Register.php">Register</a></button>
		</div>
		
		<div style="width:40%; float:right;"> 
		<br/>
		<br/>
		<br/>
		<form action="student.php" method="POST">
		  Username:
		  <input type="text" name="Username"><br><br>
		  Password:
		  <input type="text" name="Password"><br><br>
		  <input type="submit" name="login" value="Login">
		  <button><a href="lib.php">Back</a></button> 
		</form>
		</div>
		</div>
	</body>

</html>



<?php
	if (isset($_POST['login']))
	{
		$name=$_POST['Username'];
		$pass=$_POST['Password'];
		
		
		$query="select *from registration where username='$name' and password='$pass'";
		
		$query_check= mysqli_query($con,$query);
		if($query_check)
		{
			if(mysqli_num_rows($query_check)>0)
			{
				echo"
					<script>
					alert('You are successfully logged in .');
					window.location.href='student_page.php';
					</script>
				";
			}
			else
			{
	
				echo"
					<script>
					alert('You are not registered.');
					window.location.href='Register.php';
					</script>
				";
			}	
			
		}
		else
		{
			echo"
				<script>
				alert('Database Error.');
				window.location.href='Register.php';
				</script>
			";
		}
	}
	else
	{
		
	}

?>