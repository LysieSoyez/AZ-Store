<?php 

session_start();

if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
} 

$_SESSION['cartContent'] = 0;

foreach($_SESSION['cart'] as $cart){
   $_SESSION['cartContent']  += $cart['qty'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AZ[store]">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <title>AZ[Store]</title>
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
                <img alt="shopping-cart" src="./assets/images/shopping-cart.svg">
            </a> 
            <a href="./checkout.php" class="shop__login" id="login">
                <p>
                    Login
                </p>
            </a> 
        </div>
    </nav>

    <!--Header (shoe the right one)-->
    <header>
        <div class="shop__HeroSection">
            <section class= heroSection1>
            <span class ="nike">Nike</span>
            <img alt="" src="assets/images/shoe_one.webp" alt="">
            </section>
           <section class= "heroSection2">
           <h1>Shoe the right <span>One</span>.</h1>
           <a href="#">See our store</a>
           </section>
          
        </div>
    </header>

    <!--main (our last products)-->
    <main>


    <h3> Our <span class="shop__h3__span">last products </span></h3>

    <section class ="shop__article">

<?php
$items = [
    [
        'id' => 1,
        'product' => 'NIKE Air',
        'price' => 234,
        'image_url' => './assets/images/shoe_one.webp', 
    ], 
    [
        'id' => 2,
        'product' => 'NIKE Vaporfly ',
        'price' => 149,
        'image_url' => './assets/images/Nike-vaporfly.webp', 
    ],
    [
        'id' => 3,
        'product' => 'NIKE Pegasus',
        'price' => 159,
        'image_url' => './assets/images/Nike-Pegasus.webp', 
    ],
    [
        'id' => 4,
        'product' => 'NIKE Flyease',
        'price' => 129,
        'image_url' => './assets/images/Nike-flyease.webp', 
    ]

];

$_SESSION['items'] = $items;

foreach($items as $item) {

echo '<div class="shop__article__card">';
echo '<img alt="" class="shop__article__img" src="'.$item['image_url'].'"/>';
echo '<span class="shop__article__name"><br>'.$item["product"].'</span>';
echo '<span class="shop__article__price"><br>'.$item['price'].'€</span>';
echo '<form method="post"><input style="display:none;" name="id" type="number" value="'.$item['price'].'"><input name="id" style="display:none;" value="'.$item['product'].'"><input name="id" style="display:none;" type="number" value="'.$item['id'].'"><input type="submit" name="button1" value="Add to card"/>
</form><br>';
echo '</div>';
}

// check if id sent

if (isset($_POST['id'])) {

    // if id sent, assign id to proid variable

    $proid = $_POST['id'];

    // if cart is get the column id from the cart;

    if (!empty($_SESSION['cart'])) {
    
        // if 
        $acol = array_column($_SESSION['cart'], 'pro_id');
        if (in_array($proid, $acol)) {
            $_SESSION['cart'][$proid]['qty'] += 1;
} else {
$obj = [
    'pro_price' => $items[$proid-1]['price'],
    'pro_name' => $items[$proid-1]['product'],
    'pro_id' => $items[$proid-1]['id'],
    'qty' => 1
  ];
  $_SESSION['cart'][$proid] = $obj;
}
} else {
    $obj = [
        'pro_price' => $items[$proid-1]['price'],
        'pro_name' => $items[$proid-1]['product'],
        'pro_id' => $items[$proid-1]['id'],
        'qty' => 1
      ];

  $_SESSION['cart'][$proid] = $obj;
}
}
?>
 
</section>  
           
    <!--Comments section-->

    <div class="shop__testimonials">
    <div class="testimonials__header">
    <img alt="" src="./assets/images/shoe_two.webp">
    <h2>We provide you the <span>best</span> quality.</h2>
    <p class="">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Beatae dolores quae possimus tenetur veniam ullam quo, minus, 
        corporis a, tdolores quae poss
    </p>
</div>
<div class="testimonials__people">
    <div>
        <img alt="emily" src="./assets/images/image-emily.webp">
            <b>Emily from xyz</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>
    <div>
        <picture>
            <img alt="thomas" src="./assets/images/image-thomas.webp"></picture>
            <b>Thomas from corporate</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>
    <div>
        <img alt="jennie" src="./assets/images/image-jennie.webp">
            <b>Jennie from Nike</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>

</div>
    </div>

    </main>
    
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