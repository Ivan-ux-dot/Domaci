<?php

// Napraviti stranicu proizvodi.php koja pomocu gornje funkcije pravi 3 proizvoda po zelji (birajte naziv i sliku), ali su dva proizvoda sa popustom i jedan bez. (ne mogu ciklusi, pozivate 3 puta funkciju)

require_once("proizvod.php");

salje("KING","king.jpg",200,0);
salje("KAPRI","kapri.jpg",80,20);
salje("SNESKO","snesko.jpg",80,20);

?>
