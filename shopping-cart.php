<?php 
session_start();

$_SESSION['cart'];


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
foreach($items as $item){
    $price = $item['price'];
    $sum += $price;
}

echo "<pre>";
echo $sum;
echo "<pre>";

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
    <p>
            AZ[Store]
        </p>
        <div class="shop__nav">
        <a>
            Home
        </a>
        <a>
            About
        </a>
        <a>
            Products
        </a>
        <a>
            Contact
        </a>
        </div>
        <button class="shop__login" id="login">
            <img src="./assets/images/shopping-cart.svg">
            <p> 
                Login
            </p>
        </button> 
    </nav>
    
<section class="shop__cart">

<?php 


foreach ($_SESSION['cart'] as $cart){
echo '<div class="cart__line">';
    echo '<span>'.$cart['qty'].'</span>';
    echo '<span>'.$items[$cart['pro_id']-1]['product'].'</span>';
    echo '<span>'.$items[$cart['pro_id']-1]['price'].'</span>';
    echo '<form method="post"><input type="submit" value="-"></form>';
    echo '</div>';
}


?>



</section>

<!-- Validation place -->

<!-- footer-->
<footer>
        <a>
            Home
        </a>
        <a>
            About
        </a>
        <a>
            Products
        </a>
        <a>
            Contact
        </a>
    </footer>
</body>
</html>