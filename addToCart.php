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

	if (isset($_POST["submit"])) {
	  $productID = $_POST["productToAdd"];
	  echo $productID;
	} else {
	  echo 'ERROR';
	}

	// $stmt = $conn->prepare("INSERT into cart(?) VALUES (?)");
	// $stmt->bind_param("i", $productID);
	// $stmt->execute();
	// $stmt->close();

	$conn->close();

?>