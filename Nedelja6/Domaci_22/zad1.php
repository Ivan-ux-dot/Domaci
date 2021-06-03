<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Napisati fju koja za dati niz brojeva izracunava i prikazuje da li ima vise trocifrenih ili dvocifrenih brojeva. (koristiti for) -->

<body>
    <?php
    function niza($a){
        $k=count($a);
        $trocif=0;
        $dvocif=0;
        for($i=0;$i<$k;$i++){
            if($a[$i]>9 && $a[$i] <100){
            $dvocif++;
           
        }elseif($a[$i]>100){
            $trocif++;
           
        }
        }
        if($dvocif > $trocif)
        echo "ima vise dvocifrenih brojeva $dvocif";
        else 
        echo "ima vise trocifrenih brojeva $trocif";


    }

$x=[10,234,10,10,10];
niza($x);
echo "<br>";

// Napisati fju koja za dati niz stringova pomocu fje "palindrom" (radjeno na casu) ispituje i prikazuje samo palindrome tog niza.  Npr za niz ["potop", "buducnost", "lul", "nije"]  prikazuje reci "potop" i "lul".

function palindrom($niz){
   $palind=[];
    foreach($niz as $rec){
        if($rec ==strrev($rec)){
            array_push($palind,$rec);
        }
    }
        print_r ($palind);
}
$x=["potop", "buducnost", "lul", "nije"];
palindrom($x);
echo"<br>";
// Napisati fju koja od niza reči pravi html listu kao meni... 
// Npr.  ['Stavka 1', 'Stavka 2', …] pretvara u <ul><li>Stavka 1</li><li>Stavka 2</li>…</ul>.  

function nizb($niz){
    echo "<ul>";
    foreach($niz as $rec){
        echo "<li>$rec</li>";

    }
    echo "</ul>";
}
$stavke=["jedan","dva","tri","cetiri",];
nizb($stavke);

    

?>
</body>
</html>