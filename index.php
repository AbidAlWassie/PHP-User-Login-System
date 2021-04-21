<?php
  error_reporting(0);
  // include "includes/dbh.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Index Page</title>
</head>
<body>


<form action="includes/signup.inc.php" method="POST">

	<input type="text" name="firstname" placeholder="Enter Firstname">
	<br>
	<input type="text" name="lastname" placeholder="Enter Lastname">
	<br>
	<input type="text" name="email" placeholder="Enter Email">
	<br>
	<input type="text" name="username" placeholder="Enter Username">
	<br>
	<input type="text" name="password" placeholder="Enter Password">
	<br>

	<button type="submit" name="submit">Sign Up</button>

</form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="js/script.js"></script>
</body>
</html>

<?php
	$data = "Admin";
	$sql = "SELECT * FROM `users` WHERE `user_name`=?;";
	// $result = mysqli_query($connect, $sql);
	// $resultCheck = mysqli_num_rows($result);

	$stmt = mysqli_stmt_init($connect);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL Statement failed";
	} else {
		// Bing parameters to the placeholder
		mysqli_stmt_bind_param($stmt, "s", $data);
		// Run parameters inside database
		mysqli_stmt_execute($stmt);
	}

	// if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_name'] . "<br>";
		}
	// }

?>