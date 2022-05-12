<?php
	session_start();
	$_SESSION['theme'] = 0;
	
	include('../config/db_login.php');
	include('src/input_check.php');
	
	$con = mysqli_connect($db_host, $db_username_p, $db_password, $db_database);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>AlYamamah Students Portfolio</title>
	<link rel="stylesheet" href="CSS/Style.css">
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
				<li class="nav-item"> <a href="profile.php" role="button" class="nav-link"> Profile</a></li>
				<li class="nav-item"> <a href="src/logout.php" role="button" class="nav-link"> Logout</a></li>
				<li class="nav-item"> <a href="contact.php" role="button" class="nav-link"> Contact Us</a></li>
			
			</ul>
		  <ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Theme</a>
			  <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="profile.php">Light Mode</a>
				<a class="dropdown-item" href="darkProfile.php">Dark Mode</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Feedback?</a>
			  </div>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>

    <div style="height: 700px">  
		<div class="container">
			<div class="row">
				<div class="col-sm-11 col-md-9 col-lg-8 mx-auto">
					<div class="card card-signin my-5" style="background-color: #fbfbfb">
					<div class="card-body">
						<h5 class="card-title text-center">Profile</h5>
						<p> <b>Name:</b> 
							<?php
								$id = testInput($con, $_SESSION['id']);
								$query = "Select * from profile where user_id='$id'";
								$result = mysqli_query($con, $query);
								$profile = mysqli_fetch_row($result);
								$_SESSION['p_id'] = $profile[0];
								echo $profile[2]." ".$profile[3]
							?>
						</p>
						<p><b> Major: </b>
							<?php
								$major_code = $profile[7];
								$major_query = "Select major_name from major where major_code='$major_code'";
								$major = mysqli_fetch_row(mysqli_query($con, $major_query));
								echo $major[0];
								
							?>
						</p>
						<p><b>GPA:</b>
							<?php
								echo $profile[8];
							?>
						</p>
					<div class="students col-sm-11 col-md-9 col-lg-8 mx-auto"">
						<table class="table table-striped table-light" width=vbnn"100%">
							<thead>
								<tr>
									<th scope="col"> Course </th>
								</tr>
							</thead>
							<?php 
								$profile_id = $_SESSION['p_id'];
								$cquery = "SELECT * FROM user_project WHERE profile_id = '$profile_id';";
								$cresults = mysqli_query($con, $cquery);
								$courses = mysqli_fetch_row($cresults);
								$course_id = $courses[1];
								$course_query = "Select * from courses where course_id='$course_id";
								$user_courses = mysqli_query($con, $course_query);
								foreach ($user_courses as $u_course): 
								
							?>
							<tbody>
								<tr>
									<td scope="row"><a href="course.php?id=<?php echo $u_course['course_id']?>"><?php print join(' ', array_slice($u_course, 1, 1)); ?></a></td>								
								</tr> 
							</tbody>
							<?php
								endforeach;
							?>
						</table>
					</div>
					<div class="students col-sm-11 col-md-9 col-lg-8 mx-auto"">
						<table class="table table-striped table-light" width=vbnn"100%">
							<thead>
								<tr>
									<th scope="col"> Projects </th>
								</tr>
							</thead>
							<?php 
								$query = "Select * from projects";
								$projects = mysqli_query($con, $query);
								foreach($projects as $project): 
							?>
							<tbody>
								<tr>
									<td scope="row"><a href="project.php?id=<?php echo $project['project_id']?>"><?php print join(' ', array_slice($project, 1, 1)); ?></a></td>								
								</tr> 
							</tbody>
							<?php
								endforeach;
							?>
						</table>
					</div>
			</div>
		</div>
	</div>
	<?php
		mysqli_close($con);
	?>
    <!-- Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

