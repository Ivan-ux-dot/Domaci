<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Uneti 4 broja preko forme. U php fajlu ucitati ta 4 broja preko $_GET.

(nastavak) Proveriti uslov da li je drugi broj veci od prvog, i četvrti od treceg. Ako uslov nije ispunjen, prikazati gresku (die).

(nastavak) Ako je uslov ispunjen, izračunati 
zbir onih brojeva od prvog do drugog koji su deljivi sa 4, 
pa zbir onih brojeva od trećeg do četvrtog koji su deljivi sa 3. 
Prikazati koji je zbir veći -->

    <?php

    $br1= $_GET['$broj1'];
    $br2= $_GET['$broj2'];
    $br3= $_GET['$broj3'];
    $br4= $_GET['$broj4'];

if($br2>$br1 && $br4>$br3){
    $zbir=0;
    for($i=$br1;$i<=$br2;$i++){
        if($i % 4 == 0){
            $zbir+=$i;
        }
    }
    
}
if($br2>$br1 && $br4>$br3){
    $zbir1=0;
    for($b=$br3;$b<=$br4;$b++){
        if($b % 3 == 0 ){
            $zbir1+=$b;
        }
    }
}else{
  echo "nista";
}
if($zbir>$zbir1){
    echo "zbir je veci. $zbir"
}else{
    echo "zbir1 je veci. $zbir1"
}
?>
</body>
</html>