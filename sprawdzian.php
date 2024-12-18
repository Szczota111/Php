<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
// Polecenie 
// napisz jakąs dowolna funkcje nastepnie zrob tabele gdzie bedzie wyswietlac sie
// liczba X przed zastosowaniem funkcji i po napisz to z zakresu od -10 do 10
echo "<h1> zadanie na szota</h1>";
echo "<br>";

$x = -10;
function f1($x)
{
    return $x * 2;

}

echo " <table border=1px>";
echo "<tr>";
echo "<th>Wartosc X </th>";
echo "<th> wartosc funkcji</th>";
echo "</tr>";
for ($i=11; $x < $i; $x++)
{
    $F1value = f1($x);
echo " <tr>";
echo "<td>$x</td>";
echo "<td>$F1value</td>";
echo "</tr>";
}
 echo " </table>";

echo " <br>";
echo "koniec zadania";
?>

    
</body>
</html>