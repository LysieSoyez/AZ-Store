<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/scss/style.css">
    <title>AZ[Store]</title>
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

    <!--Header (shoe the right one)-->
    <header>
        <div class="shop__HeroSection">
            <section class= heroSection1>
            <span class ="nike">Nike</span>
            <img src="assets/images/shoe_one.png" alt="">
            </section>
           <section class= "heroSection2">
           <h1>Shoe the right <span>One</span>.</h1>
           <a href="www.exemple.com">See our store</a>
           </section>
          
        </div>
    </header>

    <!--main (our last products)-->
    <main>

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

        <?php
        $item = [
            [
                'pro_id' => $_GET['pro_id'],
                'qty' => 4,
                'product' => 'Nike Air Max 270 ',
                'price' => 234,
                'image_url' => './assets/images/shoe_one.png', 
            ],
        ];

        if (isset($_GET['id'])) {
            $proid = $_GET['id'];
            if (!empty($_SESSION['cart'])) {
                $acol = array_column($_SESSION['cart'], 'pro_id');
                if (in_array($proid, $acol)) {
                    $_SESSION['cart'][$proid]['qty'] += 1;
    } else {
        $item = [
            'pro_id' => $_GET['pro_id'],
            'qty' => 1
          ];
          $_SESSION['cart'][$proid] = $item;
    }
  } else {
    
      $item = [
        [
            'pro_id' => $_GET['pro_id'],
            'qty' => 4,
            'product' => 'Nike Air Max 270 ',
            'price' => 234,
            'image_url' => './assets/images/shoe_one.png', 
        ],
    
    ];
      $_SESSION['cart'][$proid] = $item;
    }
  }
        
        ?>
        
         <h3> Our <span class="shop__h3__span">last products </span></h3>
         
         <section class ="shop__article">
            <div class="shop__article__card">
                <img src=<?php echo $item['image_url'] ?> >
                    <span class="shop__article__name"><?php echo ($item['product']) ?> </span>
                    <span class="shop__article__price"><?php echo ($item['price']) ?>  €</span> 
                    <form method="post" id=add_to_cart>
                        <input type="submit" name="add_to_cart1" value="Add to cart"/> 
                    </form>
            </div>

            <div class="shop__article__card">
                <img src=<?php echo ($item['image_url'])  ?>>
                    <span class="shop__article__name"><?php echo ($item['product']) ?> </span>
                    <span class="shop__article__price"><?php echo ($item['price']) ?> €</span> 
                    <form method="post" id=add_to_cart>
                        <input type="submit" name="add_to_cart2" value="Add to cart"/> 
                    </form>
            </div>

            <div class="shop__article__card">
                <img src=<?php echo ($item['image_url'])  ?>>
                    <span class="shop__article__name"><?php echo ($item['product']) ?> </span>
                    <span class="shop__article__price"><?php echo ($item['price']) ?> €</span> 
                    <form method="post" id=add_to_cart>
                        <input type="submit" name="add_to_cart3" value="Add to cart"/> 
                    </form>
            </div> 

            <div class="shop__article__card">
                <img src=<?php echo ($item['image_url'])  ?>>
                    <span class="shop__article__name"><?php echo ($item['product']) ?> </span>
                    <span class="shop__article__price"><?php echo ($item['price']) ?> €</span> 
                    <form method="post" id=add_to_cart>
                        <input type="submit" name="add_to_cart4" value="Add to cart"/> 
                    </form>
            </div>
            </section>
           
    <!--Comments section-->

    </main>
    
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