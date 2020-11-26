<?php 

function login_user($email, $password){
		
		require "database/db.php";


		$email = mysqli_real_escape_string($__conn, trim($email));
		$password = mysqli_real_escape_string($__conn, trim($password));


		$query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
		$result = mysqli_query($__conn, $query);

		if($result){
			//the query ran..
			session_start();
			//logging in 
			$_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);

			//redirect ..
			header("location: user.php");
		
		}else{
			//the query did not run 
			echo "We could not get the user info: ".mysqli_error($__conn);

		}




}


function update_user_name($user_id, $new_name){

	require "database/db.php";

	$user_id = (int)$user_id;
	$new_name = mysqli_real_escape_string($__conn, trim($new_name));

	$update_query = "UPDATE users SET name = '$new_name' WHERE id = $user_id LIMIT 1";

	$result = mysqli_query($__conn, $update_query);

	if($result){
		echo "User's name was updated successfully...";

		$_SESSION['name'] = $new_name;
	}else{

		echo "Sorry, we could not change your name at the moment.";
	}

}