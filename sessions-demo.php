<?php
    session_start();
    $_SESSION['username'] = 'admin';
    $_SESSION['firstname'] = 'Gerico';
    $_SESSION['lastname'] = 'Yutuc';
    echo $_SESSION['username']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Demo</title>
</head>
<body>
    
</body>
</html>