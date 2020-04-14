<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "admin_panel";
$con = mysqli_connect($host, $username, $password) or die('Error!');
mysqli_select_db($con,$db);
?>