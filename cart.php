<?php
	include("connect.php");
	if($_POST["Add"]){
		$result = mysqli_query($con,"SELECT * FROM PRODUCT AS p,CART AS c where c.Product_ID = p.Product_ID");
	}
?>


