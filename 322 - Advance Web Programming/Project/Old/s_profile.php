<?php
include('db_login.php');
$connection = mysqli_connect($db_host, $db_username_p, $db_password, $db_database);
$query = "SELECT * FROM profile WHERE user_id=? ;";
	 $stmt = mysqli_stmt_init($connection);
	
	if(!mysqli_stmt_prepare($stmt, $query)){
	  echo"error";
	 
	 
	 }else{
	     $id=$_GET['id'];
	    mysqli_stmt_bind_param($stmt,"i",$id);
		 mysqli_stmt_execute($stmt);
		 $result = mysqli_stmt_get_result($stmt);

		while($rows = mysqli_fetch_row($result) ){
        echo "first name: ".$rows[2]."<br>";
        echo "last name: ".$rows[3]."<br>";
        echo "age: ".getage($rows[4])."<br>";
		 echo "marital status: ".$rows[5]."<br>";
		 echo "email: ".$rows[6]."<br>";
		 echo "major: ".$rows[7]."<br>";
		 echo "GPA: ".$rows[8]."<br>";
		   }
	}
 
  function getage($birthDate){
  	  return intval(date('Y', time() - strtotime($birthDate))) - 1970;
  }