<?php
	session_start();
	
	if(isset($_SESSION['theme'])){
		if($_SESSION['theme']  == 0){
			if(isset($_SESSION['id'])){
				header("location: welcome.php");
			} else {
				header("location: lightIndex.php");		
			}
			exit;
		} else {
			if(isset($_SESSION['id'])){
				header("location:darkWelcome.php");
				exit;
			} else {
				header("location: darkIndex.php");
				exit;
			}
		}
		
	} else {
		$_SESSION['theme'] = 0;
		header("location: lightIndex.php");
		exit;
	}
	
?>

