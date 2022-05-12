<!doctype html>

<?php
	session_start();
	$_SESSION['theme'] = 0;
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>AlYamamah Students Portfolio</title>
	<link rel="stylesheet" href="CSS/loginSty.css">
    <link rel="stylesheet" href="SWE-Style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="container">
			<a class="navbar-brand" href="https://yu.edu.sa/"> <img src="imgs/YU-Logo.png" alt="AlYamamah University" style="width:150px; height: 50px;"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"> <a href="index.php" role="button" class="nav-link">Home</a></li>
				<li class="nav-item"> <a href="profile.php" role="button" class="nav-link">Profile</a></li>
				<li class="nav-item"> <a href="contact.php" role="button" class="nav-link">Contact Us</a></li>
				<li class="nav-item"> <a href="src/logout.php" role="button" class="nav-link"> Logout</a></li>
			
			</ul>
		  <ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Theme</a>
			  <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="addingCourse.php">Light Mode</a>
				<a class="dropdown-item" href="darkAddingCourse.php">Dark Mode</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Feedback?</a>
			  </div>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>

    <div style="height: 700px">  
		<div class="row">
			<div class="container">
				<div class="row">
				  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card card-signin my-5" style="background-color: #fbfbfb">
					  <div class="card-body">
						<h5 class="card-title text-center">Add Course</h5>
						<form class="form-signin" action="src/add_courses.php" method="POST">
						  <div class="form-label-group">
							<input type="text" id="course_id" value="" name="course_code" class="form-control" placeholder="Course ID" required autofocus>
							<label for="course_id">Course Code</label>
						  </div>
						  <div class="form-label-group">
							<input type="text" value="" name="course_name" id="input_cname" class="form-control" placeholder="Course Name" required>
							<label for="input_cname">Course Name</label>
						  </div>
						  <div class="form-label-group">
							<input type="text" value="" name="description" id="input_cdesription" class="form-control" placeholder="Course Description" required>
							<label for="input_cdesription">Course Description</label>
						  </div>
						  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Add">Add</button>
						  <hr class="my-4">
						  <button class="btn btn-lg btn-primary btn-block text-uppercase" type="reset" value="Reset">Rest</button>
						</form>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
    <!-- Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

