<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Napraviti fajl proizvod.php koji sadrzi samo jednu funkciju koja za dato ime proizvoda, sliku, cenu i popust pravi div  (echo 😊) za prikaz svih podataka.
Div za proizvod ce biti sirine 200px, display inline-block ili float left, a sadrzi sliku (dimenzije 200x200), ispod toga naziv, ispod toga cena.
Ako je popust veci od 0, cena je obojena crveno, a prikazana je i cena sa popustom u zelenoj boji.
Ako je popust 0, prikazana je samo prava cena.
CSS nemojte inline, ali moze style u istom fajlu ako vam je lakse. -->

<body>
    <style>
        div{
            width:200px;
            display:inline-block;
            text-align: center;
            
        }
        .slika{
            height: 200px;
            width: 200px;
        }
        .cenaveca{
            color:red;
        }
        span{
            display:block;
        }
        .sapopustom{
            color: green;

        }
        </style>
<?php

    function salje($ime,$slika,$cena,$popust){
        $m=$popust/100*$cena;
        $cenasapopustom=$cena-$m;
        if ($popust>0){
            echo "<div><img class='slika' src=$slika alt='fudbal'>  $ime <span class='cenaveca'>$cena </span> <span class='sapopustom'> $cenasapopustom</span> </div>";
        }else{
            echo "<div> <img src='$slika' alt='fudbal'>  $ime<span class='cena'> $cena</span> </div>";
        
        }
        
    }
    ?>
</body>
</html>