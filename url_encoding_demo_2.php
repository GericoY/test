<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welcome Back
    <?php
        if($_GET['sex'] == 'Male')
            echo 'Sir '. $_GET['fname'].' '.$_GET['lname'];
        else
            echo 'Maam '. $_GET['fname'].' '.$_GET['lname'];
    ?>
</body>
</html>