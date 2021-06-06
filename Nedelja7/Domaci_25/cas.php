<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x= [ 
 ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
 ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
 ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
 ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
];
// Dodati u gornji niz jos 4 osobe po zelji.
// Napisati fju koja prikazuje imena svih programera.
// Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.
$y=[ 
    ['ime'=>"Milan", "godine"=>35, "grad"=>"NS", "pozicija"=>"profesor"],
    ['ime'=>"Mirko", "godine"=>40, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Ana", "godine"=>35, "grad"=>"VA", "pozicija"=>"menadzer"],
    ['ime'=>"Stefan", "godine"=>55, "grad"=>"KG", "pozicija"=>"Slikar"]
   ];

   for($i=0;$i<count($y);$i++){

       array_push($x,$y[$i]);

   }
   print_r($x); 
   echo "<br>";

   
   


    function sviprogrameri($n){
        $programeri=[];
        for($i=0;$i<count($n);$i++){
            if($n[$i]['pozicija'] === 'programer')
            array_push($programeri,$n[$i]['ime']);
            
        }
        echo join(",",$programeri);
    }

    sviprogrameri($x);
    // Napisati fju koja prikazuje sve podatke neke date osobe. Pozivajuci tu funkciju prikazati sve osobe cije ime sadrzi slovo s.
    
    function svipodaci($n,$m){

        for($i=0;$i<count($n);$i++){
            if($n[$i]['ime']===$m)
            echo join(",",$n[$i]);
        }

    }

    svipodaci($x,'Sinisa');
    echo "<br>";
    svipodaci($x,'Stojan');


    ?>



</body>
</html>