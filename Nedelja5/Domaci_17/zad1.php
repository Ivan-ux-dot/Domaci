<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- Napisati funkciju koja prikazuje paragraf sa 2 spana unutra. Prvi span ima vase ime, drugi span vase prezime. Izracunati koliko ima slova u vasem imenu i prezimenu i zatim pozvati funkciju toliko puta. (primer: Ana Slovic - paragraf se prikazuje ukupno 9 puta) -->

<body>
<?php
$im="Ivan";
$prez="Simonovic";

function ime(){
    global $im,$prez;
    echo "<p><span>$im</span> <span>$prez</span></p>";
}
 $brim=strlen($im);
 $brprez=strlen($prez);
 $ukupno= $brim+$brprez;
 for($i=1;$i<=$ukupno;$i++){
     ime();
 }

?>

</body>
</html>