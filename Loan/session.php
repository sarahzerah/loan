<?php


	 include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from admin where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login-register.php");
      die();
   }
	// session_start();

	//if a session hasn't started is still not set, redirect to login page
	// if (!isset($_SESSION['userID'])) {
		// header('Location:../index.php');
	}

?>

