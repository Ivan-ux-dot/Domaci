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
        protected $cena;

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
    
    ?>
</body>
</html>