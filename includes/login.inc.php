<?php

if (isset($_POST["signin"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  require_once "dbh.inc.php";
  require_once "functions.inc.php";


  if(emptyInputLogin($username, $password) === false) {
    header("location: ../index.php?emptyloginfields");
    exit();
  } else {
    
  }

  loginUser($connect, $username, $password);
} else {
  header("location: ../index.php");
  exit();
}