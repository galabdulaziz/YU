<?php
	  function destroy_session_and_data(){
		session_start();
		if(isset($_SESSION['id'])){
			$_SESSION = array();
			setcookie(session_name(), '', time() - 2592000, '/');
			session_destroy();
		}
		
	  }
	  
	  destroy_session_and_data();
	  header('location: ../login.php');
?>