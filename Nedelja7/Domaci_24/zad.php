<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napisati fju koja vraca true ako neki dati niz ne sadrzi nule, a u suprotnom vraca false. -->
<?php
$x=[0,1,2,3,4];
function nula($x){
  
    for($i=0;$i<count($x);$i++){
        if($x[$i] == 0){
            return false;
            
        }
      
    }
    return true;
}

if(nula($x))
    echo "NE sadrzi 0";
else
    echo "Sadrzi 0";

echo"<br>";

    // Napisati fju koja za dati niz koji predstavlja kolika je uspesnost uradjenih domacih po danima ['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak=>28] pronalazi:
    // Koji dan je najuspesniji
    // Kolika je prosecna uspesnost
    // Razliku izmedju najbolje i najgore uspesnosti
    
    function uradjeni_zad ($niz){
     $naj=0;
     $ind="";
     foreach($niz as $dan=>$uspeh){
        if ($naj <=$uspeh){
        $naj=$uspeh;
        $ind=$dan;
        }
    }
    echo "<p>Najuspesniji dan je $ind sa uspehom $naj</p>";
    $zbir=0;
    $brojd=0;
    foreach($niz as $dan=> $uspeh){
         $zbir+=$uspeh;
         $brojd++;

    }
    $prosek=$zbir / $brojd;
    echo "<p>Prosecna uspesnost je $prosek";
    $najmanji=$niz['ponedeljak'];
    foreach($niz as $dan=> $uspeh)
        if($najmanji>$uspeh)
        $najmanji=$uspeh;
        
        
        $raz=$naj-$najmanji;
        
        
    
    echo "<p>Razlika je $raz</p>";
    }

    $x=['ponedeljak'=>27, 'utorak'=>29, 'cetvrtak'=>28, 'petak'=>28];
    uradjeni_zad($x);
    
    
                            
                
    




?>
</body>
</html>