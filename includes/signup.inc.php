<?php 


if (isset($_POST["signup"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];

  require_once "dbh.inc.php";
  require_once "functions.inc.php";

  if (emptyInputSignup($name, $email, $username, $password, $confirmpassword) !== false) {
    header("location: ../index.php?error=empty_input");
    exit();
  }


  if (invalidEmail($email) !== false) {
    header("location: ../index.php?error=invalid_email");
    exit();
  }

  if (matchPassword($password, $confirmpassword) !== false) {
    header("location: ../index.php?error=passwords_dont_match");
    exit();
  }

  if (usernameExists($connect, $username, $email) !== false) {
    header("location: ../index.php?error=username_already_taken");
    exit();
  }

  createUser($connect, $name, $email, $username, $password);

  
}
else {
  header("location: ../index.php");
  exit();
  // echo "Success!";
}