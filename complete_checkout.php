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
	  $card_info = $_POST["card_num"];
	  $street_name = $_POST["street_name"];
	  $city = $_POST["city"];
	  $state = $_POST["state"];
	  $zipcode = $_POST["zip_code"];
	} else {
	  header("location: checkout_page.html");
	}

  $full_addr = $street_name . " " . $city . " " . $state . " " . $zipcode;
  $userID = 4;
  $total = 100.91;
  $promoCode = '0';

  $stmt = $conn->prepare("INSERT into order_summary(address, userID, paymentStatus, grandTotal, promoCodeID) VALUES (?,?,?,?,?)");
  $stmt->bind_param("sisds", $full_addr, $userID, $card_num, $total, $promoCode);
  $stmt->execute();
  $stmt->close();


//header("location: home_page.html");

$conn->close();
?>