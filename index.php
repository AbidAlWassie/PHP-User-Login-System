<?php

  include "includes/dbh.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Index Page</title>
</head>
<body>
<?php

	$sql = "SELECT * FROM `users`;";
	$result = mysqli_query($connect, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_name'] . "<br>";
		}
	}

?>
</body>
</html>