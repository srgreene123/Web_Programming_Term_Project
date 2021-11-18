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

	$loginst = 1;
	
	if (isset($_POST["REGsubmit"])) {
		$user = $_POST["user"] ?? '';
		$pswd = $_POST["pswd"] ?? '';
		$phone = $_POST["phone"] ?? '';
		$REGFIRST = $_POST["REGFIRST"] ?? '';
		$REGLAST = $_POST["REGLAST"] ?? '';
	} else {
		include('login_page.php');
	}

	$sql = "INSERT INTO users (firstName, lastName, username, password, phoneNumber) VALUES ('$REGFIRST', '$REGLAST', '$user', '$pswd', '$phone')";
	
	if(mysqli_query($conn, $sql)){
		echo "Account Succesfully Created!";
		include('home_page.php');
	}
	else
	{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		include('login_page.php');
	}


	$conn->close();
?>