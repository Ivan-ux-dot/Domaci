<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Napraviti klasu Krevet, koja ima clanice: duzina, sirina, materijal i cena. Cena je private. 
    // Napisati konstruktor koji dobija i  postavlja sve clanice.
    // Napisati metodu za citanje cene.
    // Napisati metodu __toString koja prikazuje: "Krevet je duzine... i sirine.... napravljen od.... po ceni ...."
    
    class Krevet{
        public $duzina,$sirina,$materijal;
        private $cena;

        function __construct($duzina,$sirina,$materijal,$cena){
            $this->duzina=$duzina;
            $this->sirina=$sirina;
            $this->materijal=$materijal;
            $this->cena=$cena;
        }

        function promeni_cenu($cena){
             $this->cena=$cena;

        }
        function citanje_cene(){
            return $this->cena;
        }
        function __toString(){
            return "Krevet je duzine ".$this->duzina." i sirine ".$this->sirina." napravljen od materijala ".$this->materijal." po ceni od ".$this->citanje_cene();
        }

        // U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
        function popust($procenat){
             $snizenje= $this->cena * ($procenat / 100);
             return $this->cena - $snizenje;

        }

    }
    $krevet1= new Krevet("2m","0.8m","drvo",20000);
         echo $krevet1;
        //  Napraviti dva objekta klase Krevet, sa podacima po zelji. Prikazati samo Krevet sa vecom cenom.
echo "<br>";
    $krevet2= new Krevet("1.9m","1m","drvo",25000);
    $cena1= $krevet1->citanje_cene();
    $cena2= $krevet2->citanje_cene();
    if($cena1 > $cena2)
       echo $cena1;
    else
       echo $cena2;
    //    U klasu krevet dodati metodu "popust" koja za dati popust u procentima - i smanjuje cenu za toliko procenata.
    //    Napraviti novi objekat klase Krevet, zatim ga prikazati, pozvati popust za 10% i prikazati ga opet.
    echo "<br>";
    $krevet3= new Krevet("2m","1m","drvo",10000);
    echo $krevet3;

    $snizenje= $krevet3->popust(10);
    echo "<br>";
    $krevet3= new Krevet("2m","1m","drvo",$snizenje);
    echo $krevet3;
    ?>
</body>
</html>