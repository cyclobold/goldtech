<?php 
ini_set("display_errors", "on");
session_start();
//print "<pre>";
//print_r($_SESSION);

$name = $_SESSION['name'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Name</title>
</head>
<body>

	<h4>Welcome <a href='logout.php'>Logout</a></h4>

		<?php require "forms/process_forms.php"; ?>
		<form action='' method="POST">

		<label>Old Name: </label>
		<input type='text' name='old_name' value="<?php echo $name; ?>" disabled><br>

		<label>New Name: </label>
		<input type='text' name='new_name'><br>

		<input type='submit' name='update_name' value='Save Update'>

	</form>

</body>
</html>