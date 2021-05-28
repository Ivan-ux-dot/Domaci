<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- 3. Бонус задатак Написати функцију која враћа N div елемената који имају M span елемената,
који имају текст од 1 до M -->
<body>
    <?php
    function divspan($n,$m){
        for($i=1;$i<=$n;$i++){
            echo "<div>";
            for($j=1;$j<=$m;$j++){
                echo "<span>$j</span>";
            }
            echo "</div>";
        }
    }

    divspan(5,2);
    ?>
</body>
</html>