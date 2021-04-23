<?php

if (isset($_POST['submit'])) {

  include_once 'dbh.inc.php';

  $fst = $_POST['firstname'];
  $lst = $_POST['lastname'];
  $em = $_POST['email'];
  $uid = $_POST['username'];
  $pwd = $_POST['password'];

  $sql = "INSERT INTO `users` (`user_firstname`, `user_lastname`, `user_email`, `user_name`, `user_password`) VALUES (?, ?, ?, ?, ?);";
  // mysqli_query($connect, $sql);
  $stmt = mysqli_stmt_init($connect);
  
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "Failed";
  } else {
    mysqli_stmt_bind_param($stmt, "sssss", $fst, $lst, $em, $uid, $pwd);
    mysqli_stmt_execute($stmt);
  }

  if (empty($fst) || empty($lst) || empty($em) || empty($uid) || empty($pwd)) {
    header("Location: ../index.php?signup=empty");
  } else {
      if (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        
      }
  }

} else {
    header("Location: ../index.php?signup=error");
  }

  
}
  
// header("Location: ../index.php?signup=success");


?>