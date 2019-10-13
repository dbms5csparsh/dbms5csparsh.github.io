<?php
	include("connect.php");
	$result = $_POST['Search'];
	
	$query = mysqli_query($con,"SELECT * FROM PRODUCT WHERE Category = '$result'");
	
?>
