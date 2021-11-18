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

	$query = "SELECT * FROM products WHERE type='drink'";
	$items = $conn->query($query);

?>
<!DOCTYPE html>
<html>

<head>
	<title>Drinks</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="normalize.css">
</head>

<body>
	<div id="background_img1">
		<h1>Java Zone</h1>
	</div>
	<ul id="navbar_div">
		<li><a href="home_page.php">Home</a></li>
	<li><a class="active" href="drinks_page.php">Drinks</a></li>
        	<li><a href="foods_page.php">Foods</a></li>
        	<li><a href="cart_page.php">Cart</a></li>
		<li><a href="checkout_page.php">Checkout</a></li>
		<li><a href="login_page.php">Login</a></li>
	</ul>
	<div class="row">
  <div class="column left">
    <h2>Your Cart:</h2>
	<div class = "container1">
		<div class="center1">
			<a href="checkout_page.php">
			<button>Proceed to Checkout</button>
		</div>
	</div>
</a>
  </div>
  <div class="column right" style="background-color:#bbb;">
    <input type="text" placeholder="Search..">
	<h2>Drink Menu</h2>
	<div class="pics">
		<?php foreach($items as $item) { ?>
			<div class="textbox">
		    <a>
				<figure>
					<img src="<?php echo $item['image'];?>" />
					<figcaption> <?php echo $item['name'];?> <br>
						<input type="hidden" name="<?php echo $item['productID'];?>"></input>
						<input type="submit" name="submit" value="Add to Cart"></input>
					</figcaption>
				</figure>
		    </a>
			</div>
		<?php }?>
	</div>
  </div>
</div>
	<footer id='footer'>
		<p>&copy; Java Zone Shop</p>
	</footer>
</body>

	<script>
	document.getElementById("ISD1").onclick = function() {myFunction()};
	document.getElementById("ISD2").onclick = function() {myFunction2()};
	document.getElementById("ISD3").onclick = function() {myFunction3()};
	document.getElementById("HC1").onclick = function() {myFunction4()};
	document.getElementById("HC2").onclick = function() {myFunction5()};
	document.getElementById("HC3").onclick = function() {myFunction6()};
	document.getElementById("HC4").onclick = function() {myFunction7()};
	document.getElementById("HC5").onclick = function() {myFunction8()};
	
	function myFunction() {
	document.getElementById("demo").innerHTML = "Dalogna Coffee" + "<br />" + "MenuID: ISD1" + "<br />" + "Nothing better to start a hot day off with a nice cup of Dalogna Coffee. The combination of the rich whipped coffee and creamy milk will get you off to a great start on the day." + "<br />" + "Type: Iced Specialty Drink" + "<br/>" + "Calories: 374" + "<br />" + "Tags: Instant Coffee, Sugar, Water, Milk" ;
	}
	
	function myFunction2() {
	document.getElementById("demo").innerHTML = "Fizzy Strawberry Lemonade" + "<br />" + "MenuID: ISD2" + "<br />" + "Refresh your day with a Fizzy Strawberry Lemonade. You won't be able to get over the thirst quenching fizzy splash of lemonade and strawberry" + "<br />" + "Type: Iced Specialty Drink" + "<br />" + "Calories: 160" + "<br />" + "Tags: Lemonade, Strawberry, Club soda" ;
	}
	
	function myFunction3() {
	document.getElementById("demo").innerHTML = "TBD" + "<br />" + "MenuID: ISD3" + "<br />" + "TBD" + "<br />" + "Type: TBD" + "<br />" + "Calories: TBD" + "<br />" + "Tags: " ;
	}
	
	function myFunction4() {
	document.getElementById("demo").innerHTML = "Pumpkin Spice Latte" + "<br />" + "MenuID: HC1" + "<br />" + "Get in the fall spirit by having a cup of our Pumpkin Spice Latte as the steamed milk and espresso keeps you warm as you enjoy the nice fall flavors of pumpkin and cinnamon." + "<br />" + "Type: Hot Coffee" + "<br />" + "Calories: 390" + "<br />" + "Tags: Milk, Espresso, Pumpkin, Cinnamon" ;
	}
	
	function myFunction5() {
	document.getElementById("demo").innerHTML = "Dark Roast Coffee" + "<br />" + "MenuID: HC2" + "<br />" + "Can't go wrong with going simple. Our signature dark roast will wake you up with it's rich, round taste" + "<br />" + "Type: Hot Coffee" + "<br />" + "Calories: 5" + "<br />" + "Tags: Dark Roast, Coffee" ;
	}
	
	function myFunction6() {
	document.getElementById("demo").innerHTML = "Light Roast Coffee " + "<br />" + "MenuID: HC3" + "<br />" + "Lightly roasted coffee that is soft and mellow, but can give you the energy to power through the mornings." + "<br />" + "Type: Hot Coffee" + "<br />" + "Calories: 5" + "<br />" + "Tags: Light Roast Coffee" ;
	}
	
	function myFunction7() {
	document.getElementById("demo").innerHTML = "Cafe Latte" + "<br />" + "MenuID: HC4" + "<br />" + "The balance between our rich espresso and creamy steamed milk topped with a layer of foam will do it's job to satisfy your day." + "<br />" + "Type: HC4" + "<br />" + "Calories: 190" + "<br />" + "Tags: Espresso, Milk, Foam" ;
	}
	
	function myFunction8() {
	document.getElementById("demo").innerHTML = "Caramel Macchiato " + "<br />" + "MenuID: HC5" + "<br />" + "Our signature Caramel Macchiato made from our dark espresso with a hint of vanilla and freshly steamed milk topped with a drizzle of caramel might just be the solution to your life." + "<br />" + "Type: Hot Coffee" + "<br />" + "Calories: 250" + "<br />" + "Tags: Espresso, Milk, Caramel, Vanilla" ;
	}
	

	</script>

</html>