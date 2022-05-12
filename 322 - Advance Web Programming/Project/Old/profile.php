<?php
 session_start();
	include('db_login.php');
     include('login.php');

 if(isset($_SESSION['userName'])){
   
	echo" welcome ". $_SESSION['userName']."</br>";
     $query = "SELECT * FROM profile WHERE user_id=? ;";
	 $stmt = mysqli_stmt_init($connection);
	
	if(!mysqli_stmt_prepare($stmt, $query)){
	  echo"error";
	
	} else{
	$id=$_SESSION['id'];
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
	}
	
  function getage($birthDate){
  	  return intval(date('Y', time() - strtotime($birthDate))) - 1970;
  }
	