<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="txtName">
        <input type="submit" name="btnSend" value="Send">
    </form>

    <?php
        if(isset($_POST['btnSend'])){
            //echo filter_input(INPUT_POST, 'txtName', FILTER_SANITIZE_SPECIAL_CHARS);
            echo htmlspecialchars($_POST['txtName']);
        }
    ?>
</body>
</html>