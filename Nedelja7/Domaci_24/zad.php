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
$x=[1,2,3,4];
function nula($x){
    $nesadrzi=true;
    for($i=0;$i<count($x);$i++){
        if($x[$i] == 0){
            $nesadrzi= false;
            return $nesadrzi;
        }
      
    }
}
$nesadrzi=nula($x);
if($nesadrzi)
    echo "NE sadrzi 0";
else
    echo "Sadrzi 0";







// if(nula($x))
//     echo "Sadrzi 0";
// else
//     echo "Ne sadrzi";
?>
</body>
</html>