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
      <form class="form-signin" action="includes/login.inc.php" method="POST" name="form">
        <label for="username">Username</label>
        <input class="form-styling" type="text" name="username" placeholder="" required/>

        <label for="password">Password</label>
        <input class="form-styling" type="text" name="password" placeholder="" required/>

        <input type="checkbox" id="checkbox"/>
        <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>

        <div class="btn-animate">
				<button class="btn-signin" type="submit" name="submit">Sign In</button>
          <!-- <a class="btn-signin">Sign in</a> -->
        </div>
      </form>

      <form class="form-signup" action="includes/signup.inc.php" method="POST" name="form">
        <label for="name">Full name</label>
        <input class="form-styling" type="text" name="name" placeholder="" required/>

        <label for="email">Email</label>
        <input class="form-styling" type="text" name="email" placeholder="" required/>

        <label for="username">Username</label>
        <input class="form-styling" type="text" name="username" placeholder="" required/>

        <label for="password">Password</label>
        <input class="form-styling" type="text" name="password" placeholder="" required/>

        <label for="confirmpassword">Confirm password</label>
        <input class="form-styling" type="text" name="confirmPassword" placeholder="" required/>
				<button class="btn-signup" type="submit" name="submit">Sign Up</button>
        <!-- <a ng-click="checked = !checked" name="submit"></a> -->
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