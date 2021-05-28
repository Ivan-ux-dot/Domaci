<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 2. Написати функцију која враћа div унутар којег се налази N span елемената који за текст имају
редом бројеве од 1 до N -->
<body>
    <?php

    function div($n){
    echo "<div>";
    for($i=1;$i<=$n;$i++){
        echo "<span>$i</span>";
    }
    echo "</div>";
    }
    
    div (5);

    ?>
</body>
</html>