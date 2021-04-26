<?php

function emptyInputSignup($name, $email, $username, $password, $confirmpassword) {
  $result = "";
  if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmpassword)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;


}

function invalidUsername($username) {
  $result = "";
  $pattern = "/^[A-Za-z]\S*$/";
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



function pwdMatch($password, $confirmpassword) {
  $result = "";
  if ($password !== $confirmpassword) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}

function usernameExists($connect, $username, $email) {
  $sql = "SELECT * FROM `users` WHERE `uid` = ? OR `email` = ?;";
  $stmt = mysqli_stmt_init($connect);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location ../index.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  } else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);

}

function createUser($connect, $name, $email, $username, $password) {
  $sql = "INSERT INTO users (name, email, username, password) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($connect);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location ../index.php?error=stmtfailed");
    exit();
  }

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPassword);

  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location ../index.php?error=none");
    exit();
}

?>