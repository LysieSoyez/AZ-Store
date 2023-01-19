<?php 
session_start();


$_SESSION['cartContent'] = 0;

foreach($_SESSION['cart'] as $cart){
    $_SESSION['cartContent']  += $cart['qty'];
 }



/*echo "<pre>";
var_dump($_SESSION['cart']);
echo "</pre>";*/

if (isset($_SESSION['cart'])){
$sum = 0;
foreach($_SESSION['cart'] as $item){
    $price = $item['pro_price'];
    $quant = $item['qty'];
    $sum += ($price * $quant);
}
}

$_SESSION['sum'] = $sum;




/*echo "<pre>";
echo $sum;
echo "<pre>";*/

if (isset($_POST['id'])) {
    $upid = $_POST['id'];
    if (array_key_exists($upid, $_SESSION['cart'])) {
        $_SESSION['cart'][$upid]['qty'] -= 1;
        if($_SESSION['cart'][$upid]['qty'] <= 0){
            unset($_SESSION['cart'][$upid]);
        }
        header('Location: shopping-cart.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="See shopping cart for AZ[store]">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <title>AZ[STORE] - Shopping Cart</title>
</head>
<body>
    
    <!-- nav -->
    <nav>
        <a href="./index.php">
            AZ[Store]
        </a>
        <div class="shop__nav">
        <a href="./index.php">
            Home
        </a>
        <a href="./about.php">
            About
        </a>
        <a href="#">
            Products
        </a>
        <a href="#">
            Contact
        </a>
        </div>
        <div class="shop__login">
            <a href="./shopping-cart.php" class="shop__login" id="card"><?php echo (isset($_SESSION['cart'])) ? $_SESSION['cartContent'] : 0;?>
                <img src="./assets/images/shopping-cart.svg">
            </a> 
            <a href="#" class="shop__login" id="login">
                <p>
                    Login
                </p>
            </a>
        </div>
    </nav>
    
<section class="shop__cart">

<?php 


/*foreach ($_SESSION['cart'] as $cart){
echo '<div class="cart__line">';
    echo '<span>'.$cart['qty'].'</span>';
    echo '<span>'.$items[$cart['pro_id']-1]['product'].'</span>';
    echo '<span>'.$items[$cart['pro_id']-1]['price'].'</span>';
    echo '<form method="post"><input style="display:none;" name="id" value='.$cart['pro_id'].'><input type="submit" value="-"></form>';
    echo '</div>';
}
*/


?>

<main class= "shopping_cart">
        <div class="product">
            <section class="member">
                <h2>Free Delivery for <span>Members</span>.</h2>
                <p>Become a Nike Member to get fast and <span>free delivery</span>.</p>
            </section>
            <section class="bag">
                <h2>bag</h2>
            </section>
            <section class="products">
            <?php 
                foreach ($_SESSION['cart'] as $cart){
                echo '<div class="cart__line">';
                    echo '<span class="name_product">'.$_SESSION['items'][$cart['pro_id']-1]['product'].'</span>';
                    echo '<span class="price_product">'.$_SESSION['items'][$cart['pro_id']-1]['price'].' $</span><br>';
                    echo '<span class="quantity_product"> Quantity:  '.$cart['qty'].'</span>';
                    echo '<form method="post"><input style="display:none;" name="id" value='.$cart['pro_id'].'><input type="submit" value="-"></form>';
                    echo '</div>';
                }
                ?>
            </section>
               
        </div>

        <div class="pay">
            <h2>Summary</h2>
            <h3>Do you have a Promo Code?</h3>
            <form>
                <input type="text" id="promo-code" name="promo-code">
                <button type="submit">Apply</button>
            </form>

             <h4>total :  <?php echo $sum;?> $</h4>
             <a href="./checkout.php" class="checkout">Checkout</a>
             <a href="#" class="paypal">Paypal</a>
        </div>

    </main>
<section class="shop__cart">

</section>

<!-- Validation place -->

<!-- footer-->
<footer>
<a href="./index.php">
            Home
        </a>
        <a href="./about.php">
            About
        </a>
        <a href="#">
            Products
        </a>
        <a href="#">
            Contact
        </a>
    </footer>
</body>
</html>