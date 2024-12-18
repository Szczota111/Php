<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
echo "<h1> Zadanie na szota</h1>";
echo "<br>";

function f1($x) {
    return $x * 2;
}

echo "<table border='1px'>";
echo "<tr><th>x</th>"; // Nagłówek dla wiersza x
for ($x = -10; $x <= 10; $x++) {
    echo "<th>$x</th>";
}
echo "</tr>";

echo "<tr><th>f1(x)</th>"; // Nagłówek dla wiersza funkcji f1(x)
for ($x = -10; $x <= 10; $x++) {
    echo "<td>" . f1($x) . "</td>";
}
echo "</tr>";

echo "</table>";
echo "<br>";
echo "Koniec zadania";
?>

</body>
</html>
