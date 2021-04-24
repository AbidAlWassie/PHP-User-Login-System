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
