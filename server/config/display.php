<?php
	include "includes/defs.php";

	# Set name and job to the value entered in the form.
	$name = $_GET['name'];
	$job = $_GET['job'];

	$result = addUser($name, $job);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>Add new user</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="stylesheet" type="text/css" href="styles/wp.css">
	</head>
	<body>  

		<p>
			<?php
			if (empty($name)) {
				echo "<p class='alert'>Error: Missing value\n</p>";
			} else {
				echo "$ = $result"; }
			?>
		</p>

		<h2>Another factorisation</h2>

		<form method="get" action="factorise.php">
		<p>Number to factorise: 
		<input type="text" name="number" value="<?= $number ?>">
		<p><input type="submit" value="Factorise it!">
		</form>
		</body>
		</html>
