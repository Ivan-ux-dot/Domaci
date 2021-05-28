<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo "<table>";
    for($i=2;$i<=6;$i=$i+2){
        echo "<tr>";
        for($j=3;$j<=12;$j=$j+3){
            echo "<td> $i - $j";
        }
        echo "</td>";
    }
    echo "</table>";
    ?>
</body>
</html>