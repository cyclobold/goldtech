<?php 
require "functions/functions.php";
//Process Login ..
if(isset($_POST['login'])){

	$email = trim($_POST['email']);
	$password = trim($_POST['password']);


	if(empty($email) || empty($password)){
		echo "Email and Password are required";
	}else{
		//login the user ..
		login_user($email, $password);

	}

}

if(isset($_POST['register'])){

	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);

	if(empty($name)){
		echo "Please enter your name";
	}

	elseif (empty($email)) {
		# code...
		echo "Please enter your email";
	}

	elseif(empty($password)){
		echo "Please enter your password";
	}

	else{
		//no error..
		//check if the user exists already..
		require("database/db.php");

		//CRUD Cycle
		//
		//SQL for inserting into users table
		$query = "INSERT INTO users (name, email, password) VALUES('$name', '$email', '$password')";
		$result = mysqli_query($__conn, $query);
		if($result){
			echo "User registered successfully!";
		}else{
			echo "Could not register user";
		}
	}


}



//Update Profile Name ..
if(isset($_POST['update_name'])){

	$name = trim($_POST['new_name']);


	//check if name was entered ..
	if(empty($name)){

		echo "Please enter the new name";
	}else{
		$user_id = $_SESSION['id'];

		//update..
		update_user_name($user_id, $name);

	}






}