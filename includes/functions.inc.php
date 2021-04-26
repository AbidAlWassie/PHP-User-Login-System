<?php

function emptyInputSignup($name, $email, $username, $password, $confirmPassword) {
  $result = "";
  if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmPassword)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}


function invalidUsername($username) {
  $result = "";
  $pattern = "/^[a-zA-Z0-9]*$/";
  if (!preg_match($pattern, $username)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function invalidEmail($email) {
  $result = "";
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function pwdMatch($password, $confirmPassword) {
  $result = "";
  if ($password !== $confirmPassword) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function usernameExists($connect, $username) {

}