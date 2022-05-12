<?php 


    $db_host="localhost:3306";
	$db_database="Portfolio";
	$db_username="profile_project_courses";
	$db_password="AdvWeb";
	

$connection = mysqli_connect($db_host, $db_username, $db_password, $db_database);
$student =mysqli_query($connection,"SELECT   user_id ,first_name, last_name  FROM profile");

$courses =mysqli_query($connection,"SELECT  course_name  FROM  courses");
$projects =mysqli_query($connection,"SELECT   project_name  FROM  projects");
?>