<?php 

if (isset($_POST["submit"])) {
  echo "Hello";
} else {
  header("location: ../index.php");
}