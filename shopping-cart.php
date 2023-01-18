<?php 
session_start();

$items = [
    [
        'id' => 1,
        'product' => 'Nike Air ',
        'price' => 234,
        'image_url' => './assets/images/shoe_one.png', 
    ], 
    [
        'id' => 2,
        'product' => 'Nike Air ',
        'price' => 234,
        'image_url' => './assets/images/shoe_one.png', 
    ],
    [
        'id' => 3,
        'product' => 'Nike Air ',
        'price' => 234,
        'image_url' => './assets/images/shoe_one.png', 
    ],
    [
        'id' => 4,
        'product' => 'Nike Air ',
        'price' => 234,
        'image_url' => './assets/images/shoe_one.png', 
    ]

];

echo "<pre>";
var_dump($_SESSION['cart']);
echo "</pre>";

$sum = 0;
foreach($_SESSION['cart'] as $item){
    $price = $item['pro_price'];
    $quant = $item['qty'];
    $sum += ($price * $quant);
}

echo "<pre>";
echo $sum;
echo "<pre>";


if (isset($_POST['id'])) {
    $proid = $_POST['id'];
    unset($_SESSION['cart'][$proid]);

    if (empty($_SESSION['cart'])) {
    
        header('Location: shopping-cart.php');
        exit;
    }
}

if (isset($_POST['id'])) {
    $upid = $_POST['id'];
    $acol = array_column($_SESSION['cart'], 'pro_id');
    if (in_array($_POST['id'], $acol)) {
      $_SESSION['cart'][$upid][$card['qty']] = $_POST[$card['qty']];
    
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
        <a href="#">
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
            <a href="./shopping-cart.php" class="shop__login" id="card"><?php echo count($_SESSION['cart']);?>
                <img src="./assets/images/shopping-cart.svg">
            </a> 
            <a href="./checkout.php" class="shop__login" id="login">
                <p>
                    Login
                </p>
            </a>
        </div>
    </nav>
    
<section class="shop__cart">

<?php 


foreach ($_SESSION['cart'] as $cart){
echo '<div class="cart__line">';
    echo '<span>'.$cart['qty'].'</span>';
    echo '<span>'.$items[$cart['pro_id']-1]['product'].'</span>';
    echo '<span>'.$items[$cart['pro_id']-1]['price'].'</span>';
    echo '<form method="post"><input style="display:none;" name="id" value='.$cart['pro_id'].'><input type="submit" value="-"></form>';
    echo '</div>';
}


?>



</section>

<!-- Validation place -->

<!-- footer-->
<footer>
        <a href="./index.php">
            Home
        </a>
        <a href="#">
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