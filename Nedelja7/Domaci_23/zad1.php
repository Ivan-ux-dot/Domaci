<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Od niza zadatih reči, napraviti niz čiji će svaki element predstavljati span. Svaki span će imati klasu "crveni", "zeleni" u zavisnosti od toga da li je reč kraća ili duža od 5 slova. Prikazati dobijeni niz. -->

<style>
.red{
    color:red;
}
.green{
    color:green;
}
</style>
<body>
    <?php
    function niz($rec){
        $y=[];
        foreach($rec as $element){
            if(strlen($element) > 5){
                array_push($y,"<span class='red'>$element</span>");
            }else{ 
                array_push($y,"<span class='green'>$element</span>");

            }
        
        }
     var_dump($y);
    }


    $x=["rec","lopta","idemonamars"];

    niz($x);
    // Napraviti niz od svih brojeva koji su veći od aritmetičke sredine niza (prosečne vrednosti)
     echo "<br>";
    function nizveci($broj){
        $y=[];
        $k=count($broj);
        $zbir=0;
        foreach($broj as $el){
        $zbir+=$el;
        }
        $pros=$zbir / $k;
        foreach($broj as $el){
            if($el>$pros)
            array_push($y,$el);
            
        }
        print_r($y);
    }
    $p=[2,3,54,7,89,3,100];

    nizveci($p);
    echo "<br>";

//     a) Napisati funkciju koja ucitava niz iz forme iz inputa. Sve brojeve u inputu razdvojiti razmakom. Fja vraca ucitani niz




function niz3(){
   $broj=$_GET['broj'];
   $a=explode(" ",$broj);
   return $a;
}

$a=niz3();
   print_r($a);

echo "<br>";
   //    b) Napisati funkciju koja ispituje i vraca da li neki dati niz X ima bar 3 parna broja.

function triparna($niz){
    $k=count($niz);
    $parnibr=0;
    for($i=0;$i<$k;$i++){
        if($niz[$i] % 2 == 0){
            $parnibr++;
        }
    }
        if($parnibr >= 3){
            return " Ima bar 3 parna broja $parnibr";
        }else{
            return " Nema 3 parna broja $parnibr";
        

    }
}
$b=[1,2,3,4,5,6,7];
$b1=triparna($b);
 echo($b1);
 echo "<br>";

//  c) Napisati funkciju koja ispituje i vraca da li neki dati niz ima sve brojeve manje od 1000.

function manjiod1000($niz){

    $svi=true;
    foreach($niz as $br){
        if($br > 999){
            $svi=false;

        }
    }
  if($svi){
    return "svi brojevi su manji od 1000";
}else{
    return "nisu svi manji od 1000";
}
}
$c=[12,1,2,3,4];
$c1=manjiod1000($c);
echo $c1;
echo "<br>";
// d) Pomocu gornjih funkcija za niz dobijen iz inputa ispitati i prikazati da li taj niz ima sve brojeve manje od 1000 i bar 3 parna. 

$d1=manjiod1000($a);
$d2=triparna($a);
echo $d1;
echo $d2;

?>


</body>
</html>