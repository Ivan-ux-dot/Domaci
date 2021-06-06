<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- $x = [ 
 ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
 ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
 ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
 ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
];
Preko map fje dodati svakom clanu "godine_staza" (jedan slucajan broj od 1 do 3, nije niz)
Preko usort fje sortirati niz po godinama_staza (*dodatak - neobavezno, ako su godine iste pri uporedjivanju, neka prva bude starija osoba)
Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter) -->
 <?php
 $x = [ 
    ['ime'=>"Dragana", "godine"=>32, "grad"=>"Nis", "pozicija"=>"programer"],
    ['ime'=>"Ivana", "godine"=>20, "grad"=>"Bg", "pozicija"=>"dizajner"],
    ['ime'=>"Sinisa", "godine"=>25, "grad"=>"NS", "pozicija"=>"menadzer"],
    ['ime'=>"Stojan", "godine"=>50, "grad"=>"NS", "pozicija"=>"programer"]
   ];

   $y=array_map (function($osoba){
       $osoba ['godine_staza'] =mt_rand (1,3);
       
       return $osoba;

   },$x);

echo "<p>".join(",", $y)."</p>";
echo "<br>";
// Preko usort fje sortirati niz po godinama_staza 
function prikazi_osobu($osoba){
    echo "<p>".join(",", $osoba)."</p>";
}
function prikazi_osobe($niz){
    for($i=0; $i<count($niz); $i++)
        prikazi_osobu($niz[$i]);
}
usort ($y,function($a,$b){
    if($a['godine_staza'] > $b ['godine_staza'])
        return -1;
    else
        return  1;
});
prikazi_osobe($y);
// Preko filter fje napraviti niz od osoba cija je godina_staza najveca. (uputstvo, prvo izracunati max, pa onda filter

array_filter
?>
</body>
</html>