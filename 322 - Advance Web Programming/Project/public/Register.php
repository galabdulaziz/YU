<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   <link rel="stylesheet" href="CSS/registerStyle.css">
      <link rel="stylesheet" href="CSS/SWE-Style.css">
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
			<li class="nav-item"> <a href="Register.php" role="button" class="nav-link"> User Registration</a></li>
            <li class="nav-item"> <a href="login.php" role="button" class="nav-link"> Login</a></li>
            <li class="nav-item"> <a href="contact.php" role="button" class="nav-link"> Contact Us</a></li>
        
        </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Theme
        </a>
          
          <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Register.php">Light Mode</a>
            <a class="dropdown-item" href="darkRegister.php">Dark Mode</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Feedback?</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
   
<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card-signin flex-row my-5" style="background-color: #fbfbfb">
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form class="form-signin" action="src/register_action.php" method="post">
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" placeholder="Username" name="name" required autofocus>
                <label for="inputUserame">Username</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
                <label for="inputEmail">Email address</label>
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
                <label for="inputPassword">Password</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirm password</label>
              </div>

              <button class="btn btn-lg btn-block text-uppercase btn-register" type="submit">Register</button>

              <hr class="my-4">
                <p style="text-align: center; font-weight: 500" class="lead">Already have an account? <a class="bodyLink" href="login.html">Log in</a>!</p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>