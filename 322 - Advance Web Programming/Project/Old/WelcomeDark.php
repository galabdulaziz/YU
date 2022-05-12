<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>AlYamamah <?php session_start(); $_SESSION['f_name'] ?> Portfolio</title>
      <link rel="stylesheet" href="SWE-Style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<div class="container">
			<a class="navbar-brand" href="index.html"> <img src="YU-Logo.png" alt="AlYamamah University" style="width:150px; height: 50px;"/></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"> <a href="Register.html" role="button" class="nav-link"> User Registration</a></li>
				&nbsp; &nbsp;
				<li class="nav-item"> <a href="login.html" role="button" class="nav-link"> Login</a></li>
				&nbsp; &nbsp;
				<li class="nav-item"> <a href="contact.html" role="button" class="nav-link"> Contact Us</a></li>
			
			</ul>
		  <ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Theme</a>
			  <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
				<a class="dropdown-item" href="Welcome.php">Light Mode</a>
				<a class="dropdown-item" href="WelcomeDark.php">Dark Mode</a>
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
						<div class="students">
							<table>
								<?php 
								include('db_login.php');
								$con = mysqli_connect($db_host, $db_username_p, $db_password, $db_database);
								$query = "Select * from profile where";
								$student = mysqli_query($con, $query);
								foreach($student as $f_name): ?>
								<tr>
							  
									<td><a href="s_profile.php?id=<?php echo $f_name['user_id']?>"><?php print join(' ',array_slice($f_name,1)) ;?></a></td>
																	
								</tr> 
								<?php endforeach; ?>
							</table>
						</div>
					</div>
						<div style="height: 700px">
							<p class="lead mb-0">Thank you!</p>
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

