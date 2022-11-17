<?php
    session_start();
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
    <title>Details</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h3 class="h3"><i class="fa-solid fa-store"></i> Learn IT Easy Online Shop</h3>
            <div class="d-block">
                <a class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-cart-shopping"></i> Cart </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2">
                    <div class="product-image2">
                        <a href="#">
                        <?php 
                            for ($i=0; $i < 9; $i++) { 
                                if($_SESSION['ID'] = $i){
                                    echo '';
                                    break;
                                }
                                else{
                                    continue;
                                }
                            }
                                
                        ?>
                            <img class="pic-1" src="img/produc1A.jpg">
                            <img class="pic-2" src="img/produc1B.jpg">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-6">
                Name
                <br>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam magnam odio fuga eius. Minus numquam nostrum voluptatem nesciunt eius quo enim consequatur pariatur possimus? Perspiciatis dolores sed eligendi pariatur deleniti!
                <hr>
                <h4>Select Size: </h4>
                <input type="radio" name="size" id="size-xs">
                <label for="size-xs">XS</label>
                <input type="radio" name="size" id="size-sm">
                <label for="size-sm">SM</label>
                <input type="radio" name="size" id="size-md">
                <label for="size-md">MD</label>
                <input type="radio" name="size" id="size-lg">
                <label for="size-lg">LG</label>
                <input type="radio" name="size" id="size-xl">
                <label for="size-xl">XL</label>
                <hr>
                <h3>Enter Quantity</h3>
                <input type="number" name="qty" id="qty" style="width: 370px;" min="0" max="100" value="0">
                <div class="d-block mt-3">
                    <button type="button" class="btn btn-dark"><i class="fa-solid fa-circle-check"></i> Confirm Product Purchase</button>
                    <button type="button" class="btn btn-danger">Cancel/Go Back</button>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js" integrity="sha512-wV7Yj1alIZDqZFCUQJy85VN+qvEIly93fIQAN7iqDFCPEucLCeNFz4r35FCo9s6WrpdDQPi80xbljXB8Bjtvcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>