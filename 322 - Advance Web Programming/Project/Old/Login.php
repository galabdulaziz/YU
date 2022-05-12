<?php 
/*
*
* It will only accept accounts which has their password hash is stored in the database.
*
*/
	include('db_login.php');
	
	$con = mysqli_connect($db_host, $db_username, $db_password, $db_database);
	if(mysqli_connect_errno()){
		echo "<br>";
		echo "Connection failed ".mysqli_error;
		exit();
	}
	
	$user_name = testInput($_POST["name"]);
	$password = testInput($_POST["password"]);
	$stmt = "";
	
	function testInput($data){
		$data = stripcslashes($data);
		$data = trim($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function check_user($conn, $un, $pw){
		$stmt = $con->prepare('Select INTO users (user_name, password) VALUES(?,?)');
		$stmt->bind_param('ss', $un, $pw);
	}
	
	$query = "Select * from users WHERE user_name='$user_name'";
	echo $query."<br><br>";
	$result = mysqli_query($con, $query);
	if(!$result){
		echo "User doesnt exist";
		exit();
	} else {
			$result_row = mysqli_fetch_row($result);
			$pass = $result_row[2];
			if(password_verify($password, $pass)){
				session_start();
				$_SESSION['id'] = $result_row[0];
				$_SESSION['userName']  = $result_row[1];
				if(){
					header("Location:welcome.php");
				} else {
					header("Location:welcome.php");
				}
				exit();
			} else {
				echo "Wrong user name or password";
			}	
	}
	
	mysqli_close($con);
?>
