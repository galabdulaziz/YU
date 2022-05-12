<?php
	session_start();
	
	if(isset($_SESSION['theme'])){
		if($_SESSION['theme']  == 0){
			if(isset($_SESSION['id'])){
				header("location: public/welcome.php");
			} else {
				header("location: public/lightIndex.php");		
			}
			exit;
		} else {
			if(isset($_SESSION['id'])){
				header("location: public/darkwelcome.php");
				exit;
			} else {
				header("location: public/darkIndex.php");
				exit;
			}
		}

	} else {
		$_SESSION['theme'] = 0;
		header("location: public/lightIndex.php");
		exit;
	}
	
?>

