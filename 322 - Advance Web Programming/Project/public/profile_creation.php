<?php
	include('db_login.php');
	session_start();
	
	function add_profile($con, $fn, $ls, $um, $age, $em, $ugpa, $ms, $uid ){
		$stmt = $con->prepare("INSERT INTO profile(user_id, first_name, last_name, user_age, marital_status, contact_email, user_major, GPA) VALUES(?,?,?,?,?,?,?,?)");
		$stmt->bind_param('ssssssss', $uid, $fn, $ls, $age, $ms, $em, $um, $ugpa);
		if($stmt->execute()){
			echo "<p>profile created!</p>";
			$stmt->close();
		} else {
			die ("Error: <br>" . mysqli_error($con));
		}
	}
	
	if (!empty($_POST))
	{   
		
        $con = mysqli_connect($db_host, $db_username_p, $db_password, $db_database);
        if ($con->connect_error)
            die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
		if (isset($_SESSION['id'])){
			$id = htmlspecialchars($_SESSION['id']);
			$user_name  = htmlspecialchars($_SESSION['userName']);
			$f_name = testInput($con, $_POST["first_name"]);
			$l_name = testInput($con, $_POST["last_name"]);
			$user_major = testInput($con, $_POST["user_major"]);
			$user_age = testInput($con, $_POST["user_age"]);
			$contact_email = testInput($con, $_POST["contact_email"]);
			$user_gpa = testInput($con, $_POST["gpa"]);
			$martaial_status = testInput($con, $_POST["ms"]);
			add_profile($con, $f_name, $l_name, $user_major, $user_age, $contact_email, $user_gpa, $martaial_status, $id);
		} else {
			die ("<a href='Register.html'>Please click here to register </a> <br> or <a href='Log-In.html'>here to log in</a>");
		}
	}
	
	function testInput($con, $data){
		$data = sanitizeMySQL($con, $data);
		$data = stripcslashes($data);
		$data = trim($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	function sanitizeMySQL($conn, $data){
		$data = mysqli_real_escape_string($conn, $data);
		return $data;
	}
?>
