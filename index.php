<?php
  error_reporting(0);
  // include "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
<!-- <script src="js/script.js"></script> -->
	<title>Home Page</title>
</head>
<body>

<div class="navbar">
	<ul>
		<li><a draggable="false" class="active" href="#home">Home</a></li>
		<li><a draggable="false" href="#news">News</a></li>
		<li><a draggable="false" href="#contact">Contact</a></li>
		<li><a draggable="false" href="#about">About</a></li>
		<li><a draggable="false" href="#signin" id="loginBtn">Sign In</a></li>
	</ul>
</div>

<div id="modal-area" class="container modal">
  <div class="frame modal-content">

    <div class="options-nav">
      <ul class="links">
        <li draggable="false" class="one signin-active"><a class="signinBtn">Sign in</a></li>
        <li draggable="false" class="two signup-inactive"><a class="signupBtn">Sign up</a></li>
        <li draggable="false" class=""><span class="close">&times;</span></li>
      </ul>
    </div>

    <div ng-app ng-init="checked = false">
      <form class="form-signin" action="" method="POST" name="form">
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

      <form class="form-signup" action="" method="POST" name="form">
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
    </div>
  </div>
</div>

<script>
		
	var modal = document.getElementById("modal-area");
	var modalContent = document.querySelector("modal-content");

	var btn = document.getElementById("loginBtn");

	var span = document.getElementsByClassName("close")[0];

	btn.onclick = function() {
		modal.style.display = "block";
	}

	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
	</script>
<script>
	window.onload = () => {

		let signinBtn = document.querySelector(".signinBtn");
		let signupBtn = document.querySelector(".signupBtn");

		signinBtn.addEventListener("click", signin);
		signupBtn.addEventListener("click", signup);

		const signupInactive = document.querySelector(".one");
		const signinActive = document.querySelector(".two");

		const forgotPassword = document.querySelector(".forgot");

		const formSignIn = document.querySelector(".form-signin");
		const formSignUp = document.querySelector(".form-signup");

		const frame = document.querySelector(".frame");

		function signin() {
			forgotPassword.classList.remove("forgot-left");
			frame.classList.remove("frame-long");
			formSignIn.classList.remove("form-signin-left");
			formSignUp.classList.remove("form-signup-left");
			signinActive.classList.remove("signup-active");
			signinActive.classList.add("signin-inactive");
			signupInactive.classList.remove("signin-inactive");
			// console.log("Sign In");
		}

		function signup() {
			forgotPassword.classList.add("forgot-left");
			frame.classList.add("frame-long");
			formSignIn.classList.add("form-signin-left");
			formSignUp.classList.add("form-signup-left");
			signinActive.classList.add("signup-active");
			signinActive.classList.remove("signup-inactive");
			signupInactive.classList.add("signin-inactive");
			// console.log("Sign Up");
		}
	}
	</script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
</body>
</html>

<?php
	$data = "Admin";
	$sql = "SELECT * FROM `users` WHERE `user_name`=?;";
	// $result = mysqli_query($connect, $sql);
	// $resultCheck = mysqli_num_rows($result); 

	$stmt = mysqli_stmt_init($connect);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL Statement failed";
	} else {
		// Bing parameters to the placeholder
		mysqli_stmt_bind_param($stmt, "s", $data);
		// Run parameters inside database
		mysqli_stmt_execute($stmt);
	}

	// if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_name'] . "<br>";
		}
	// }

?>