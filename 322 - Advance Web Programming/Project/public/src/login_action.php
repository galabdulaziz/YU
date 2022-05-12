<?php
	include('input_check.php');
	include('../../config/db_login.php');
	session_start();
	
	$con = mysqli_connect($db_host, $db_username, $db_password, $db_database);
	
	if(mysqli_connect_errno()){
		echo "<br>";
		echo "Connection failed!";
		die ("<p> for help please click on <a href='contact.php'>Contact Us</a></p>");
	}
	
	$user_name = testInput($con, $_POST["name"]);
	$password = testInput($con, $_POST["password"]);
	
	$query = "Select * from users WHERE user_name='$user_name'";
	//echo $query;
	$result = mysqli_query($con, $query);
	//print_r($result);
	//$result_row = mysqli_fetch_row($result);
	if(!$result){
		echo "User doesn’t exist";
		exit();
	} else {
			$result_row = mysqli_fetch_row($result);
			print_r($result_row);
			$pass = $result_row[2];
			echo $pass;
			if(password_verify($password, $pass)){
				$_SESSION['id'] = $result_row[0];
				$_SESSION['userName']  = $result_row[1];
				if($_SESSION['theme'] == 0){
					header("location: ../profile.php");
				} else {
					header("location: ../darkProfile.php");
				}
				if(isset($_SESSION['attempt'])){
					unset($_SESSION['attempt']);
				}
				mysqli_close($con);
				exit();
			} else { 
				if(isset($_SESSION['attempt'])){
					$_SESSION['attempt'] += 1;
				} else {
					$_SESSION['attempt'] = 1;
				}
			}
			if($_SESSION['theme'] == 0){
				header("location: ../login.php");
			} else {
				header("location: ../darkLogin.php");
			}
			
			mysqli_close($con);
	}
?>