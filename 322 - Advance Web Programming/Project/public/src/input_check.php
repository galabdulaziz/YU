<?php
	function testInput($conn, $data){
		$data = sanitizeMySQL($conn, $data);
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