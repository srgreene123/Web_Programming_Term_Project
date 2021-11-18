<?php
include_once('session_header.php');

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

$query = "SELECT * FROM products WHERE type='food'";
$items = $conn->query($query);

?>
<!DOCTYPE html>
<html>

<head>
	<title>Foods</title>
	<link rel="stylesheet" href="styles/styles.css">
	<link rel="stylesheet" href="styles/normalize.css">
</head>

<body>
	<div id="background_img1">
		<h1>Java Zone</h1>
	</div>
	<?php if ($_SESSION['loginst'] == 0) { ?>
		<ul id="navbar_div">
			<li><a href="home_page.php">Home</a></li>
			<li><a href="drinks_page.php">Drinks</a></li>
			<li><a class="active" href="foods_page.php">Foods</a></li>
			<li><a href="cart_page.php">Cart</a></li>
			<li><a href="checkout_page.php">Checkout</a></li>
			<li><a href="login_page.php">Login</a></li>
		</ul>
	<?php } else { ?>
		<ul id="navbar_div">
			<li><a href="home_page.php">Home</a></li>
			<li><a href="drinks_page.php">Drinks</a></li>
			<li><a class="active" href="foods_page.php">Foods</a></li>
			<li><a href="cart_page.php">Cart</a></li>
			<li><a href="checkout_page.php">Checkout</a></li>
			<li><a href="logout_page.php">Logout</a></li>
		</ul>
	<?php }; ?>
	<div class="row">
		<div class="column left">
			<h2>Your Cart:</h2>
			<div class="container1">
				<div class="center1">
					<button>Proceed to Checkout</button>
				</div>
			</div>
			</a>
		</div>
		<div class="column right" style="background-color:#bbb;">
			<input type="text" placeholder="Search..">
			<h2>Our Selection:</h2>
			<form action="addToCart.php" method="post">
				<div class="pics">
					<?php foreach ($items as $item) { ?>
						<div class="textbox">
							<a>
								<figure>
									<img src="<?php echo $item['image']; ?>" />
									<figcaption> <?php echo $item['name']; ?> <br>
										<input type="hidden" name="productToAdd" value="<?php echo $item['productID']; ?>"></input>
										<input type="submit" name="submit" value="Add to Cart"></input>
									</figcaption>
								</figure>
							</a>
						</div>
					<?php } ?>
				</div>
		</div>
		</form>
		<br>
		<br>
	</div>
	<footer id='footer'>
		<p>&copy; Java Zone Shop</p>
	</footer>
</body>

