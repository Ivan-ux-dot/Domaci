<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo $a=mt_rand(0,100)."<br>";
    echo $b=mt_rand(0,100)."<br>";
    echo $c=mt_rand(0,100)."<br>";
    if($a>$b && $a>$c){
        if($b>$c){
        echo $c.$b.$a;
        }else{
        echo $b.$c.$a;
        }
        
    }
    if($b>$c && $b>$a){
        if($c>$a){
        echo $a.$c.$b;
        }else{
        echo $c.$a.$b;
        }
    }
    if($c>$a && $c>$b){
        if($b>$a){
        echo $a.$b.$c;
    }else{
        echo $b.$a.$c;
    }
}

       ?>
</body>
</html>
