<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $im= $_GET['ime'];
    $prez= $_GET['prezime'];
  
    $sl1=substr($im,0,1);
    $slpos=substr($prez,0,1);

    echo "$sl1.$slpos";
    ?>
</body>
</html>