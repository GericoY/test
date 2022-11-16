<?php
    $sodasArr = array('Coke' => 15, 'Sprite' => 20, 'Royal' => 20, 'Pepsi' => 15, 'Mountain Dew' => 20);
    $sizesArr = array('Regular' => 'Regular', 'Up-size (add ₱5)' => 'Up-size', 'Jumbo (add ₱10)' => 'Jumbo');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <h3>Vendo Machine</h3>
    <form method="post">

        <fieldset style="width: 450px;">
            <legend>Products: </legend>

            <?php
                if(isset($sodasArr)){
                    foreach ($sodasArr as $sodasKey => $sodasValue){
                        echo '<input type="checkbox" name="chkSoda['. $sodasKey .']" value="'. $sodasValue . '">
                        <label>'. $sodasKey .' - ₱'. $sodasValue . '</label><br>';
                    }
                }
            ?>
        </fieldset>

        <fieldset style="display: inline-block;">
            <legend>Options:</legend>

            <label for="drpSize"></label>
            <select name="drpSize" id="drpSize">
                <?php
                    if(isset($sizesArr)){
                        foreach($sizesArr as $sizesKey => $sizesValue){
                            echo '<option value="'. $sizesValue .'">'. $sizesKey .'</option>';
                        }
                    }
                ?>
            </select>

            <label for="numQuantity">Quantity</label>
            <input type="number" name="numQuantity" id="numQuantity" min="0" value="0">

            <button type="submit" name="btnSubmit">Check Out</button>
        </fieldset>

    </form>

    <?php
        if(isset($_POST['btnSubmit'])){

            if(isset($_POST['chkSoda']) && isset($_POST['drpSize'])){

                $quantity = $_POST['numQuantity'];
                $size = $_POST['drpSize'];
                $soda = $_POST['chkSoda'];

                //Quantity
                if($quantity == 1){
                    $term = "piece";
                }
                else{
                    $term = "pieces";
                }

                //Sizes
                if($size == 'Regular'){
                    $addOn = 0;
                }
                elseif($size == 'Up-size'){
                    $addOn = 5;
                }
                elseif($size == 'Jumbo'){
                    $addOn = 10;
                }

                echo '<hr><h3>Purchase Summary</h3>';
                foreach ($soda as $sodaKey => $sodaValue){
                    echo
                    '<ul>
                        <li>'. $quantity .' '. $term . ' of ' . $size .' '. $sodaKey .' amounting ₱'. $totalVal = 
                        intval($sodaValue) * intval($quantity) + ($addOn * intval($quantity)) .
                        '</li>
                    </ul>';
                }

                $itemsTotal = ($quantity *sizeof($soda));
                $grandTotal = (array_sum($soda) + $addOn * $quantity) * $quantity;

                echo '<label><b>Total Number of Items:</b></label>'. $itemsTotal .'<br>';
                echo '<label><b>Total Amount:</b></label>'. $grandTotal;
            }      
            else{
                echo '<hr>No Selected Product. Try Again.';
            }
        }
    ?>
</body>
</html>