<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napraviti dva slucajna broja $n i $x u opsegu od 1-10. Prikazati ih.
Napisati funkciju koja pravi i prikazuje "n" span elemenata. Svaki span ima text Ovo je span 1, Ovo je span 2… 
Napraviti "x" divova, pri cemu svaki div dobija "n" spnova pozivajuci prethodnu funkciju.
primer: za n=3 x=4; resenje:
<div><span></span><span></span><span></span></div>
<div><span></span><span></span><span></span></div>
<div><span></span><span></span><span></span></div>
<div><span></span><span></span><span></span></div> -->
<?php
$n= mt_rand(1,10);
$x= mt_rand(1,10);
echo "broj spanova-$n,broj divova- $x";

function span(){
     global $n;
    
    for($i=1;$i<=$n; $i++){
     $m="<span>Ovo je span $i</span>"; 
     echo $m;
    }
   
            }
        


//  $d=span();
//  echo $d;

// echo $d;
// // echo $d;
// $sp=span();
 for($i=1;$i<=$x; $i++){
     echo "<div>";
     span();
     echo "</div>";
   
 }

// echo $m;
?>
    
</body>
</html>