<?php
//include("function_moje.php");
//require_once("function_moje.php);

function aaa(&$tablica) // & referencje
{
    $tablica[1] = 100;
}

function razydwa($a)
{
    $wynik=2*$a;
    return $wynik;
}

function mnozenie($a, $b, $c)
{
    return $a*$b*$c;
}

function cosTamLiczy()
{
    return razydwa(3)*mnozenie(2,2,2);
}

function zmienNapis(&$napis)
{
    $napis = 'Ola ma kota';
    return "jakis tekst";
}
function licz($f,$a=400,$z=100)
{
    return $a+$z+$f;

}

$tab=array();
$tab[1]=200;
echo $tab[1]."<br>";
aaa($tab);
echo $tab[1]."<br>";
$f=150;
echo razyDwa($f)*100;

echo "<br>".mnozenie(1,2,3);
echo "<br>".cosTamLiczy();

//wszystkie funkcje w PHP maja globalny zasieg - moga byc wykonane poza funkcja
//nawet jesli byly zdefiniowane wewnatrz niej, i odwrotnie
// informacja: nazwt funkcji nie rozrozniaja wielkosci liter,
// ale dobrym zwyczajem jest wplywanie ich w formie w ktorej zostały zdefinwane

// Zazwyczaj przekazujemy argumenty do funkcji przez wartosc. Mozemy też przez referencje

$a = "Ala ma kota";
//var_dump($a);
echo "<br>".zmienNapis($a);
echo "<br>$a";

//wartosci domysle argumentow wywołanie funkcji

echo "<br>".licz(4,8);
echo "<br>".licz(7);
echo "<br>".licz(7,z:1);
?>
