<?php
    session_start();
    
    $arrProducts = [
        [
            'name' => "Brown Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto et distinctio quasi reprehenderit, culpa nemo ipsum, similique asperiores officia cum. Numquam ab explicabo tempora quam assumenda. Aliquam, adipisci incidunt.",
            'price' => "550",
            'photo1' => "img/produc1A.jpg",
            'photo2' => "img/produc1B.jpg"
        ],
        [
            'name' => "Gray Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto et distinctio quasi reprehenderit, culpa nemo ipsum, similique asperiores officia cum. Numquam ab explicabo tempora quam assumenda. Aliquam, adipisci incidunt.",
            'price' => "550",
            'photo1' => "img/produc2A.jpg",
            'photo2' => "img/produc2B.jpg"
        ],
        [
            'name' => "White Blazer",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto et distinctio quasi reprehenderit, culpa nemo ipsum, similique asperiores officia cum. Numquam ab explicabo tempora quam assumenda. Aliquam, adipisci incidunt.",
            'price' => "750",
            'photo1' => "img/produc3A.jpg",
            'photo2' => "img/produc3B.jpg"
        ],
        [
            'name' => "Dark Blue Polo Shirt",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto et distinctio quasi reprehenderit, culpa nemo ipsum, similique asperiores officia cum. Numquam ab explicabo tempora quam assumenda. Aliquam, adipisci incidunt.",
            'price' => "600",
            'photo1' => "img/produc4A.jpg",
            'photo2' => "img/produc4B.jpg"
        ],
        [
            'name' => "Dark Blue Long Sleeves",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto et distinctio quasi reprehenderit, culpa nemo ipsum, similique asperiores officia cum. Numquam ab explicabo tempora quam assumenda. Aliquam, adipisci incidunt.",
            'price' => "800",
            'photo1' => "img/produc5A.jpg",
            'photo2' => "img/produc5B.jpg"
        ],
        [
            'name' => "White Long Sleeves",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto et distinctio quasi reprehenderit, culpa nemo ipsum, similique asperiores officia cum. Numquam ab explicabo tempora quam assumenda. Aliquam, adipisci incidunt.",
            'price' => "800",
            'photo1' => "img/produc6A.jpg",
            'photo2' => "img/produc6B.jpg" 
        ],
        [
            'name' => "Dark Blue Blazer",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto et distinctio quasi reprehenderit, culpa nemo ipsum, similique asperiores officia cum. Numquam ab explicabo tempora quam assumenda. Aliquam, adipisci incidunt.",
            'price' => "750",
            'photo1' => "img/produc7A.jpg",
            'photo2' => "img/produc7B.jpg"
        ],
        [
            'name' => "Floral Polo",
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque architecto et distinctio quasi reprehenderit, culpa nemo ipsum, similique asperiores officia cum. Numquam ab explicabo tempora quam assumenda. Aliquam, adipisci incidunt.",
            'price' => "650",
            'photo1' => "img/produc8A.jpg",
            'photo2' => "img/produc8B.jpg"
        ],
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/shopping-cart.css">
    <title>Learn IT Easy Online Shop | Home </title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-10">
                <h2><i class="fa fa-store"></i> Learn IT Easy Online Shop</h2>
            </div>
            <div class="col-2 text-right">
                <a href="cart.php" class="btn btn-primary">
                    <i class="fa fa-shopping-cart"></i> Cart 
                    <span class="badge badge-light">
                        <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                    </span>
                </a>
            </div>            
        </div>
        <hr>
        <div class="row">
        <?php
            if(isset($arrProducts)){
                foreach($arrProducts as $test1a => $test1b){
                    echo '<div class="col-md-3 col-sm-6">
                        <div class="product-grid2">
                            <div class="product-image2">
                                <a href="details.php?id='.$test1a.'">
                                    <img class="pic-1" src="' . $arrProducts[$test1a]['photo1'] . '">
                                    <img class="pic-2" src="' . $arrProducts[$test1a]['photo2'] . '">
                                </a>
                                <a class="add-to-cart" href=details.php?id='.$test1a.'"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a>
                            </div>
                            <div class="product-content">
                                <h3 class="title">' . $arrProducts[$test1a]['name'] . ' <span class="badge badge-secondary">₱ ' . $arrProducts[$test1a]['price'] . '</span></h3>
                            </div>
                        </div>
                    </div>';

                    $_SESSION['productArr'][$test1a]['name'] = $arrProducts[$test1a]['name'];
                    $_SESSION['productArr'][$test1a]['description'] = $arrProducts[$test1a]['description'];
                    $_SESSION['productArr'][$test1a]['price'] = $arrProducts[$test1a]['price'];
                    $_SESSION['productArr'][$test1a]['photo1'] = $arrProducts[$test1a]['photo1'];
                    $_SESSION['productArr'][$test1a]['photo2'] = $arrProducts[$test1a]['photo2'];
                }
            }
        ?>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>