<?php
include_once 'dbh.inc.php';

$fst = $_POST['firstname'];
$lst = $_POST['lastname'];
$em = $_POST['email'];
$uid = $_POST['username'];
$pwd = $_POST['password'];

$sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_name, user_password) VALUES ('$fst','$lst','$em','$uid','$pwd');";
mysqli_query($connect, $sql);

header("Location: ../index.php?signup=success");

?>