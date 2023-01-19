<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="AZ[store]">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <title>AZ[Store]</title>
</head>
<body>
    <!-- nav -->
    <nav>
        <a href="./index.php">
            AZ[Store]
        </a>
        <div class="shop__nav">
        <a href="#">
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
            <a href="./shopping-cart.php" class="shop__login" id="card">
                <img src="./assets/images/shopping-cart.svg">
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
            <img src="assets/images/shoe_one.png" alt="">
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
        'product' => 'NIKE Air 1',
        'price' => 234,
        'image_url' => './assets/images/shoe_one.png', 
    ], 
    [
        'id' => 2,
        'product' => 'NIKE Air 2 ',
        'price' => 234,
        'image_url' => './assets/images/shoe_one.png', 
    ],
    [
        'id' => 3,
        'product' => 'NIKE Air 3',
        'price' => 234,
        'image_url' => './assets/images/shoe_one.png', 
    ],
    [
        'id' => 4,
        'product' => 'NIKE Air 4',
        'price' => 234,
        'image_url' => './assets/images/shoe_one.png', 
    ]

];

$_SESSION['items'] = $items;

foreach($items as $item) {

echo '<div class="shop__article__card">';
echo '<img class ="shop__article__img" src='.$item['image_url'].'/>';
echo '<span class="shop__article__name"><br>'.$item["product"].'</span>';
echo '<span class="shop__article__price"><br>'.$item['price'].'€</span>';
echo '<form method="post"><input style="visibility:hidden;" name="id" type="number" value="'.$item['price'].'"><input name="id" style="visibility:hidden;" value="'.$item['product'].'"><input name="id" style="visibility:hidden;" type="number" value="'.$item['id'].'"><input type="submit" name="button1" value="Add to card"/> 
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
    <img src="./assets/images/shoe_two.png">
    <h2>We provide you the <span>best</span> quality.</h2>
    <p class="">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
        Beatae dolores quae possimus tenetur veniam ullam quo, minus, 
        corporis a, tdolores quae poss
    </p>
</div>
<div class="testimonials__people">
    <div>
        <img src="./assets/images/image-emily.jpg">
            <b>Emily from xyz</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>
    <div>
        <img src="./assets/images/image-thomas.jpg">
            <b>Thomas from corporate</b>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing 
                elit. Cupiditate error unde debitis optio, officiis 
                providen
            </p>
    </div>
    <div>
        <img src="./assets/images/image-jennie.jpg">
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
        <a href="#">
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