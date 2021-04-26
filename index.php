<?php
  error_reporting(0);
  // include "includes/dbh.inc.php";
  $title = "Home Page";
	// Import Header Component -- Styles, Links and Stuff
	include_once "header.php";
	// Import Navbar
	include_once "nav.php";
?>

<?php
	// Import Login Component
	include_once "login.php";
	// Import Footer Component
	include_once "footer.php";
?>

<?php
	$data = "Admin";
	$sql = "SELECT * FROM `users` WHERE `username`=?;";
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
			echo $row['username'] . "<br>";
		}
	// }

?>