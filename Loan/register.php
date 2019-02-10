<?php
	include 'connect.php';
	include 'session.php';

	if (isset($_POST['submit'])) {

		$firstname=ucwords(mysqli_real_escape_string($con, $_POST['firstname']));
		$lastname =ucwords(mysqli_real_escape_string($con, $_POST['lastname']));
		$username=ucwords(mysqli_real_escape_string($con, $_POST['username']));
		$emailaddress=ucwords(mysqli_real_escape_string($con, $_POST['emailaddress'])); 
		$password =ucwords(mysqli_real_escape_string($con, $_POST['password']));
		
		$role=ucwords(mysqli_real_escape_string($con, $_POST['role'])); 
	
		// $dateCreated=date("Y-m-d");

		//username and password is auto generated when adding new user. 
		$username = $firstname[0].$middlename[0].$lastname;
		$password = md5($lastname);
		

		$sql = "INSERT INTO user (firstname, lastname, username, emailaddress, password, role, status)
		              VALUES ( '$firstname', '$lastname', '$username','$emailaddress', '$password', '$role', 'active')";

         $run= mysqli_query($con,$sql);

		if ($run) {
		   
		    header("Location:login-register.php?success=User successfully added");
		} 
		else {
		    header("Location:usersList.php?error=Sorry, could not add new user, Try again");
		}
	}
		
?>
