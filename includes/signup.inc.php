<?php 


if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $uid = $_POST["uid"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirmpassword"];

  require_once "dbh.inc.php";
  require_once "functions.inc.php";

  if (emptyInputSignup($name, $email, $uid, $password, $confirmPassword) !== false) {
    header("location: ../index.php?error=emptyinput");
    exit();
  }

  if (invalidUsername($username) !== false) {
    header("location: ../index.php?error=emptyusername");
    exit();
  }

  if (invalidEmail($email) !== false) {
    header("location: ../index.php?error=emptyinput");
    exit();
  }

  if (pwdMatch($password, $confirmPassword) !== false) {
    header("location: ../index.php?error=passwordsdontmatch");
    exit();
  }

  if (usernameExists($connect, $username) !== false) {
    header("location: ../index.php?error=usernamealreadytaken");
    exit();
  }

  createUser($connect, $name, $email, $password);

  echo "Success!";
} else {
  header("location: ../index.php");
  exit();
}