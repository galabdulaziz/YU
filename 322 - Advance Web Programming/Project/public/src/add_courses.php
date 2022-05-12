<?php
	include('input_check.php');
	include('../../config/db_login.php');
	session_start();

	$con = mysqli_connect($db_host, $db_username, $db_password, $db_database);
	if(mysqli_connect_errno()){
		echo "<br>";
		echo "Connection failed ".mysqli_error;
		exit();
	}

	if ($con->connect_error)
        die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	
	function add_courses($con, $ci, $cn, $de){
		$stmt = $con->prepare("INSERT INTO courses(course_code, course_name, description) VALUES(?,?,?)");
		$stmt->bind_param('sss', $ci, $cn, $de);
		if($stmt->execute()){
			echo "<p>Courses added!</p>";
			$stmt->close();
			
			if(isset($_SESSION['theme'])){
				if($_SESSION['theme'] == 0){
					header('location: ../profile.php');
				} else {
					header('location: ../darkProfile.php');
				}
			
			} else {
				header('location: ../profile.php');
			}
			
		} else {
			die ("Error: <br>" . mysqli_error($con));
		}
	}

	if (!empty($_POST))
	{
		if (isset($_SESSION['id'])){
		$id = htmlspecialchars($_SESSION['id']);
			$course_code = testInput($con, $_POST["course_code"]);
			$course_name = testInput($con, $_POST["course_name"]);
			$description = testInput($con, $_POST["description"]);
			add_courses($con, $course_code, $course_name, $description);
		} else {
			if(isset($_SESSION['theme'])){
				if($_SESSION['theme'] == 0){
					header('location: ../login.php');
				} else {
					header('location: ../darkLogin.php');
				}
			
			} else {
				header('location: ../login.php');
			}
		}
	}

?>
