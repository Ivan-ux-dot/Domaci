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

    $prvos=substr($im,0,1);
    $pos_raz=strpos($im," ");
    $pos=substr($im,$pos_raz,2);
    echo"$prvos.$pos";
    ?>
</body>
</html>