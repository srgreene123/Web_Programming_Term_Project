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

	$loginst = 1;

	if (isset($_POST["submit"])) {
		$uname = $_POST["uname"] ?? '';
		$password = $_POST["password"] ?? '';
		$check = $_POST["check"] ?? '';
	} else {
		include('login_page.html');
	}

	$query = "SELECT * FROM users WHERE username='$uname' AND password='$password'";
	$data = $conn->query($query);

	$row_count = mysqli_num_rows($data);
	if($row_count > 0) {
		if($check=='1') {
			setcookie("mycookie", TRUE, time()+6);
		}
		$loginst = 0;
		include('home_page.php');
	} else {
		include('error.html');
	}

	$conn->close();
?>