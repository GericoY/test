<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys App</title>
</head>
<body>

    <?php
       $imgSize = 20;
       $color = '#000000';

        if(isset($_GET['btnProcess'])){ 
            $imgSize = $_GET['rngSize'];
            $color = $_GET['clrBorder'];
        }
    ?>

    <form method="get">
        <h2>Peys App</h2>

        <label for="rngSize">Select Photo Size</label>
        
        <input type="range" name="rngSize" id="rngSize" min="10" max="100" value="60" step="10"><br>
        
        <label for="clrBorder">Select Border Color</label>
        <input type="color" name="clrBorder" id="clrBorder"><br>

        <input type="submit" name="btnProcess" value="Process"><br>

    </form>

    <br><br>

    <img src="img/Nico_Robin.jpg" alt="NicoRobin.jpg" width="<?php echo $imgSize; ?>%" border="5%" style="color:<?php echo $color; ?>">

</body>
</html>