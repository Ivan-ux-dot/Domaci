<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 1. Написати функцију која враћа већи од 3 броја (3 броја су прослеђени функцији кроз параметре) -->
<body>
<?php

function vracaveci($b1,$b2,$b3){
    
 return max($b1,$b2,$b3);
}
$br1=3;
$br2=5;
$br3=9;

echo vracaveci($br1,$br2,$br3);
?>
</body>
</html>