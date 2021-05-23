<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Prikazati brojeve od 30 do 99, ali preskociti sve one cija je prva cifra deljiva sa 3, ili je druga cifra deljiva sa 4. -->
<?php
$a=0;
for($i=30;$i<=99;$i++){
    if(substr($i,0,1) % 3 == 0 || substr($i,1,2) %4 ==0)continue;
        
    echo $a+=$i;
}


?>
</body>
</html>