<script>
	<?php foreach ($items as $item) { ?>
		document.getElementById("<?php echo $item['productID']; ?>").onclick = function() {
			myFunction()
		};

		function myFunction() {
			document.getElementById("<?php echo $item['productID']; ?>").innerHTML = "<?php echo $item['name']; ?>" + "<br />" + "This delicious muffin is dotted throughout with sweet, juicy blueberries and a hint of lemon and dusted on top with sugar for a delightfully crunchy texture.";
		}
	<?php } ?>

	document.getElementById("demo2").onclick = function() {
		myFunction()
	};
	document.getElementById("demo3").onclick = function() {
		myFunction3()
	};
	document.getElementById("demo4").onclick = function() {
		myFunction4()
	};
	document.getElementById("demo5").onclick = function() {
		myFunction5()
	};
	document.getElementById("demo6").onclick = function() {
		myFunction6()
	};
	document.getElementById("demo7").onclick = function() {
		myFunction7()
	};
	document.getElementById("demo8").onclick = function() {
		myFunction8()
	};
	document.getElementById("demo9").onclick = function() {
		myFunction9()
	};
	document.getElementById("demo10").onclick = function() {
		myFunction10()
	};
	document.getElementById("demo11").onclick = function() {
		myFunction11()
	};


	function myFunction() {
		document.getElementById("<?php echo $item['productID']; ?>").innerHTML = "Blueberry Muffin" + "<br />" + "MenuID: 1" + "<br />" + "This delicious muffin is dotted throughout with sweet, juicy blueberries and a hint of lemon and dusted on top with sugar for a delightfully crunchy texture." + "<br />" + "Type: Dough" + "<br />" + "Calories: 426" + "<br />" + "Tags: Blueberry, Muffin, Berry, Dough, Fruit";
	}

	function myFunction3() {
		document.getElementById("demo").innerHTML = "Chocolate Chip Muffin" + "<br />" + "MenuID: 2" + "<br />" + "Our moist, muffin is mixed with four (that’s right, four) different Colombian single-origin chocolates, including a milk chocolate and 3 unique semi-sweet chocolates. Craving chocolate, anyone?" + "<br />" + "Type: Dough" + "<br />" + "Calories: 486" + "<br />" + "Tags: Chocolate, Muffin, Chip, Dough";
	}

	function myFunction4() {
		document.getElementById("demo").innerHTML = "New York Bagel" + "<br />" + "MenuID: 3" + "<br />" + "Our signature New York–style bagel topped with cream cheese" + "<br />" + "Type: Dough" + "<br />" + "Calories: 252" + "<br />" + "Tags: New, York, Bagel, Cream, Dough, Cheese";
	}

	function myFunction5() {
		document.getElementById("demo").innerHTML = "Cinnamon Raisin Bagel" + "<br />" + "MenuID: 4" + "<br />" + "Our Original-style boiled bagel gets sweet cinnamon swirled into the dough, just before heaps of raisins are mixed in, adding a little sweet to your savory breakfast." + "<br />" + "Type: Dough" + "<br />" + "Calories: 270" + "<br />" + "Tags: Cinnamon, Raisin, Cream, Cheese, Bagel, Dough";
	}

	function myFunction6() {
		document.getElementById("demo").innerHTML = "Raspberry Pastry" + "<br />" + "MenuID: 5" + "<br />" + "Light, flaky, real butter raspberry pastry caked with frosting creates a perfect balance that'll satisfy your sweet tooth and bring on a moment of bliss" + "<br />" + "Type: Dough" + "<br />" + "Calories: 390" + "<br />" + "Tags: Raspberry, Pastry, Frosted, Dough, Fruit";
	}

	function myFunction7() {
		document.getElementById("demo").innerHTML = "Apple Turnover Pastry" + "<br />" + "MenuID: 6" + "<br />" + "The sweet and tender flavors of baked apples with a flaky pie crust." + "<br />" + "Type: Dough" + "<br />" + "Calories: 377" + "<br />" + "Tags: Apple, Pastry, Frosted, Dough, Fruit";
	}

	function myFunction8() {
		document.getElementById("demo").innerHTML = "Cheese Danish" + "<br />" + "MenuID: 7" + "<br />" + "Our take on the traditional cheese Danish pairs flaky croissant dough with Neufchâtel cheese—a simple recipe with simple ingredients you’re sure to love." + "<br />" + "Type: Dough" + "<br />" + "Calories: 280" + "<br />" + "Tags: Cheese, Savory, Danish, Dough";
	}

	function myFunction9() {
		document.getElementById("demo").innerHTML = "Frosted Danish" + "<br />" + "MenuID: 8" + "<br />" + "Frosted filling surrounded by a fluffy danish, topped with powedered suger for a dreamy combination of flavors that will inspire visions of this holiday delight long after your last bite." + "<br />" + "Type: Dough" + "<br />" + "Calories: 350" + "<br />" + "Tags: Powdered, Sugar, Frosted, Danish, Dough";
	}

	function myFunction10() {
		document.getElementById("demo").innerHTML = "Small Fruit Cup" + "<br />" + "MenuID: 9" + "<br />" + "A nutritious fruit mix made with chopped pieces of red and green apples, mandarin orange segments, fresh strawberry slices, and blueberries, served chilled. Prepared fresh daily." + "<br />" + "Type: Fruit" + "<br />" + "Calories: 60" + "<br />" + "Tags: Orange, Mandarin, Strawberry, Blueberry, Apple, Fruit";
	}

	function myFunction11() {
		document.getElementById("demo").innerHTML = "Large Fruit Cup" + "<br />" + "MenuID: 10" + "<br />" + "A HARDY meal of various fresh and crisp fruit to keep scurvy away" + "<br />" + "Type: Fruit" + "<br />" + "Calories: 180" + "<br />" + "Tags: Fruit" + "<br />" + "Calories: 60" + "<br />" + "Tags: Orange, Mandarin, Strawberry, Blueberry, Apple, Spinach, Fruit";
	}
</script>

</html>