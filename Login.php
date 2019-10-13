<?php
	include("connect.php");
	$error = "";
	function id_exists($EmailID,$con){
			$result = mysqli_query($con,"SELECT CustomerID FROM CUSTOMER WHERE EmailID ='$EmailID'");
			
			if(mysqli_num_rows($result)>=1){
					return true;
			}
			
			else{
				return false;
			}
		
	
	if(isset($_POST['Submit'])){
		
		$EmailID = $_POST['EmailID'];
		$Password = $_POST['Password'];
		
		

		if(id_exists($EmailID,$con)==true){
		
			$result = mysqli_query($con,"SELECT Password FROM CUSTOMER WHERE EmailID = '$EmailID'");
			
			if($Password !== $result){
				$error = "Enter a correct password";
			}
	
		}
	}
	else{
		$error = "Email doesn't exists. Go to SignUP page";
	}
?>


					
