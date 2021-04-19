<?php

  include "includes/dbh.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Index Page</title>
</head>
<body>

<div class="container">
  <div class="frame">
    <div class="nav">
      <ul class="links">
        <li class="signin-active"><a class="btn">Sign in</a></li>
        <li class="signup-inactive"><a class="btn">Sign up </a></li>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
			<form class="form-signin" action="" method="post" name="form">
          <label for="username">Username</label>
          <input class="form-styling" type="text" name="username" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <input type="checkbox" id="checkbox"/>
          <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>
          <div class="btn-animate">
            <a class="btn-signin">Sign in</a>
          </div>
			</form>
        
			<form class="form-signup" action="" method="post" name="form">
          <label for="fullname">Full name</label>
          <input class="form-styling" type="text" name="fullname" placeholder=""/>
          <label for="email">Email</label>
          <input class="form-styling" type="text" name="email" placeholder=""/>
          <label for="password">Password</label>
          <input class="form-styling" type="text" name="password" placeholder=""/>
          <label for="confirmpassword">Confirm password</label>
          <input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
          <a ng-click="checked = !checked" class="btn-signup">Sign Up</a>
			</form>
      
      <div class="forgot">
        <a href="#">Forgot your password?</a>
      </div>
      
      <div>
        <div class="cover-photo"></div>
        <div class="profile-photo"></div>
        <h1 class="welcome">Welcome, Name</h1>
        <a class="btn-goback" value="Refresh" onClick="history.go()">Go back</a>
      </div>
  </div>
    
  </a>
</div>

<!-- <form action="includes/signup.inc.php" method="POST">

	<input type="text" name="firstname" placeholder="Enter Firstname">
	<br>
	<input type="text" name="lastname" placeholder="Enter Lastname">
	<br>
	<input type="text" name="email" placeholder="Enter Email">
	<br>
	<input type="text" name="username" placeholder="Enter Username">
	<br>
	<input type="text" name="password" placeholder="Enter Password">
	<br>

	<button type="submit" name="submit">Sign Up</button>

</form> -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>

<?php

	$sql = "SELECT * FROM `users`;";
	$result = mysqli_query($connect, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_name'] . "<br>";
		}
	}

?>