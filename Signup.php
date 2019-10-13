<?php
	session_start();
	include("connect.php");
	
	function id_exists($EmailID,$con){
			$result = mysqli_query($con,"SELECT CustomerID FROM CUSTOMER WHERE EmailID ='$EmailID'");
			
			if(mysqli_num_rows($result)>=1){
					return true;
			}
			
			else{
				return false;
			}
		}
	
	$error = "";
	$success = "";
		
	if(isset($_POST['Submit']))
	{
		$Address = mysqli_real_escape_string($con,$_POST['Address']);
		$UserName = mysqli_real_escape_string($con,$_POST['UserName']);
		$EmailID = mysqli_real_escape_string($con,$_POST['EmailID');
		$CustomerID = mysqli_real_escape_string($con,$_POST['CustomerID']);
		$PhoneNO = mysqli_real_escape_string($con , $_POST['PhoneNO']);
		$InvoiceID = mysqli_real_escape_string($con,$_POST['InvoiceID']);
		$RegDate = mysqli_real_escape_string($con,$_POST['RegDate']);
		$Password = mysqli_real_escape_string($con,$_POST['Password']);
		$CompanyName = mysqli_real_escape_string($con,$_POST['CompanyName']);
		
		if(strlen($Address)>50){
			$error = "Address length should be less than 50 characters";
		}
	
		else if(strlen($UserName)>10){
			$error = "Username is too long";
		}

		else if(!filter_var($EmailID,FILTER_VALIDATE_EMAIL)){
			$error = "Email is not valid";
		}

		else if(id_exists($EmailID,$con)==true){
			$error = "Customer already registered";
		}

		else if(strlen($password)<5){
			$error="Password must be greator than 3 characters";
		}
		else if(strlen($password)>13){
			$error="Password must be less than 13 characters";
		}

		else{
			$insertquery = "INSERT INTO CUSTOMER(Address, UserName, EmailID, CustomerID, PhoneNO, InvoiceID, RegDate, 						Password,CompanyName) VALUES ('$Address', '$UserName', '$EmailID', '$CustomerID', '$PhoneNO', 						'$InvoiceID','$RegDate','$Password','$CompanyName')";
			
			if(msyqli_query($con,$insertquery) == true){
				$success = 'You are registered Successfully';
			}
		}
	}
?>
			
		

		

		
		
