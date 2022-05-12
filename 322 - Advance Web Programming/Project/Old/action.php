<?php
	include('db_login.php');
	
	$con = mysqli_connect($db_host, $db_username, $db_password, $db_database);
	if(mysqli_connect_errno()){
		echo "<br>";
		echo "Connection failed ".mysqli_error;
		exit();
	}
	
	$user_name = testInput($_POST["name"]);
	$password = testInput($_POST["password"]);
	$email = testInput($_POST["email"]);
	
	
	$user_name = sanitizeMySQL($con, $_POST["name"]);
	$password = sanitizeMySQL($con, $_POST["password"]);
	$email = sanitizeMySQL($con, $_POST["email"]);
	
	$hash = password_hash($password, PASSWORD_DEFAULT);
	
	function testInput($data){
		$data = stripcslashes($data);
		$data = trim($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function sanitizeMySQL($conn, $data){
		$data = mysqli_real_escape_string($conn, $data);
		return $data;
	}
	
	function add_user($con, $un, $pw, $em ){
		$stmt = $con->prepare('INSERT INTO user (user_name, password, email) VALUES(?,?,?)');
		$stmt->bind_param('sss', $un, $pw, $em);
		if($stmt->execute()){
			$stmt->close();
		} else {
			die ("Error: <br>" . mysqli_error($con));
		}
	}
	
	add_user($con, $user_name, $hash, $email);
?>