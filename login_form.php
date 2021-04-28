
		
      <form class="form-signin" action="includes/login.inc.php" method="POST" name="signinform">
        <label for="email">Email</label>
        <input class="form-styling" type="text" name="username" placeholder="" required/>

        <label for="password">Password</label>
        <input class="form-styling" type="text" name="password" placeholder="" required/>

        <input type="checkbox" id="checkbox"/>
        <label for="checkbox" ><span class="ui"></span>Keep me signed in</label>

        <div class="btn-animate">
				<button class="btn-signin" type="submit" name="signin">Sign In</button>
        </div>
      </form>

      <form class="form-signup" action="includes/signup.inc.php" method="POST" name="signupform">
        <label for="name">Full name</label>
        <input class="form-styling" type="text" name="name" placeholder=""/>

        <label for="email">Email</label>
        <input class="form-styling" type="text" name="email" placeholder=""/>

        <label for="username">Username</label>
        <input class="form-styling" type="text" name="username" placeholder=""/>

        <label for="password">Password</label>
        <input class="form-styling" type="text" name="password" placeholder=""/>

        <label for="confirmpassword">Confirm password</label>
        <input class="form-styling" type="text" name="confirmpassword" placeholder=""/>
				
				<button class="btn-signup" type="submit" name="signup">Sign Up</button>
      </form>

      <div class="forgot">
        <a href="#">Forgot your password?</a>
      </div>
    