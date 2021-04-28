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