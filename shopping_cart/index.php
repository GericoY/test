<?php
    session_start();
    include('arrHolder.php');
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
                    <i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-light">0</span>
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