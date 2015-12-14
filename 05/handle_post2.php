<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Forum Posting</title>
</head>
<body>
	<?php // Script 5.3 - handle_post.php #2
	/* This script receives five values from posting.html:
	first_name, last_name, email, posting, submit */

	// Address error management, if you want.

	// Get the values from the $_POST array:
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$posting = nl2br($_POST['posting']); //convierte cada nueva linea a un break tag, para que el posting se pueda ver igual que en el textarea y no en una sola linea

	// Create a full name variable:
	$name = $first_name . ' ' . $last_name;

	// Print a message:
	print "<div>Thank you, $name, for your posting:
	<p>$posting</p></div>";

	?>
</body>
</html>