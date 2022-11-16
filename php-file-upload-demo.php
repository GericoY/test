<?php
    if(isset($_POST['btnProcess'])){
        if(isset($_FILES['filImage'])){
            $arrErrors = array();
            $fileName = $_FILES['filImage']['name'];
            $fileSize = $_FILES['filImage']['size'];
            $fileTemp = $_FILES['filImage']['tmp_name'];
            $fileType = $_FILES['filImage']['type'];
            $fileExt = end(explode('.')$fileName);
        }
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Demo</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="filImage" id=""><br>
        <input type="submit" name="btnProcess" value="Process">
    </form>
</body>
</html>