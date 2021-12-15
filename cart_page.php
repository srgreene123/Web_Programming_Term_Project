<?php
include_once('session_header.php');

if ($_SESSION['loginst'] == 0) {
    header("Location: login_page.php");
}

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

$query = "SELECT products.name, cart.quantity, cart.productID, products.price FROM cart JOIN products ON cart.productID = products.productID";
$cartItems = $conn->query($query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Cart Page</title>
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<div id='cartBody'>

    <body>
        <div id="background_img1">
            <h1>Java Zone</h1>
        </div>
        <?php if ($_SESSION['loginst'] == 0) { ?>
            <ul id="navbar_div">
                <li><a href="home_page.php">Home</a></li>
                <li><a href="drinks_page.php">Drinks</a></li>
                <li><a href="foods_page.php">Foods</a></li>
                <li><a class="active" href="cart_page.php">Cart</a></li>
                <li><a href="checkout_page.php">Checkout</a></li>
                <li><a href="login_page.php">Login</a></li>
            </ul>
        <?php } else { ?>
            <ul id="navbar_div">
                <li><a href="home_page.php">Home</a></li>
                <li><a href="drinks_page.php">Drinks</a></li>
                <li><a href="foods_page.php">Foods</a></li>
                <li><a class="active" href="cart_page.php">Cart</a></li>
                <li><a href="checkout_page.php">Checkout</a></li>
                <li><a href="logout_page.php">Logout</a></li>
            </ul>
        <?php }; ?>
        <div id="cart">
            <h2>REVIEW YOUR CART!</h2>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>&nbsp;</th>
                </tr>
                <!-- cart -->
                <?php
                $grandTotal = 0;
                foreach ($cartItems as $cartItem) :
                    $total = $cartItem['quantity'] * $cartItem['price'];
                    $productID = $cartItem['productID'];
                    $updateTotal = "UPDATE cart SET total = '$total' WHERE cart.productID = '$productID'";
                    mysqli_query($conn, $updateTotal);
                    $grandTotal = $grandTotal + $total;
                ?>
                    <tr>
                        <td><?php echo $cartItem['name']; ?></td>
                        <td>$<?php echo $cartItem['price']; ?></td>
                        <td><?php echo $cartItem['quantity']; ?></td>
                        <td>$<?php echo $total; ?></td>
                        <td>
                            <form action="deleteFromCart.php" method="post">
                                <input type="hidden" name="product_id" value="<?php echo $cartItem['productID']; ?>" />
                                <input type="submit" name='submit' value="Delete" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php ?>
            </table>
            <h2>Grand Total: $<?php echo $grandTotal ?></h2>

            <form action="checkout_page.php" method="post">
                <button class='checkout'>Proceed to Checkout</button>
            </form>
        </div>
        <footer id="footer">
            <p>&copy; Java Zone Shop</p>
        </footer>
    </body>
</div>

</html>