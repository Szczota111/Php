<?php
print_r($_POST); var_dump($_POST)
if(!isset($_POST['wiek']))
{
    echo "Formularz niezostał poprawnie wysłany";
    exit();
}
if(empty($_POST['wiek']) || empty($_POST['nazwisko']))
{
    echo "Brak danych w formularzu";
    exit()
}
//print_r($_POST);
$wiek=$_POST['wiek'];
$nazwisko=$_POST['nazwisko'];
if(isset($_POST['obecny'])) $obecny=$_POST['obecny'];
else $obecny="nie zaznaczono";
if(isset($_POST['plec'])) $plec=$_POST['obecny'];
$kolor=$_POST["kolor"];
$opis=$_POST["opis"];
echo "Wiek=$wiek<br>Nazwisko=$nazwisko<br>Obecny=$obecny<br>Płeć=$plec<br>kolor=$kolor<br>opis=$opis";
echo "<br> Wiek razy 2=".$wiek*2;
?>