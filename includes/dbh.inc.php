<?php

  $server = "localhost";
  $user = "root";
  $password = "";
  $database = "loginsystem";
  $port = "3307";

  $connect = mysqli_connect($server, $user, $password, $database, $port);

  if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
  }

?>