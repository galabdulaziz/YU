<?php
	include('input_check.php');
	include('../../config/db_login.php');
	
	$con = mysqli_connect($db_host, $db_username, $db_password, $db_database);
	if(mysqli_connect_errno()){
		echo "<br>";
		echo "Connection failed ".mysqli_error;
		exit();
	}
	
	$user_name = testInput($con, $_POST["name"]);
	$password = testInput($con, $_POST["password"]);
	$email = testInput($con, $_POST["email"]);
	
	$hash = password_hash($password, PASSWORD_DEFAULT);
	
	
	
	function add_user($con, $un, $pw, $em ){
		$stmt = $con->prepare('INSERT INTO users (user_name, password, email) VALUES(?,?,?)');
		$stmt->bind_param('sss', $un, $pw, $em);
		if($stmt->execute()){
			$stmt->close();
			if($_SESSION['theme'] == 0){
				header('location: ../login.php');
			} else {
				header('location: ../darkLogin.php');
			}
		} else {
			if($_SESSION['theme'] == 0){
				header('location: ../Register.php');
			} else {
				header('location: ../darkRegister.php');
			}
		}
	}
	
	add_user($con, $user_name, $hash, $email);
	mysqli_close($con);
	
	exit();
?>