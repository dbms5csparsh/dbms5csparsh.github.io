<?php
	$con =  mysqli_connect("localhost","username","password","DBMS");
	if(mysqli_connect_errno()){
		echo "Error occurred while connecting with Database".mysqli_connect_errno();
	}
	
?>
