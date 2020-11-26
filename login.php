<?php 
ini_set("display_errors", 'on');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Log iN</title>
</head>
<body>

		<?php require "forms/process_forms.php"; ?>

		<form action='' method="POST">

		<label>Email: </label>
		<input type='email' name='email'><br>

		<label>Password: </label>
		<input type='password' name='password'><br>

		<input type='submit' name='login' value='Log in'>

	</form>

</body>
</html>