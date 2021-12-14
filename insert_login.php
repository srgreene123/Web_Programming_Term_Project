<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "java_zone_database";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	
	//Bucket-List
	//Make sure username is unique. (Already does this but better error message could be shown
	//Make sure password is long enough
	//BONUS adjust phone
	
	//-Adjusted the Styles sheet for adding registration to login page (can be easily adjusted to look better)
	//-Added insert_login.php to add users
	//-Added 

	
	if (isset($_POST["REGsubmit"])) {
		$user = $_POST["user"] ?? '';
		$pswd = $_POST["pswd"] ?? '';
		$phone = $_POST["phone"] ?? '';
		$REGFIRST = $_POST["REGFIRST"] ?? '';
		$REGLAST = $_POST["REGLAST"] ?? '';
	} else {
		include('login_page.php');
	}
	/*
	if(strlen($pswd) < 5 ) 
	{
		echo "Password is less than 5 characters";
		include('login_page.php');
	}
	*/
	
	if(!empty($_POST["REGFIRRST"]) or !empty($_POST["REGLAST"]) or !empty($_POST["phone"]) or !empty($_POST["pswd"]) or !empty($_POST["user"]))
	{
		$salted = "1444asajkasdlf".$pswd."42kldkfa43";
		
		$hashed = hash('sha512', $pswd);
		
		$sql = "INSERT INTO users (firstName, lastName, username, password, phoneNumber) VALUES ('$REGFIRST', '$REGLAST', '$user', '$hashed', '$phone')";
		
		if(mysqli_query($conn, $sql)){
			echo "Account Succesfully Created!";
			include('login_page.php');
			}
			else
			{
				echo "ERROR: Duplicate username";
				include('login_page.php');
			}
	}
	else
	{
		echo "Please fill in the required fields before signing up";
		include('login_page.php');
	}

	$conn->close();
?>