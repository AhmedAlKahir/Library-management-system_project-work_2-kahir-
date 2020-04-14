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
		<div style="border:2px solid black; background-color:#C60000;width:100%;margin:0 auto; text-align:center;height:300px"><h1>Welcome to online library</h1>
		<div style="width:90%"><img src="picture/photo-1507842217343-583bb7270b66.jpg" width=45%; height="200"/>  <img src="picture/images.jpg" width=45%; height="200"/></div>
		</div>
		
	
		<div style="border:2px solid black; background-color:powderblue;width:600px;margin:10px auto; text-align:center;height:auto">
		<h1>  Library Registration Form </h1>
		<h3>Please fill the details below if you wish to become a library member</h3>
		<form action="Register.php" method="POST">
		  Username:<input type="text" name="Username" requierd><br><br>
		  Userid:<input type="number" name="id" requierd><br><br>
		  Email:<input type="email" name="Email" requierd><br><br>
		  Password:<input type="password" name="Password"requierd><br><br>
		  Faculty Id:<input type="number" name="Faculty Id"><br><br>
		  Phone No:<input type="number" name="Phone No"><br><br>
		  Address:<input type="text" name="Address"><br><br>
		  
		  <input type="submit" name="reg" value="Sign-Up">
		  <a href="student.php"><input type="button" name="back" value="Back"></input><br><br>
		  
		</form>
		</div>
		
	</body>

</html>


<?php
	if (isset($_POST['reg']))
	{
		$name=$_POST['Username'];
		$id=$_POST['id'];
		$email=$_POST['Email'];
		$pass=$_POST['Password'];
		$f_id=$_POST['Faculty Id'];
		$phone=$_POST['Phone No'];
		$address=$_POST['Address'];
		
		$query="select *from registration where email='$email' and userid='$id'";
		$query_check= mysqli_query($con,$query);
		if($query_check)
		{
			if(mysqli_num_rows($query_check)>0)
			{
				echo"
					<script>
					alert('Email already in use.');
					window.location.href='student.php';
					</script>
				";
			}
			else
			{
				$insertion="insert into registration  values('$name','$id','$email','$pass','$f_id','$phone','$address')";
				$run=mysqli_query($con,$insertion);
				echo $run;
				if($run)
				{
					echo"
						<script>
						alert('You are successfully registered.');
						window.location.href='student.php';
						</script>
					";
				}
				else
				{
					echo"
						<script>
						alert('Connection Failed.');
						window.location.href='Register.php';
						</script>
					";
				}
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




