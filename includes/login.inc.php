<?php

if (isset($_POST["signin"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  require_once "dbh.inc.php";
  require_once "functions.inc.php";


  function emptyInputLogin($email, $username, $password) {
    exit();
  }

  loginUser($connect, $email, $username, $password);
} else {
  header("location: ../index.php");
  exit();
}