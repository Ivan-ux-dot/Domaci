<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <?php

    $ime1="Marko";
    $ime2="Aleksandar";

    function zad1(){
        global $ime1, $ime2;
        $duz1=strlen($ime1);
        $duz2=strlen($ime2);

        if($duz1>$duz2){
            echo $ime1;
        }else{
            echo $ime2;
        }

    }
    zad1();

    function zad2(){
        global $ime1, $ime2;
        $duz1=strlen($ime1);
        $duz2=strlen($ime2);

        if($duz1>$duz2){
            return "<p style= 'color:red'>$ime1</p>";
        }else{
            return "<p style= 'color:red'>$ime2</p>";
        }


    }
    $i= zad2();
    echo "<p> zad2.$i</p>";
    
    function zad3(){
        global $ime1, $ime2;
        $duz1=strlen($ime1);
        $duz2=strlen($ime2);

        if($duz1<$duz2){
            return "<p style= 'color:green'>$ime1</p>";
        }else{
            return"<p style= 'color:green'>$ime2</p>";
        }

    }
    $k= zad3();
    echo "<p> zad3.$k </p>";
    
    
    ?>



</body>
</html>