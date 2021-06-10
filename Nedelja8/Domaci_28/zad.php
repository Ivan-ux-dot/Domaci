<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Napraviti klasu Baldahin (slika ispod) koja nasledjuje klasu Krevet iz domaceg broj 27, i prosiruje clanicama visina i cenaBaldahina. (odvojena cena samo za dodatak)
Napraviti konstruktor koji poziva roditeljski konstruktor i upisuje podatke i u nove dve clanice -->
<?php
include "zad27.php";

class Baldahin extends Krevet {
    public $visina,$cenaBalhadin;
  
function __construct($duzina,$sirina,$materijal,$visina,$cenaBalhadin){
parent::__construct($duzina,$sirina,$materijal,$cena);
$this->visina= $visina;
}
function promeni_saBalhadin($cena){
    $this->cena=$cena;
}
function prikazi_saBalhadin(){
    echo $this->cena;
}
// Metoda __toString, ne poziva roditeljski __toString, vec prikazuje dve cene. Cenu kreveta bez baldahina i sa baldahinom (zbirno). 
// (Posto je cena u klasi Proizvod private, da bi joj se iz klase Baldahin moglo pristupiti treba ili a) uvesti protected ili b) dodati metodu "daj_cenu")
function __toString(){
    return "Cena kreveta bez Baldahina je ".prikazi_saBalhadin(). " , a cena kreveta sa balhadinom je $cenaBalhadin";
}

}
$krevet_sa_balhadinom= new Baldahin("2m","1m","drvo","3m",15000,25000);
echo $krevet_sa_balhadinom;
?>
</body>
</html>