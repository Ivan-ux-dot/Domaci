<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $br1=mt_rand();
    $br2=mt_rand();
    if($br1>$br2){
        echo "<p style=color:green>$br1</p>"."<p style=color:red>$br2</p>";        
    }else{echo "<p style=color:green>$br2</p>"."<p style=color:red>$br1</p>";

    }
    ?>
    <style>
    .green{
        color:green;
    }
    .red{
        color:red;
    }
    </style>
    <?php
      $broj1=mt_rand();
      $broj2=mt_rand();
      if($br1>$br2){
        echo "<p class='green'>$broj1</p>"."<p class='red'>$broj2</p>";        
    }else{
        echo "<p class='green'>$broj2</p>"."<p class='red'>$broj1</p>";
    }
    ?>
</body>
</html>