<?php
	session_start();
	$_SESSION['theme'] = 1;
	
	include('../config/db_login.php');
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
	<link rel="stylesheet" href="CSS/DarkStyle.css">
    <link rel="stylesheet" href="SWE-Style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
		<div class="container">
			<a class="navbar-brand" href="https://yu.edu.sa/"> <img src="imgs/YU-Logo-DarkBG.png" alt="AlYamamah University" style="width:150px; height: 50px;"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"> <a href="index.php" role="button" class="nav-link">Home</a></li>
				<li class="nav-item"> <a href="darkRegister.php" role="button" class="nav-link"> User Registration</a></li>
				<li class="nav-item"> <a href="darkLogin.php" role="button" class="nav-link"> Login</a></li>
				<li class="nav-item"> <a href="darkContact.php" role="button" class="nav-link"> Contact Us</a></li>	
			</ul>
		  <ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Theme</a>
			  <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="lightIndex.php">Light Mode</a>
				<a class="dropdown-item" href="darkIndex.php">Dark Mode</a>
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
			<!-- grids-->
				<div class="students col-md-4">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col"> Name </th>
								<th scope="col"> Major </th>
							</tr>
						</thead>
						<?php 
							$query = "Select * from profile";
							$student = mysqli_query($con, $query);
							//$student = mysqli_fetch_assoc($result);
							foreach($student as $f_name): 
							$student_name = $f_name['first_name']." ".$f_name['last_name'];
							$student_major = $f_name['user_major'];
						?>
						<tbody>
							<tr>
								<td scope="row"><a href="s_profile.php?id=<?php echo $f_name['user_id']?>"><?php print $student_name ;?></a></td>
								<td scope="row"><a href="s_profile.php?id=<?php echo $f_name['user_id']?>"><?php print $student_major ;?></a></td>
							</tr>
						</tbody>
						<?php
							endforeach;
						?>
						</table>
				</div>
				<div class="students  col-md-4">
					<table class="table table-striped table-dark">
						<thead>
							<tr>
								<th scope="col"> Majors </th>
								</tr>
								<?php 
									$query = "Select * from major";
									$majors = mysqli_query($con, $query);
									foreach($majors as $major): 
								?>
							</thead>
							<tbody>
								<tr>
									<td scope="row"><a href="major.php?id=<?php echo $major['major_code']?>"><?php print join(' ', array_slice($major, 2, 2)); ;?></a></td>								
								</tr>
							</tbody>
						<?php
							endforeach;
						?>
					</table>
				</div>
				<div class="students col-md-4">
					<table class="table table-striped table-dark">
					<thead>
						<tr>
							<th> Projects </th>
						</tr>
					</thead>
						<?php 
							$query = "Select * from projects";
							$projects = mysqli_query($con, $query);
							foreach($projects as $project): 
						?>
					<tbody>
						<tr>
							<td><a href="project.php?id=<?php echo $project['project_id']?>"><?php print join(' ', array_slice($project, 1, 1)); ?></a></td>								
						</tr> 
					</tbody>
						<?php
							endforeach;
						?>
					</table>
				</div>
			</div>
			<div class="row">
				<p class="lead mb-0">Thank you!</p>
				<p> Hello </p>
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

