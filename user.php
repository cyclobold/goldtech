<?php 
session_start();
require "incs/__user_data.incs.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
</head>
<body>

	<?php 

		echo "Welcome ". $name;

		echo "<h4><a href='update_name.php'>Update Name</a></h4>";



		echo "<script>

				alert('Welcome ' + '$name');


			</script>";

	?>

</body>
</html>