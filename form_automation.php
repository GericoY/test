<?php
    $arrMonths = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Form Automation</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <select name="drpMonths" id="" class="form-control">
                    <?php 
                        if(isset($arrMonths)){
                            foreach($arrMonths as $key => $value){
                                if($value == date('F'))
                                    echo '<option value="'. $value .'" selected>'. $value .'</option>';
                                else
                                    echo '<option value="'. $value .'">'. $value .'</option>';
                            }
                        }
                    ?>
                </select>

                <select name="drpDays" id="" class="form-control">
                    <?php
                        for($i = 1; $i < 32; $i++){
                            if($i == date('d'))
                                echo '<option value="'. $i .'" selected>'. $i .'</option>';
                            else
                                echo '<option value="'. $i .'">'. $i .'</option>';
                        }
                    ?>
                </select>

                <select name="drpYear" id="" class="form-control">
                    <?php
                        for($i = 2022; $i > 1819; $i--){
                            if($i == (date('Y')-10))
                                echo '<option value="'. $i .'" selected>'. $i .'</option>';
                            else
                                echo '<option value="'. $i .'">'. $i .'</option>';
                        }
                    ?>
                </select>

            </div>
        </div>
    </div>
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>