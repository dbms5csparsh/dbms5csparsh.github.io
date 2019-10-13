<?php
	include("connect.php");
	if(isset($_POST['Gadgets'])
	{
	     $result = mysqli_query($con,"SELECT * FROM PRODUCT WHERE Category='Gadgets'");
	     while($rows =  mysqli_fetch_assoc($result)){
		extract($rows);
		$id = $rows["Category"];
		$image = $rows["Image"];
		$Product_ID = $rows["Product_ID"];
		$Cost = $rows["Cost"];
		$Name = $rows["Name"];
		$Description = $rows["Description"];
		
	}
	}

	else if($_POST['Hardware'])
	{
	     $result = mysqli_query($con,"SELECT * FROM PRODUCT WHERE Category='Hardware'");
             while($rows =  mysqli_fetch_assoc($result)){
		extract($rows);
		$id = $rows["Category"];
		$image = $rows["Image"];
		$Product_ID = $rows["Product_ID"];
		$Cost = $rows["Cost"];
		$Name = $rows["Name"];
		$Description = $rows["Description"];
	}
	}

	else if($_POST['Accessories'])
	{
	    $result = mysqli_query($con,"SELECT * FROM PRODUCT WHERE Category = 'Accessories'");
	    while($rows =  mysqli_fetch_assoc($result)){
		extract($rows);
		$id = $rows["Category"];
		$image = $rows["Image"];
		$Product_ID = $rows["Product_ID"];
		$Cost = $rows["Cost"];
		$Name = $rows["Name"];
		$Description = $rows["Description"];
	}
	}

	else
	{
	    $result = mysqli_query($con,"SELECT * FROM PRODUCT WHERE Category='Car_Electronics'");
	    while($rows =  mysqli_fetch_assoc($result)){
		extract($rows);
		$id = $rows["Category"];
		$image = $rows["Image"];
		$Product_ID = $rows["Product_ID"];
		$Cost = $rows["Cost"];
		$Name = $rows["Name"];
		$Description = $rows["Description"];
	}
	}

	
?>
